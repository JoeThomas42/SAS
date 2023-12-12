<?php
require_once('../../private/initialize.php');

$salamanderName = '';
$page_title = 'Create Salamander';
$currentPage = 'salamanders';

include(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2>Create Salamander</h2>
  <a class="back-link" href="<?= url_for('salamanders/index.php'); ?>">&#8592; Back to List</a>

  <form action="<?= url_for('salamanders/create.php'); ?>" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name">

    <label for="habitat">Habitat</label>
    <textarea name="habitat" id="habitat" cols="30" rows="10"></textarea>

    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>

    <input type="submit" value="Create Salamander">
  </form>
</main>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
