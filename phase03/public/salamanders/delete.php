<?php
require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1';
$pageTitle = 'Delete Salamander';
$currentPage = 'salamanders';

include_once(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2><i>STUB FOR: </i>Delete Salamander</h2>
  <a class="back-link" href="<?= url_for('/salamanders/index.php'); ?>">&#8592; Back to List</a>
  <p>Page ID: <?= h($id) ?></p>
</main>

<?php include_once(SHARED_PATH . '/salamander-footer.php'); ?>
