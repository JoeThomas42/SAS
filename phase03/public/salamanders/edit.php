<?php
require_once('../../private/initialize.php');

$salamanderName = '';
$page_title = 'Edit Salamander';
$currentPage = 'salamanders';

if (!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/index.php'));
}

$id = $_GET['id'];
$salamanderName = '';

if (is_post_request()) {
  $salamanderName = $_POST['salamanderName'] ?? '';
  echo "<div id=\"edit\">Salamander name: $salamanderName</div>";
}

$page_title = 'Edit Salamander';
include(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2><i>STUB FOR: </i>Edit Salamander</h2>
  <a class="back-link" href="<?= url_for('/salamanders/index.php'); ?>">&#8592; Back to List</a>
  
  <form action="<?= url_for('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
    <dl>
      <dt>Salamander&nbsp;Name:</dt>
      <dd><input type="text" name="salamanderName" value="<?= h($salamanderName); ?>"></dd>
    </dl>

    <input type="submit" value="Change Name">
  </form>
  <p>Page ID: <?= h($id) ?></p>
</main>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
