<?php
// Page's title
$title = "Exercices PHP - La PDO";

// Disable the navbar extended tabs
$tabs = false;

// Exercice 1 Code
$ex1 = /** @lang PHP */
  <<<'PHP'

<?php
// Here lies the variables used for the PDO connection
$host = "localhost";
$dbname = "record";
$user = "root";
$password = "root";

// The try catch block is used to run code and catch the errors uf there are any
try {
  // Creates an instance of the PDO object
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
  // Used in development to throw an exception whenever a problem occurs
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erreur : " . $e->getMessage() . "<br>";
  echo "N° : " . $e->getCode();
  die("Fin du script");
}

// Prepares the statement for execution and returns the statement object
$stmt = $db->prepare("SELECT * FROM disc WHERE disc_id = :disc_id");
// Grabs the GET input and filters it
$disc_id = filter_input(INPUT_GET, 'disc_id', FILTER_SANITIZE_NUMBER_INT);
// Binds the disc_id parameter to the disc_id variable
$stmt->bindParam(":disc_id", $disc_id, PDO::PARAM_INT);
// Executes the prepared statement
$stmt->execute();
// Fetches the result from the prepared statement
$disc = $stmt->fetch(PDO::FETCH_OBJ);
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PDO</title>
</head>
<body>
<!-- If the result of the prepared statement is empty it sends an error message -->
<?php if (empty($disc)): ?>
  <p>Le disque avec l'ID: <?= $_GET["disc_id"] ?> demandé n'exsite pas !</p>
<?php else: ?>
  <!-- Otherwise it shows the result of the prepared request  -->
  <?php foreach ($disc as $row_name => $row_result): ?>
    <p><?= "$row_name: $row_result" ?></p>
  <?php endforeach; ?>
<?php endif; ?>
</body>
</html>
PHP;