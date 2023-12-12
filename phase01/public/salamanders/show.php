<?php
require_once('../../private/initialize.php'); 

$id = $_GET['id'] ?? '1';
$pageTitle = 'Salamander Details';

include_once(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2>Salamander Details</h2>
  <p>Page ID: <?= h($id) ?></p>
  <p><a href="<?= urlFor('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>
</main>

<?php include_once(SHARED_PATH . '/salamander-footer.php'); ?>
