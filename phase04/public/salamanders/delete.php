<?php
require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('salamanders/index.php'));
}

$id = $_GET['id'];
$pageTitle = 'Delete Salamander';
$currentPage = 'salamanders';

if(is_post_request()) {
  delete_salamander($id);
  redirect_to(url_for('salamanders/index.php'));
} else {
  $salamander = mysqli_fetch_assoc(find_salamander($id));
}

include_once(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2>Delete Salamander</h2>
  <a class="back-link" href="<?= url_for('salamanders/index.php'); ?>">&#8592; Back to List</a>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Habitat</th>
      <th>Description</th>
    </tr>
  
    <tr>
      <td><?= h($salamander['id']) ?></td>
      <td><?= h($salamander['name']) ?></td>
      <td class="tableText"><?= h($salamander['habitat']) ?></td>
      <td class="tableText"><?= h($salamander['description']) ?></td>
    </tr>
  </table>

  <p><strong>Are you sure you want to delete this Salamander?</strong></p>
  <form action="<?= url_for('salamanders/delete.php?id=' . h(u($salamander['id']))); ?>" method="post">
      <input type="submit" name="commit" value="Delete Salamander">
  </form>

</main>

<?php include_once(SHARED_PATH . '/salamander-footer.php'); ?>
