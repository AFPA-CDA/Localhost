<!doctype html>
<html lang="fr">

<?php
include("../../controllers/php/formulaire.php");
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
              Reprenez le formulaire que vous avez réalisé dans la séance précédente (JavaScript).
              Dans ce formulaire, vous devez modifier l'attribut action de la balise form pour indiquer
              l'adresse d'un script PHP.
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
              <button class="btn deep-purple" id="redirection">Voir le site</button>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="card" id="exercice2">
          <!--Card Content -->
          <div class="card-content">
            <p class="center-align flow-text">
              Créer un formulaire d'upload.
            </p>
          </div>
          <!-- Card Tabs -->
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active" href="#code2">Code</a></li>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include("../templates/footer.php"); ?>
<script>
  document.getElementById("redirection").addEventListener("click", function () {
    window.location.href = "<?= realpath($_SERVER["PHP_SELF"]) . "../../assets/files/Jarditou/formulaire.html" ?>";
  });
</script>
</body>
</html>
