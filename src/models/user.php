<?php

const users_file_path = __DIR__ . '/../../database/users.json';
const user_id_file_path = __DIR__ . '/../../database/user_id.txt';

function user_model_create($username, $password, $firstname = "", $lastname = "") {
  $users = json_decode(file_get_contents(users_file_path), true);
  $id = file_get_contents(user_id_file_path);

  $id++;
  $users[] = [
    "id" => $id,
    "username" => $username,
    "password" => $password,
    "firstname" => $firstname,
    "lastname" => $lastname,
  ];

  json_decode(file_put_contents(users_file_path, json_encode($users)));
  file_put_contents(user_id_file_path, $id);
}

function user_model_find_by_username($username) {
  $users = json_decode(file_get_contents(users_file_path), true);
  
  $index = array_search($username, array_column($users, 'username'));

  return is_numeric($index) ? $users[$index] : null;
}

function user_model_find_by_id($id) {
  $users = json_decode(file_get_contents(users_file_path), true);
  
  $index = array_search($id, array_column($users, 'id'));

  return is_numeric($index) ? $users[$index] : null;
}

