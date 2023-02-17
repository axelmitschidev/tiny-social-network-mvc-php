<?php

require_once __DIR__ . '/../models/user.php';
require_once __DIR__ . '/../models/post.php';

require_once __DIR__ . '/../utils/post.php';

function home_controller() {
  session_start();
  $method = $_SERVER['REQUEST_METHOD'];

  $user = user_model_find_by_id($_SESSION['connected_user_id']);

  if ($user !== null) {
    redirect('/login');
  }
  
  if ($method === 'POST') {
    post_model_create($_POST['title'], $_POST['content'], $_SESSION['connected_user_id']);
  }

  $posts = post_model_find_all();
  posts_map_user($posts);

  render_template('home', [
    "user" => $user,
    "posts" => $posts
  ]);
}
