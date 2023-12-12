<?php

function url_for($script_path) {
  // adds the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string="") {
  return urlencode($string);
}

function rawU($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error_404() {
  header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found' );
  // echo '404 error';
  exit();
}

function error_500() {
  header($_SERVER['SERVER_PROTOCOL'] . "500 Internal Server Error");
  // echo 'error 500';
  exit();
}

function redirect_to($location) {
  header("Location: " . $location);
  exit();
}

function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function is_get_request() {
    return $_SERVER['REQUEST_METHOD'] === 'GET';
}

/********** Query Functions **********/

function find_all_salamanders() {
  global $db;
  $sql = 'SELECT * FROM salamander ';
  $sql .= 'ORDER BY name ASC';
  $result = mysqli_query($db, $sql);
  return $result;
}

?>
