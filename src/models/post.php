<?php

const posts_file_path = __DIR__ . '/../../database/posts.json';
const post_id_file_path = __DIR__ . '/../../database/post_id.txt';

function post_model_create($title, $content, $user_id) {
  $posts = json_decode(file_get_contents(posts_file_path), true);
  $id = file_get_contents(post_id_file_path);

  $id++;
  $posts[] = [
    "id" => $id,
    "title" => $title,
    "content" => $content,
    "user_id" => $user_id,
  ];

  json_decode(file_put_contents(posts_file_path, json_encode($posts)));
  file_put_contents(post_id_file_path, $id);
}

function post_model_find_all() {
  $posts = json_decode(file_get_contents(posts_file_path), true);
  return $posts;
}

