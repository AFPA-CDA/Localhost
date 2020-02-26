<!doctype html>
<html lang="fr">

<?php
include("../../controllers/php/fichiers.php");
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
              Lecture d'un fichier.
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
              $lines = file("../../assets/files/liens.txt");
              ?>

              <?php foreach ($lines as $line_num => $line): ?>
                <p class="center-align">
                  Ligne <?= ++$line_num; ?>: <?= htmlspecialchars($line); ?>
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
              Récupération d'un fichier distant.
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
              <?php
              $file = file("http://bienvu.net/misc/customers.csv");
              $csv = array_map('str_getcsv', $file);
              asort($csv);
              ?>

              <table class="centered highlight responsive-table">
                <thead>
                <tr>
                  <th>Firstname</th>
                  <th>Surname</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>City</th>
                  <th>State</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($csv as $csv_row): ?>
                  <tr>
                    <?php foreach ($csv_row as $csv_value): ?>
                      <td><?= $csv_value ?></td>
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
