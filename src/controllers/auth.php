<?php

require_once __DIR__ . '/../models/user.php';

function auth_login_controller() {
  $method = $_SERVER['REQUEST_METHOD'];

  if ($method === 'POST') {
    $user = user_model_find_by_username($_POST['username']);

    if ($user && $user['password'] === $_POST['password']) {
      session_start();
      $_SESSION['connected_user_id'] = $user['id'];
      redirect('/');
    }
  }

  render_template('auth/login');
}

function auth_register_controller() {
  $method = $_SERVER['REQUEST_METHOD'];

  if ($method === 'POST') {
    $user = user_model_find_by_username($_POST['username']);
    if ($_POST['password'] === $_POST['password_validation'] && $user === null) {
      user_model_create(
        $_POST['username'], 
        $_POST['password'], 
        $_POST['firstname'] ?? null, 
        $_POST['lastname'] ?? null
      );
    }
  }

  render_template('auth/register');
}

function auth_logout_controller() {
  session_start();
  
  session_destroy();
  
  redirect('/login');
}