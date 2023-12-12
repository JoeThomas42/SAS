<?php
  if(!isset($pageTitle)) { 
    $pageTitle = 'Salamanders'; 
  }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>SAS - <?= h($pageTitle); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?= urlFor('stylesheets/salamanders.css'); ?>">
  </head>

  <body>
    <header>
      <h1>Southern Appalachian Salamanders (SAS)</h1>
    </header>
    <nav>
      <ul>
        <li><a href="<?= urlFor('/'); ?>">Home</a></li>
        <li><a href="<?= urlFor('salamanders/'); ?>">Salamanders</a></li>
      </ul>
    </nav>
