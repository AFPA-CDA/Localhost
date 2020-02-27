<!doctype html>
<html lang="fr">

<?php
include("../../controllers/php/pdo.php");
include("../templates/head.php");
?>

<body>
<?php include("../templates/navbar.php"); ?>

<!-- Page Content -->
<main class="section" role="main">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <!-- Card 1 -->
        <div class="card" id="exercice1">
          <!--Card Content -->
          <div class="card-content">
            <p class="center-align flow-text">
              Concevez une page permettant d'afficher le détail d'un disque.
            </p>
          </div>
          <!-- Card Tabs -->
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active" href="#code1">Code</a></li>
            </ul>
          </div>
          <!-- Card Content -->
          <div class="card-content grey lighten-4">
            <!-- Code Tab -->
            <div id="code1">
              <pre>
                <code>
                  <?= htmlspecialchars($ex1); ?>
                </code>
              </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include("../templates/footer.php"); ?>
</body>
</html>
