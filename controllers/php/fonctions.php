<?php
// Page's title
$title = "Exercices PHP - Les Fonctions";

// Enables the navbar extended tabs
$tabs = true;

// Items to be shown in the extended navbar
$items = array(
  "exercice1" => "Lien",
  "exercice2" => "Somme Tableau",
  "exercice3" => "Mot de passe"
);

// Functions

// Takes a link and a title
function lien(string $lien, string $titre): string
{
  // Returns a html link with the given parameters
  return "<a href='$lien'>$titre</a>";
}

// Takes an array
function somme(array $tableau): int
{
  // Returns the sum of all elements in the array
  return array_sum($tableau);
}

// Takes the password as a string
function complex_password(string $password): bool
{
  // If the password is less than 8 caracters it returns false
  if (strlen($password) < 8) {
    return false;
  } else if (!preg_match("/[0-9]/", $password)) {
    // If the password don't have any numeric characters it returns false
    return false;
  } else if (!preg_match("/[a-z][A-Z]/", $password)) {
    // If the password don't have any alphanumeric characters it return false
    return false;
  } else {
    // The password is complex so it return true
    return true;
  }
}

// Exercice 1 Code
$ex1 = /** @lang PHP */
  <<<'PHP'

<?php

// Takes a link and a title
function lien(string $lien, string $titre): string
{
  // Returns a html link with the given parameters
  return "<a href='$lien'>$titre</a>";
}
PHP;

// Exercice 2 Code
$ex2 = /** @lang PHP */
  <<<'PHP'

<?php
// Takes an array
function somme(array $tableau): int
{
  // Returns the sum of all elements in the array
  return array_sum($tableau);
}
PHP;

// Exercice 3 Code  
$ex3 = /** @lang PHP */
  <<<'PHP'

<?php
// Takes the password as a string
function complex_password(string $password): bool
{
  // If the password is less than 8 caracters it returns false
  if (strlen($password) < 8) {
    return false;
  } else if (!preg_match("/[0-9]/", $password)) {
    // If the password don't have any numeric characters it returns false
    return false;
  } else if (!preg_match("/[a-z][A-Z]/", $password)) {
    // If the password don't have any alphanumeric characters it return false
    return false;
  } else {
    // The password is complex so it return true
    return true;
  }
}
PHP;