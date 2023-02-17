<?php

function render_template($template_file_name, $data=[]) {
  extract($data);
  require_once(__DIR__ . "/../../templates/$template_file_name.php");
}

function redirect($path) {
  header("Location: $path");
  exit();
}