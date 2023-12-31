<?php
require_once('../../private/initialize.php');

$salamanderName = '';
$page_title = 'Create Salamander';
$currentPage = 'salamanders';

if(is_post_request()) {
  $salamander = [];
  $salamander['name'] = mysqli_real_escape_string($db, $_POST['name']) ?? '';
  $salamander['habitat'] =  mysqli_real_escape_string($db, $_POST['habitat']) ?? '';
  $salamander['description'] =  mysqli_real_escape_string($db, $_POST['description']) ?? '';

  $result = insert_salamander($salamander);
  if($result === true) {
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('salamanders/show.php?id=' . $new_id));
  } else {
    $errors = $result;
    }
  }
  

include(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2>Create Salamander</h2>
  <a class="back-link" href="<?= url_for('salamanders/index.php'); ?>">&#8592; Back to List</a>

  <?= show_errors($errors) ?>

  <form action="<?= url_for('salamanders/new.php'); ?>" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="<?= isset($salamander['name']) ? $salamander['name'] : ''?>">

    <label for="habitat">Habitat</label>
    <textarea name="habitat" id="habitat" cols="30" rows="10"><?= isset($salamander['habitat']) ? $salamander['habitat'] : ''?></textarea>

    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10"><?= isset($salamander['description']) ? $salamander['description'] : ''?></textarea>

    <input type="submit" value="Create Salamander">
  </form>
</main>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
