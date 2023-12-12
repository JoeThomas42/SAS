<?php
require_once('../../private/initialize.php');

$pageTitle = 'Create Salamander';
$currentPage = 'salamanders';

if(is_post_request()) {

  $salamander = [];
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = insert_salamander($salamander);
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('salamanders/show.php?id=' . $new_id));

  } else {
    redirect_to(url_for('salamanders/new.php'));
  }
