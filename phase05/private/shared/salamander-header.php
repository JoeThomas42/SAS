<?php
  if(!isset($pageTitle)) { 
    $pageTitle = 'Salamanders';
  }
?>

<!doctype html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>SAS - <?= h($pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="<?= url_for('stylesheets/salamanders.css'); ?>">
  </head>

  <body>
    <header>
      <h1>Southern&nbsp;Appalachian Salamanders&nbsp;(SAS)</h1>
    </header>

    <nav>
      <ul>
        <li><a <?= isset($currentPage) && $currentPage === 'home' ? 'class="current"' : ''; ?> id="home" href="<?= url_for('/'); ?>">Home</a></li>
        <li><a <?= isset($currentPage) && $currentPage === 'salamanders' ? 'class="current"' : ''; ?> id="salamanders" href="<?= url_for('salamanders/'); ?>">Salamanders</a></li>
      </ul>
    </nav>
      