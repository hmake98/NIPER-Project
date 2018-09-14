<?php include 'functions.php'; ?>
<html>  
<head>
  <title>
    Instrument List and Charges
  </title>
  <?php head(); ?>
</head>

<body style="font-size:93.8%">
  <?php setlocale(LC_MONETARY, 'en_IN'); ?>
  <div style="transform: none;">
    <div id="wrapper" style="transform: none;">
      <?php 
        include 'partials/header.php'; 
        include 'partials/navbar.php';
      ?>

      <div id="content" >
        <?php include 'layouts/partials/breadcrumb.php'; ?>
      </div> 
    
        <div class="m-5">
          
          <?php include 'layouts/partials/sidebar.php'; ?>

          <div class="leftContent">
