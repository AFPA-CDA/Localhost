<!doctype html>
<html lang="fr">

<?php
include("../../controllers/ajax/index.php");
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
              Créez un fichier listeproduit.php qui permet d'afficher la liste des disques de la base record.
            </p>
          </div>
          <!-- Card Tabs -->
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active" href="#js1">JS</a></li>
              <li class="tab"><a href="#php1">PHP</a></li>
            </ul>
          </div>
          <!-- Card Content -->
          <div class="card-content grey lighten-4">
            <!-- JS Code Tab -->
            <div id="js1">
              <pre>
                <code>
                  <?= htmlspecialchars($ex1js); ?>
                </code>
              </pre>
            </div>
            <!-- PHP Code Tab -->
            <div id="php1">
              <pre>
                <code>
                  <?= htmlspecialchars($ex1php); ?>
                </code>
              </pre>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="card" id="exercice2">
          <!--Card Content -->
          <div class="card-content">
            <p class="center-align flow-text">
              Reprenez le second exercice de la phase 2, modifiez votre script PHP pour envoyer les données au format
              JSON.
            </p>
          </div>
          <!-- Card Tabs -->
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active" href="#js2">JS</a></li>
              <li class="tab"><a href="#php2">PHP</a></li>
            </ul>
          </div>
          <!-- Card Content -->
          <div class="card-content grey lighten-4">
            <!-- Javascript Code Tab -->
            <div id="js2">
              <pre>
                <code>
                  <?= htmlspecialchars($ex2js); ?>
                </code>
              </pre>
            </div>
            <!-- PHP Code Tab -->
            <div id="php2">
              <pre>
                <code>
                  <?= htmlspecialchars($ex2php1); ?>
                </code>
              </pre>
              <pre>
                <code>
                  <?= htmlspecialchars($ex2php2); ?>
                </code>
              </pre>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="card" id="exercice3">
          <!--Card Content -->
          <div class="card-content">
            <p class="center-align flow-text">
              Concevez une page permettant de rechercher des informations sur les films.
            </p>
          </div>
          <!-- Card Tabs -->
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active" href="#code">JS</a></li>
              <li class="tab"><a href="#result">PHP</a></li>
            </ul>
          </div>
          <!-- Card Content -->
          <div class="card-content grey lighten-4">
            <!-- Code Tab -->
            <div id="code">
              <pre>
                <code>
                  <?= htmlspecialchars($ex3); ?>
                </code>
              </pre>
            </div>
            <!-- Result Code Tab -->
            <div id="result">
              <div class="input-field">
                <label for="movieSearch">Donnez un nom de film/serie</label>
                <input id="movieSearch" name="movieSearch" type="search">
              </div>
              
              <button class="btn deep-purple" id="searchButton" type="submit">Rechercher</button>

              <table class="responsive-table section" id="moviesList">
                <thead>
                <tr>
                  <th>Titre</th>
                  <th>Date de sortie</th>
                  <th>Affiche</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<?php include("../templates/footer.php"); ?>
<script src="../../assets/js/ajax.js"></script>
</body>
</html>
