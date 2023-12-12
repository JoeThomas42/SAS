<?php
require_once('../../private/initialize.php');

$pageTitle = 'Create Salamander';
$currentPage = 'salamanders';

include_once(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2><i>STUB FOR: </i>Create Salamander</h2>
  <a class="back-link" href="<?= url_for('/salamanders/index.php'); ?>">&#8592; Back to List</a>

  <?php
    if(is_post_request()) {
      $salamanderName = $_POST['salamanderName'] ?? '';
      echo "Salamander name: " . $salamanderName . "<br>";
    } else {
      redirect_to(url_for('/salamanders/new.php'));
    }
  ?>

</main>

<?php include_once(SHARED_PATH . '/salamander-footer.php'); ?>







