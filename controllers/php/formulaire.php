<?php
// Page's title
$title = "Exercices PHP - Les formulaires";

// Disable the navbar extended tabs
$tabs = true;

// Items to be shown in the extended navbar
$items = array(
  "exercice1" => "Formulaire",
  "exercice2" => "Upload"
);

// Exercice 1 Code
$ex1 = /** @lang PHP */
  <<<'PHP'

<?php
// This function makes the user data safe to use
function sanitize_input(string $data): string
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Here lies all the form variables
$address = $cgu = $city = $date = $email = $firstName = $gender = $name = $postal = $subject = $question = "";

// Create function

// Checks if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["address"])) {
    $address = sanitize_input($_POST["address"]);
  }

  if (isset($_POST["cgu"])) {
    $cgu = sanitize_input($_POST["cgu"]);
  }

  if (isset($_POST["city"])) {
    $city = sanitize_input($_POST["city"]);
  }

  if (isset($_POST["date"])) {
    $date = sanitize_input($_POST["date"]);
  }

  if (isset($_POST["email"])) {
    $email = sanitize_input($_POST["email"]);
  }

  if (isset($_POST["firstName"])) {
    $firstName = sanitize_input($_POST["firstName"]);
  }

  if (isset($_POST["gender"])) {
    $gender = sanitize_input($_POST["gender"]);
  }

  if (isset($_POST["name"])) {
    $name = sanitize_input($_POST["name"]);
  }

  if (isset($_POST["postal"])) {
    $postal = sanitize_input($_POST["postal"]);
  }

  if (isset($_POST["subject"])) {
    $subject = sanitize_input($_POST["subject"]);
  }

  if (isset($_POST["question"])) {
    $question = sanitize_input($_POST["question"]);
  }
}
?>

<?php foreach ($_POST as $inputName => $inputValue): ?>
  <p><?= "$inputName: $inputValue" ?></p>
<?php endforeach; ?>
PHP;

// Exercice 2 Code
$ex2 = /** @lang PHP */
  <<<'PHP'

<?php
// List of allowed mime types
$allowedMimeTypes = array("image/gif", "image/jpg", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

// Returns true is the file exists
$fileExists = isset($_FILES) ? count($_FILES) : 0;

// List of error messages
$fileMessages = array(
  UPLOAD_ERR_OK => "Il n'y a pas d'erreur, le fichier a été téléchargé avec succès",
  UPLOAD_ERR_INI_SIZE => 'Le fichier téléchargé dépasse la directive upload_max_filesize de php.ini',
  UPLOAD_ERR_FORM_SIZE => 'Le fichier téléchargé dépasse la directive MAX_FILE_SIZE qui a été spécifiée dans le formulaire HTML',
  UPLOAD_ERR_PARTIAL => 'Le fichier choisi n\'a été que partiellement téléchargé',
  UPLOAD_ERR_NO_FILE => 'Aucun fichier n\'a été choisi',
  UPLOAD_ERR_NO_TMP_DIR => 'Il manque un dossier temporaire',
  UPLOAD_ERR_CANT_WRITE => 'Impossible d\'écrire le fichier sur le disque',
  UPLOAD_ERR_EXTENSION => 'Une extension PHP a arrêté le téléchargement du fichier'
);

// Reads the file info if the file exists
if ($fileExists && $_FILES["fichier"]["size"] > 0) {
  $finfo = new finfo(FILEINFO_MIME_TYPE);
  $mimeType = $finfo->file($_FILES["fichier"]["tmp_name"]);
} else {
  $mimeType = null;
}
?>

<form action='<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>' enctype="multipart/form-data" method="post">
  <input name="fichier" type="file">
  <button type="submit">Submit</button>
</form>

<!-- Checks that the request method used is POST -->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
  <!-- Checks that there is no error and that the mime type is allowed -->
  <?php if ($_FILES["fichier"]["error"] == UPLOAD_ERR_OK && in_array($mimeType, $allowedMimeTypes)): ?>
    <!-- Moves the uploaded file to the right folder -->
    <?php
    $path = realpath('../../files/');
    $name = basename($_FILES["fichier"]["name"]);
    
    move_uploaded_file($_FILES["fichier"]["tmp_name"], "$path/$name");
    
    echo $fileMessages[UPLOAD_ERR_OK];
    ?>
    <!-- If the mime type isn't allowed and there is no upload error show a message to the user -->
  <?php elseif (!in_array($mimeType, $allowedMimeTypes) && empty($_FILES["fichier"]["error"])): ?>
    <p>Le format <?= basename($mimeType) ?> n'est pas supporté</p>
    <!-- If there is an error show it to the user -->
  <?php elseif (!empty($_FILES["fichier"]["error"])): ?>
    <p><?= $fileMessages[$_FILES["fichier"]["error"]] ?></p>
  <?php elseif (is_uploaded_file($_FILES["fichier"]["tmp_name"])): ?>
    <p>Le fichier existe déja.</p>
  <?php endif; ?>
<?php endif; ?>
PHP;