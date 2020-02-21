<!doctype html>
<html lang="fr">

<?php
$title = "Exercices PHP - Les Tableaux";
include("../templates/header.php");
?>

<body>
<?php
$tabs = true;
$items = array(
  "exercice1" => "Mois de l'année",
  "exercice2" => "Capitales",
  "exercice3" => "Départements"
);

$ex1 = /** @lang PHP */
  <<<'PHP'

<?php
  $monthAndYears = array(
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Aôut" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
  );

  // Sorts the table in a ascending order
  asort($monthAndYears);
  ?>

<table>
  <thead>
  <tr>
    <th>Mois</th>
    <th>Nombre de jours</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($monthAndYears as $month => $year): ?>
    <tr>
      <td><?= $month ?></td>
      <td><?= $year ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
PHP;

$ex2 = /** @lang PHP */
  <<<'PHP'

<?php for ($i = 1; $i <= 500; $i++): ?>
  <p>Je dois faire des sauvegardes régulières de mes fichiers</p>
<?php endfor; ?>
PHP;

$ex3 = /** @lang PHP */
  <<<'PHP'

<table>
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
PHP;

include("../templates/navbar.php");
?>

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
              Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.
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
              <?php
              $monthAndYears = array(
                "Janvier" => 31,
                "Février" => 28,
                "Mars" => 31,
                "Avril" => 30,
                "Mai" => 31,
                "Juin" => 30,
                "Juillet" => 31,
                "Aôut" => 31,
                "Septembre" => 30,
                "Octobre" => 31,
                "Novembre" => 30,
                "Décembre" => 31
              );

              asort($monthAndYears);
              ?>

              <table class="centered highlight responsive-table">
                <thead>
                <tr>
                  <th>Mois</th>
                  <th>Nombre de jours</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($monthAndYears as $month => $year): ?>
                  <tr>
                    <td><?= $month ?></td>
                    <td><?= $year ?></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Cards 2 Section -->
        <div id="exercice2">
          <!-- First Card -->
          <div class="card">
            <!--Card Content -->
            <div class="card-content">
              <p class="center-align flow-text">
                Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.
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
