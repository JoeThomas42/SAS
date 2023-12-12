<?php
require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1';
$pageTitle = 'Salamander Details';
$currentPage = 'salamanders';

include_once(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2><i>STUB FOR : </i>Salamander Details</h2>
  <a class="back-link" href="<?= url_for('/salamanders/index.php'); ?>">&#8592; Back to List</a>
  <p>Page ID: <?= h($id) ?></p>
</main>

<?php include_once(SHARED_PATH . '/salamander-footer.php'); ?>
