<?php

require_once __DIR__ . '/../models/user.php';

function posts_map_user(&$posts) {

  foreach ($posts as $key => $post) {
    $user = user_model_find_by_id($post['user_id']);
    $posts[$key]['user'] = $user;
    unset($posts[$key]['user_id']);
  }
}