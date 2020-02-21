<!doctype html>
<html lang="fr">

<?php
include("../../controllers/php/boucles_conditions.php");
include("../templates/header.php");
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
              Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...
            </p>
          </div>
          <!-- Card Tabs -->
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active" href="#code1">Code</a></li>
              <li class="tab"><a href="#result1">Résultat</a></li>
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
            <!-- Result Tab -->
            <div id="result1">
              <?php foreach (range(1, 150, 2) as $number): ?>
                <p style="display: inline">
                  <?= "$number\n" ?>
                </p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="card" id="exercice2">
          <!--Card Content -->
          <div class="card-content">
            <p class="center-align flow-text">
              Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers
            </p>
          </div>
          <!-- Card Tabs -->
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active" href="#code2">Code</a></li>
              <li class="tab"><a href="#result2">Résultat</a></li>
            </ul>
          </div>
          <!-- Card Content -->
          <div class="card-content grey lighten-4">
            <!-- Code Tab -->
            <div id="code2">
              <pre>
                <code>
                  <?= htmlspecialchars($ex2); ?>
                </code>
              </pre>
            </div>
            <!-- Result Tab -->
            <div id="result2">
              <?php for ($i = 1; $i <= 500; $i++): ?>
                <p>Je dois faire des sauvegardes régulières de mes fichiers</p>
              <?php endfor; ?>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="card" id="exercice3">
          <!--Card Content -->
          <div class="card-content">
            <p class="center-align flow-text">
              Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un
              tableau HTML
            </p>
          </div>
          <!-- Card Tabs -->
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active" href="#code3">Code</a></li>
              <li class="tab"><a href="#result3">Résultat</a></li>
            </ul>
          </div>
          <!-- Card Content -->
          <div class="card-content grey lighten-4">
            <!-- Code Tab -->
            <div id="code3">
              <pre>
                <code>
                  <?= htmlspecialchars($ex3); ?>
                </code>
              </pre>
            </div>
            <!-- Result Tab -->
            <div id="result3">
              <table class="highlight responsive-table">
                <thead>
                <tr>
                  <?php foreach (range(-1, 12) as $number): ?>
                    <?php if ($number == -1): ?>
                      <th></th>
                    <?php else: ?>
                      <th><?= $number ?></th>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </tr>
                </thead>
                <tbody>
                <?php foreach (range(0, 12) as $i): ?>
                  <tr>
                    <td><?= $i ?></td>
                    <?php foreach (range(0, 12) as $j): ?>
                      <td><?= $i * $j ?></td>
                    <?php endforeach; ?>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
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
