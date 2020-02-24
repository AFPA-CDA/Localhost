<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/vendors/materialize.min.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <title>Accueil - Localhost</title>
</head>

<body>
<nav aria-label="Barre de navigation" role="navigation">
  <!-- Dropdown content -->
  <ul class="dropdown-content" id="php">
    <li><a href="views/php/initiation.php">Initiation</a></li>
    <li><a href="views/php/boucles_conditions.php">Les boucles et les conditions</a></li>
    <li><a href="views/php/tableaux.php">Les tableaux</a></li>
    <li><a href="views/php/fonctions.php">Les fonctions</a></li>
    <li><a href="views/php/dates.php">Les dates</a></li>
  </ul>

  <!-- Another dropdown to prevent data-target error -->
  <ul class="dropdown-content" id="php2">
    <li><a href="views/php/initiation.php">Initiation</a></li>
    <li><a href="views/php/boucles_conditions.php">Les boucles et les conditions</a></li>
    <li><a href="views/php/tableaux.php">Les tableaux</a></li>
    <li><a href="views/php/fonctions.php">Les fonctions</a></li>
    <li><a href="views/php/dates.php">Les dates</a></li>
  </ul>

  <!-- Navbar -->
  <div class="deep-purple nav-wrapper">
    <!-- Logo -->
    <a href="index.php" class="brand-logo center">Localhost</a>
    <a aria-haspopup="true" class="sidenav-trigger" data-target="mobile-nav" href="#">
      <i class="material-icons">menu</i>
    </a>
    <ul class="left hide-on-med-and-down">
      <!-- Dropdown trigger -->
      <li class="dropdown-trigger" data-target="php">
        <a href="#">PHP
          <i class="material-icons right">arrow_drop_down</i>
        </a>
      </li>
    </ul>
  </div>

  <!-- Mobile navigation -->
  <div aria-labelledby="mobile-nav" role="navigation">
    <ul class="sidenav" id="mobile-nav">
      <li><a href="index.php">Accueil</a></li>
      <!-- Dropdown trigger -->
      <li class="dropdown-trigger" data-target="php2">
        <a href="#">PHP
          <i class="material-icons right">arrow_drop_down</i>
        </a>
      </li>
    </ul>
  </div>
</nav>

<!-- Page Content -->
<main role="main">
  <div class="container">
    <div class="row">
      <div class="center-align col s12">
        <h1>Bienvenue sur mon localhost !</h1>
        <h2>Work In Progress</h2>
      </div>
    </div>
  </div>
</main>

<script src="assets/js/vendors/materialize.min.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>
