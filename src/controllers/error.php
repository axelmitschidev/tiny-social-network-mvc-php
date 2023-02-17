<?php

function error_404_controller() {
  http_response_code(404);
  render_template('error/error_404');
}
