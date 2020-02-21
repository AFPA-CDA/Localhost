<!doctype html>
<html lang="fr">

<?php
$title = "Exercices PHP - Initiation";
include("../templates/header.php");
?>

<body>
<?php
$tabs = false;

$clientAddress = '<?= $_SERVER["REMOTE_ADDR"]; ?>';
$serverAddress = '<?= $_SERVER["SERVER_ADDR"]; ?>';

include("../templates/navbar.php");
?>

<!-- Page Content -->
<main class="section" role="main">
  <div class="container">
    <div class="row">
      <!-- Card -->
      <div class="card">
        <!--Card Content -->
        <div class="card-content">
          <p class="center-align flow-text">
            Ecrivez un script qui affiche l'adresse IP du serveur et celle du client.
          </p>
        </div>
        <!-- Card Tabs -->
        <div class="card-tabs">
          <ul class="tabs tabs-fixed-width">
            <li class="tab"><a class="active" href="#server">Adresse Serveur</a></li>
            <li class="tab"><a href="#client">Adresse Client</a></li>
          </ul>
        </div>
        <!-- Card Content -->
        <div class="card-content grey lighten-4">
          <!-- 1st Tab -->
          <div id="server">
            <pre>
              <code class="center-align">
                <?= htmlspecialchars($serverAddress); ?>
              </code>
            </pre>
          </div>
          <!-- 2nd Tab -->
          <div id="client">
            <pre>
              <code class="center-align">
                <?= htmlspecialchars($clientAddress); ?>
              </code>
            </pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include("../templates/footer.php"); ?>
</body>
</html>
