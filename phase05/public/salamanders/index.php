<?php 
require_once('../../private/initialize.php');

$salamander_set = find_all_salamanders();

$pageTitle = 'Salamanders';
$currentPage = 'salamanders';
include_once(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2>Salamanders</h2>
  <a id="create-link" href="new.php">Create Salamander</a>
  
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Habitat</th>
      <th>Description</th>
      <th>Options</th>
    </tr>
  
    <?php while($salamander = mysqli_fetch_assoc($salamander_set)) { ?>
      <tr>
        <td><?= h($salamander['id']) ?></td>
        <td><?= h($salamander['name']) ?></td>
        <td class="tableText"><?= h($salamander['habitat']) ?></td>
        <td class="tableText"><?= h($salamander['description']) ?></td>
        <td>
          <a href="<?= url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a>
          <a href="<?= url_for('salamanders/edit.php?id=' . h(u($salamander['id']))); ?>">Edit</a>
          <a href="<?= url_for('salamanders/delete.php?id=' . h(u($salamander['id']))); ?>">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </table>

  <br><br><br>

  <?php

  ?>
</main>

<?php include_once(SHARED_PATH . '/salamander-footer.php'); ?>
