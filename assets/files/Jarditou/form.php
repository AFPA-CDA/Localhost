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
  $address = sanitize_input($_POST["address"]);
  $cgu = sanitize_input($_POST["cgu"]);
  $city = sanitize_input($_POST["city"]);
  $date = sanitize_input($_POST["date"]);
  $email = sanitize_input($_POST["email"]);
  $firstName = sanitize_input($_POST["firstName"]);
  $gender = sanitize_input($_POST["gender"]);
  $name = sanitize_input($_POST["name"]);
  $postal = sanitize_input($_POST["postal"]);
  $subject = sanitize_input($_POST["subject"]);
  $question = sanitize_input($_POST["question"]);
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