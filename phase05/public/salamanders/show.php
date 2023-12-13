<?php
require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('salamanders/index.php'));
}

$id = $_GET['id'];
$pageTitle = 'Salamander Details';
$currentPage = 'salamanders';

$salamander = mysqli_fetch_assoc(find_salamander($id));

include_once(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2>Salamander Details</h2>
  <a class="back-link" href="<?= url_for('salamanders/index.php'); ?>">&#8592; Back to List</a>

  <h1><?php echo h($salamander['name']); ?></h1>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Habitat</th>
      <th>Description</th>
      <th>Options</th>
    </tr>
  
    <tr>
      <td><?= h($salamander['id']) ?></td>
      <td><?= h($salamander['name']) ?></td>
      <td class="tableText"><?= h($salamander['habitat']) ?></td>
      <td class="tableText"><?= h($salamander['description']) ?></td>
      <td>
        <a href="<?= url_for('salamanders/edit.php?id=' . h(u($salamander['id']))); ?>">Edit</a>
        <a href="<?= url_for('salamanders/delete.php?id=' . h(u($salamander['id']))); ?>">Delete</a>
      </td>
    </tr>
  </table>
</main>

<?php include_once(SHARED_PATH . '/salamander-footer.php'); ?>
