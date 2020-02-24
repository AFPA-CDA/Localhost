<!doctype html>
<html lang="fr">

<?php
include("../../controllers/php/dates.php");
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
              Trouvez le numéro de semaine de la date suivante : 14/07/2019.
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
              $date = new DateTime("2019-07-14");
              $weekNumber = $date->format("W");
              ?>

              <p class="center-align">Numéro de la semaine: <?= $weekNumber; ?></p>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="card" id="exercice2">
          <!--Card Content -->
          <div class="card-content">
            <p class="center-align flow-text">
              Combien reste-t-il de jours avant la fin de votre formation ?
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
            <div class="center-align" id="result2">
              <?php
              $actualDate = new DateTime();
              $endDate = new DateTime("2020-09-25");
              $daysBeforeEnd = $endDate->diff($actualDate)->days;
              ?>

              <p>Jours avant la fin de la formation: <?= $daysBeforeEnd; ?></p>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="card" id="exercice3">
          <!--Card Content -->
          <div class="card-content">
            <p class="center-align flow-text">
              Comment déterminer si une année est bissextile ?
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
            <div class="center-align" id="result3">
              <?php
              $currentDate = new DateTime();
              $isLeap = $currentDate->format('L');
              ?>

              <?php if ($isLeap): ?>
                <p>L'année <?= $currentDate->format("Y") ?> est bissextile</p>
              <?php else: ?>
                <p>L'année <?= $currentDate->format("Y") ?> n'est pas bissextile</p>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="card" id="exercice4">
          <!--Card Content -->
          <div class="card-content">
            <p class="center-align flow-text">
              Montrez que la date du 32/17/2019 est erronée.
            </p>
          </div>
          <!-- Card Tabs -->
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active" href="#code4">Code</a></li>
              <li class="tab"><a href="#result4">Résultat</a></li>
            </ul>
          </div>
          <!-- Card Content -->
          <div class="card-content grey lighten-4">
            <!-- Code Tab -->
            <div id="code4">
              <pre>
                <code>
                  <?= htmlspecialchars($ex4); ?>
                </code>
              </pre>
            </div>
            <!-- Result Tab -->
            <div id="result4">
              <?php
              $invalidDate = DateTime::createFromFormat("d/m/Y", "32/17/2019");
              $errors = DateTime::getLastErrors();
              ?>

              <p class="center-align">
                <?php if ($errors["error_count"] > 0 || $errors["warning_count"] > 0): ?>
                  <?php foreach($errors["warnings"] as $warning): ?>
                    <?= $warning; ?>
                  <?php endforeach; ?>
                <?php endif; ?>
              </p>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="card" id="exercice5">
          <!--Card Content -->
          <div class="card-content">
            <p class="center-align flow-text">
              Affichez l'heure courante sous cette forme : 11h25.
            </p>
          </div>
          <!-- Card Tabs -->
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active" href="#code5">Code</a></li>
              <li class="tab"><a href="#result5">Résultat</a></li>
            </ul>
          </div>
          <!-- Card Content -->
          <div class="card-content grey lighten-4">
            <!-- Code Tab -->
            <div id="code5">
              <pre>
                <code>
                  <?= htmlspecialchars($ex5); ?>
                </code>
              </pre>
            </div>
            <!-- Result Tab -->
            <div id="result5">
              <?php
              $currentDate = new DateTime();
              ?>

              <p class="center-align">
                <?= $currentDate->format("H\hi e") ?>
              </p>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="card" id="exercice6">
          <!--Card Content -->
          <div class="card-content">
            <p class="center-align flow-text">
              Ajoutez 1 mois à la date courante.
            </p>
          </div>
          <!-- Card Tabs -->
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active" href="#code6">Code</a></li>
              <li class="tab"><a href="#result6">Résultat</a></li>
            </ul>
          </div>
          <!-- Card Content -->
          <div class="card-content grey lighten-4">
            <!-- Code Tab -->
            <div id="code6">
              <pre>
                <code>
                  <?= htmlspecialchars($ex6); ?>
                </code>
              </pre>
            </div>
            <!-- Result Tab -->
            <div class="center-align" id="result6">
              <?php
              $modifiedDate = new DateTime();
              $modifiedDate->add(DateInterval::createFromDateString("1 months"));
              ?>

              <p>Date actuelle: <?= date("d/m/Y"); ?></p>
              <p>Date avec 1 mois ajouté: <?= $modifiedDate->format("d/m/Y"); ?></p>
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
