<html lang="en">
  <?php session_start(); ?>
 <head>
  <title>Mon site avec Bootstrap 4 </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/1f7457abdb.js"></script>
  <style>
  </style>
</head>
<body>
  <!-- ENTETE -->
  <header>
    <div class="jumbotron text-center" style="margin-bottom:0">
      <h3>Site du TD5</h3>
      <p>Gestion des contacts</p> 
    </div>

    <?php
    if (!isset($_SESSION["nom"]))  // rien en session
      include "navbar.html";
    else
      include "navbarAdmin.html";
    
    ?>
  </header>