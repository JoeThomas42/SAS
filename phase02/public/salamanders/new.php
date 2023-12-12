<?php
require_once('../../private/initialize.php');

$salamanderName = '';
$page_title = 'Create Salamander';
$currentPage = 'salamanders';

include(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2>Create Salamander</h2>
  <a class="back-link" href="<?= url_for('/salamanders/index.php'); ?>">&#8592; Back to List</a>

  <form action="<?= url_for('/salamanders/create.php'); ?>" method="post">
    <dl>
      <dt>Salamander Name:</dt>
      <dd><input type="text" name="salamanderName" value="<?= h($salamanderName); ?>"></dd>
    </dl>

    <input type="submit" value="Create Page">
  </form>
</main>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
