<!doctype html>
<html lang="fr">

<?php
include("../../controllers/php/tableaux.php");
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
              <?php asort($monthAndYears); ?>
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
            <!-- Card Content -->
            <div class="card-content">
              <p class="center-align flow-text">
                Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.
              </p>
            </div>
            <!-- Card Tabs -->
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#code2p1">Code</a></li>
                <li class="tab"><a href="#result2p1">Résultat</a></li>
              </ul>
            </div>
            <!-- Card Content -->
            <div class="card-content grey lighten-4">
              <!-- Code Tab -->
              <div id="code2p1">
              <pre>
                <code>
                  <?= htmlspecialchars($ex2p1); ?>
                </code>
              </pre>
              </div>
              <!-- Result Tab -->
              <div id="result2p1">
                <table class="centered highlight responsive-table">
                  <thead>
                  <tr>
                    <th>Capitales</th>
                    <th>Pays</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  ksort($capitales);

                  foreach ($capitales as $capitale => $pays): ?>
                    <tr>
                      <td><?= $capitale ?></td>
                      <td><?= $pays ?></td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Second Card -->
          <div class="card">
            <!-- Card Content -->
            <div class="card-content">
              <p class="center-align flow-text">
                Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.
              </p>
            </div>
            <!-- Card Tabs -->
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#code2p2">Code</a></li>
                <li class="tab"><a href="#result2p2">Résultat</a></li>
              </ul>
            </div>
            <!-- Card Content -->
            <div class="card-content grey lighten-4">
              <!-- Code Tab -->
              <div id="code2p2">
              <pre>
                <code>
                  <?= htmlspecialchars($ex2p2); ?>
                </code>
              </pre>
              </div>
              <!-- Result Tab -->
              <div id="result2p2">
                <table class="centered highlight responsive-table">
                  <thead>
                  <tr>
                    <th>Pays</th>
                    <th>Capitales</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  // Sorts the array by the values in ascending order
                  asort($capitales);

                  foreach ($capitales as $capitale => $pays): ?>
                    <tr>
                      <td><?= $pays ?></td>
                      <td><?= $capitale ?></td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Third Card -->
          <div class="card">
            <!-- Card Content -->
            <div class="card-content">
              <p class="center-align flow-text">
                Affichez le nombre de pays dans le tableau.
              </p>
            </div>
            <!-- Card Tabs -->
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#code2p3">Code</a></li>
                <li class="tab"><a href="#result2p3">Résultat</a></li>
              </ul>
            </div>
            <!-- Card Content -->
            <div class="card-content grey lighten-4">
              <!-- Code Tab -->
              <div id="code2p3">
              <pre>
                <code>
                  <?= htmlspecialchars($ex2p3); ?>
                </code>
              </pre>
              </div>
              <!-- Result Tab -->
              <div id="result2p3">
                <p class="center-align">
                  <?= count($capitales); ?>
                </p>
              </div>
            </div>
          </div>

          <!-- Fourth Card -->
          <div class="card">
            <!-- Card Content -->
            <div class="card-content">
              <p class="center-align flow-text">
                Supprimer du tableau toutes les capitales ne commençant pas par la lettre 'B', puis affichez le contenu
                du tableau.
              </p>
            </div>
            <!-- Card Tabs -->
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#code2p4">Code</a></li>
                <li class="tab"><a href="#result2p4">Résultat</a></li>
              </ul>
            </div>
            <!-- Card Content -->
            <div class="card-content grey lighten-4">
              <!-- Code Tab -->
              <div id="code2p4">
              <pre>
                <code>
                  <?= htmlspecialchars($ex2p4); ?>
                </code>
              </pre>
              </div>
              <!-- Result Tab -->
              <div id="result2p4">
                <?php
                foreach ($capitales as $key => $value) {
                  if (preg_match("/^[^b]/i", $key)) {
                    unset($capitales[$key]);
                  }
                }
                ?>
                <table class="centered highlight responsive-table">
                  <thead>
                  <tr>
                    <th>Capitales</th>
                    <th>Pays</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($capitales as $capitale => $pays): ?>
                    <tr>
                      <td><?= $capitale ?></td>
                      <td><?= $pays ?></td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Cards 3 Section -->
        <div id="exercice3">
          <!-- First Card -->
          <div class="card">
            <!-- Card Content -->
            <div class="card-content">
              <p class="center-align flow-text">
                Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements.
              </p>
            </div>
            <!-- Card Tabs -->
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#code3p1">Code</a></li>
                <li class="tab"><a href="#result3p1">Résultat</a></li>
              </ul>
            </div>
            <!-- Card Content -->
            <div class="card-content grey lighten-4">
              <!-- Code Tab -->
              <div id="code3p1">
              <pre>
                <code>
                  <?= htmlspecialchars($ex3p1); ?>
                </code>
              </pre>
              </div>
              <!-- Result Tab -->
              <div id="result3p1">
                <?php ksort($departements); ?>
                <table class="centered highlight responsive-table">
                  <thead>
                  <tr>
                    <th>Régions</th>
                    <th>Départements</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($departements as $region => $value): ?>
                    <?php foreach ($value as $departement): ?>
                      <tr>
                        <td><?= $region ?></td>
                        <td><?= $departement ?></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Second Card -->
          <div class="card">
            <!-- Card Content -->
            <div class="card-content">
              <p class="center-align flow-text">
                Affichez la liste des régions suivie du nombre de départements
              </p>
            </div>
            <!-- Card Tabs -->
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#code3p2">Code</a></li>
                <li class="tab"><a href="#result3p2">Résultat</a></li>
              </ul>
            </div>
            <!-- Card Content -->
            <div class="card-content grey lighten-4">
              <!-- Code Tab -->
              <div id="code3p2">
              <pre>
                <code>
                  <?= htmlspecialchars($ex3p2); ?>
                </code>
              </pre>
              </div>
              <!-- Result Tab -->
              <div id="result3p2">
                <table class="centered highlight responsive-table">
                  <thead>
                  <tr>
                    <th>Régions</th>
                    <th>Nombre de Départements</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($departements as $region => $departement): ?>
                    <tr>
                      <td><?= $region ?></td>
                      <td><?= count($departement) ?></td>
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
