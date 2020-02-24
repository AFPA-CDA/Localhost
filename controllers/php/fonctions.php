<?php
// Page's title
$title = "Exercices PHP - Les Fonctions";

// Disable the navbar extended tabs
$tabs = true;

// Items to be shown in the extended navbar
$items = array(
  "exercice1" => "Lien",
  "exercice2" => "Somme Tableau",
  "exercice3" => "Mot de passe"
);

// Functions
function lien(string $lien, string $titre): string
{
  return "<a href='$lien'>$titre</a>";
}

function somme(array $tableau): int
{
  return array_sum($tableau);
}

function complex_password(string $password): bool
{
  if (strlen($password) < 8) {
    return false;
  } else if (!preg_match("/[0-9]/", $password)) {
    return false;
  } else if (!preg_match("/[a-z][A-Z]/", $password)) {
    return false;
  } else {
    return true;
  }
}

// Exercice 1 Code
$ex1 = /** @lang PHP */
  <<<'PHP'

<?php
  function lien(string $lien, string $titre): string
  {
    return "<a href='$lien'>$titre</a>";
  }
PHP;

// Exercice 2 Code
$ex2 = /** @lang PHP */
  <<<'PHP'

<?php
  function somme(array $tableau): int
  {
    return array_sum($tableau);
  }
PHP;

// Exercice 3 Code  
$ex3 = /** @lang PHP */
  <<<'PHP'

<?php
  function complex_password(string $password): bool
  {
    if (strlen($password) < 8) {
      return false;
    } else if (!preg_match("/[0-9]/", $password)) {
      return false;
    } else if (!preg_match("/[a-z][A-Z]/", $password)) {
      return false;
    } else {
      return true;
    }
  }
PHP;