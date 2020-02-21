<header role="banner">
  <nav aria-label="Barre de navigation" class="<?= $tabs ? 'deep-purple nav-extended' : '' ?>" role="navigation">
    <!-- Dropdown content -->
    <ul class="dropdown-content" id="php">
      <li><a href="../php/initiation.php">Initiation</a></li>
      <li><a href="../php/boucles_conditions.php">Les boucles et les conditions</a></li>
      <li><a href="../php/tableaux.php">Les tableaux</a></li>
    </ul>

    <!-- Another dropdown to prevent data-target error -->
    <ul class="dropdown-content" id="php2">
      <li><a href="../php/initiation.php">Initiation</a></li>
      <li><a href="../php/boucles_conditions.php">Les boucles et les conditions</a></li>
      <li><a href="../php/tableaux.php">Les tableaux</a></li>
    </ul>

    <!-- Navbar -->
    <div class="deep-purple nav-wrapper">
      <!-- Logo -->
      <a href="../../index.php" class="brand-logo center">Localhost</a>
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
        <li><a href="../../index.php">Accueil</a></li>
        <!-- Dropdown trigger -->
        <li class="dropdown-trigger" data-target="php2">
          <a href="#">PHP
            <i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
      </ul>

      <!-- Optional tabs under the navbar -->
      <?php if ($tabs): ?>
        <div class="center-align nav-content">
          <ul class="tabs tabs-transparent">
            <?php foreach ($items as $id => $text): ?>
              <li class="tab">
                <a href='<?= "#$id" ?>'><?= $text ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
    </div>
  </nav>
</header>
