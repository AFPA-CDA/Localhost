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

<p>Adresse: <?= $address ?></p>
<p>CGU: <?= $cgu ?></p>
<p>Ville: <?= $city ?></p>
<p>Date: <?= $date ?></p>
<p>Email: <?= $email ?></p>
<p>Prénom: <?= $firstName ?></p>
<p>Sexe: <?= $gender ?></p>
<p>Nom: <?= $name ?></p>
<p>Code Postal: <?= $postal ?></p>
<p>Sujet: <?= $subject ?></p>
<p>Question: <?= $question ?></p>