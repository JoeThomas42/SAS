<?php 
require_once('../../private/initialize.php');

$salamanders = [
  ['id' => 1, 'salamanderName' => 'Red-Legged Salamander'],
  ['id' => 2, 'salamanderName' => 'Pigeon Mountain Salamander'],
  ['id' => 3, 'salamanderName' => 'ZigZag Salamander'],
  ['id' => 4, 'salamanderName' => 'Slimy Salamander'],
];

$pageTitle = 'Salamanders';
$currentPage = 'salamanders';
include_once(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2>Salamanders</h2>
  <a id="create-link" href="create.php">Create Salamander</a>
  
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>
  
    <?php foreach($salamanders as $salamander) { ?>
      <tr>
        <td><?= $salamander['id'] ?></td>
        <td><?= $salamander['salamanderName'] ?></td>
        <td><a href="<?= url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
        <td><a href="<?= url_for('salamanders/edit.php?id=' . h(u($salamander['id']))); ?>">Edit</a></td>
        <td><a href="#">Delete</a></td>
      </tr>
    <?php } ?>
  </table>
</main>

<?php include_once(SHARED_PATH . '/salamander-footer.php'); ?>
