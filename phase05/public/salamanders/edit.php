<?php
require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/index.php'));
}

$id = $_GET['id'];
$pageTitle = 'Edit Salamander';
$currentPage = 'salamanders';

if(is_post_request()) {
  $salamander = [];
  $salamander['id'] = $id;
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = update_salamander($salamander);
  if($result === true) { 
    redirect_to(url_for('salamanders/show.php?id=' . $id));
  } else {
    $errors = $result;
  }

} else {
  $salamander = mysqli_fetch_assoc(find_salamander($id));
}

include(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2>Edit Salamander</h2>
  <a class="back-link" href="<?= url_for('/salamanders/index.php'); ?>">&#8592; Back to List</a>

  <?= show_errors($errors) ?>
  
  <form action="<?= url_for('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
    <label for="name">Edit Name</label>
    <input type="text" id="name" name="name" value="<?= $salamander['name'] ?>">

    <label for="habitat">Edit Habitat</label>
    <textarea name="habitat" id="habitat" cols="30" rows="10"><?= $salamander['habitat'] ?></textarea>

    <label for="description">Edit Description</label>
    <textarea name="description" id="description" cols="30" rows="10"><?= $salamander['description'] ?></textarea>

    <input type="submit" value="Edit Salamander">
  </form>

</main>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
