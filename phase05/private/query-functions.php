<?php

function find_all_salamanders() {
  global $db;

  $sql = 'SELECT * FROM salamander ';
  $sql .= 'ORDER BY name ASC';
  $result = mysqli_query($db, $sql);

  return $result;
}

function find_salamander($id) {
  global $db;

  $sql = "SELECT * FROM salamander ";
  $sql .= "WHERE id='" . $id . "'";
  $result = mysqli_query($db, $sql);

  return $result;
}

function delete_salamander($id) {
  global $db;

  $sql = "DELETE FROM salamander ";
  $sql .= "WHERE id='" . $id . "' ";
  $sql .= "LIMIT 1";

  $result = mysqli_query($db, $sql);

  if($result) {
    return true;
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

function insert_salamander($salamander) {
  global $db;

  $errors = validate_salamander($salamander);
  if(!empty($errors)) {
    return $errors;
  }

  $sql = "INSERT INTO salamander ";
  $sql .= "(name, habitat, description) ";
  $sql .= "VALUES (";
  $sql .= "'" . $salamander['name'] . "',";
  $sql .= "'" . $salamander['habitat'] . "',";
  $sql .= "'" . $salamander['description'] . "'";
  $sql .= ")";

  $result = mysqli_query($db, $sql);

  if($result) {
    return true;
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

function update_salamander($salamander) {
  global $db;

  $errors = validate_salamander($salamander);
  if(!empty($errors)) {
    return $errors;
  }

  $sql = "UPDATE salamander SET ";
  $sql .= "name='" . $salamander['name'] . "', ";
  $sql .= "habitat='" . $salamander['habitat'] . "', ";
  $sql .= "description='" . $salamander['description'] . "' ";
  $sql .= "WHERE id='" . $salamander['id'] . "' ";
  $sql .= "LIMIT 1";

  $result = mysqli_query($db, $sql);

  if($result) {
    return true;
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

function validate_salamander($salamander) {
  $errors = [];

  if(is_blank($salamander['name'])) {
    $errors[] = "Name cannot be blank.";
  } elseif(!has_length($salamander['name'], ['min' => 2, 'max' => 255])) {
    $errors['name-length'] = "Name must be between 2 and 255 characters.";
  }

  if(is_blank($salamander['habitat'])) {
    $errors[] = "Habitat cannot be blank.";
  } elseif(!has_length($salamander['habitat'], ['min' => 2, 'max' => 255])) {
    $errors['hab-length'] = "Habitat must be between 2 and 255 characters.";
  }

  if(is_blank($salamander['description'])) {
    $errors[] = "Description cannot be blank.";
  } elseif(!has_length($salamander['description'], ['min' => 2, 'max' => 255])) {
    $errors[] = "Description must be between 2 and 255 characters.";
  }

  return $errors;
}
