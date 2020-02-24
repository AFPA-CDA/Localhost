<!doctype html>
<html lang="fr">

<?php
include("../../controllers/php/fonctions.php");
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
              Ecrivez une fonction qui permette de générer un lien.
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
            <div class="center-align" id="result1">
              <?= lien("https://www.reddit.com/", "Reddit Hub"); ?>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="card" id="exercice2">
          <!--Card Content -->
          <div class="card-content">
            <p class="center-align flow-text">
              Ecrivez une fonction qui calcul la somme des valeurs d'un tableau.
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
              <?= somme(array(4, 3, 8, 2)); ?>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="card" id="exercice3">
          <!--Card Content -->
          <div class="card-content">
            <p class="center-align flow-text">
              Créer une fonction qui vérifie le niveau de complexité d'un mot de passe.
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
              <p>Mot de passe: <b>TopSecret42</b></p>
              <?php var_dump(complex_password("TopSecret42")); ?>
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
