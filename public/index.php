<?php

require_once __DIR__ . '/../src/utils/utils.php';

require_once __DIR__ . '/../src/controllers/auth.php';
require_once __DIR__ . '/../src/controllers/error.php';
require_once __DIR__ . '/../src/controllers/home.php';

$request_uri = $_SERVER['REQUEST_URI'];

switch ($request_uri) {
  case '/login':
    auth_login_controller();
    break;

  case '/register':
    auth_register_controller();
    break;
  
  case '/logout':
    auth_logout_controller();
    break;

  case '/':
    home_controller();
    break;
  
  default:
    error_404_controller();
    break;
}
