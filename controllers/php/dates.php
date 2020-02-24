<?php
// Page's title
$title = "Exercices PHP - Les Dates";

// Enables the navbar extended tabs
$tabs = true;

// Items to be shown in the extended navbar
$items = array(
  "exercice1" => "Semaine",
  "exercice2" => "Formation",
  "exercice3" => "Bissextile",
  "exercice4" => "Erreur",
  "exercice5" => "Heure",
  "exercice6" => "Mois"
);

// Exercice 1 Code
$ex1 = /** @lang PHP */
  <<<'PHP'

<?php
$date = new DateTime("2019-07-14");
$weekNumber = $date->format("W"); 
?>

<p>Numéro de la semaine: <?= $weekNumber; ?></p>
PHP;

// Exercice 2 Code
$ex2 = /** @lang PHP */
  <<<'PHP'

<?php
$actualDate = new DateTime();
$endDate = new DateTime("2020-09-25");
$daysBeforeEnd = $endDate->diff($actualDate)->days;
?>

<p>Jours avant la fin de la formation: <?= $daysBeforeEnd; ?></p>
PHP;

// Exercice 3 Code  
$ex3 = /** @lang PHP */
  <<<'PHP'

<?php
$currentDate = new DateTime();
$isLeap = $currentDate->format('L');
?>

<?php if ($isLeap): ?>
  <p>L'année <?= $currentDate->format("Y") ?> est bissextile</p>
<?php else: ?>
  <p>L'année <?= $currentDate->format("Y") ?> n'est pas bissextile</p>
<?php endif; ?>
PHP;

// Exercice 4 Code 
$ex4 = /** @lang PHP */
  <<<'PHP'

<?php
$invalidDate = DateTime::createFromFormat("d/m/Y", "32/17/2019");
$errors = DateTime::getLastErrors();
?>

<p class="center-align">
  <?php if ($errors["error_count"] > 0 || $errors["warning_count"] > 0): ?>
    <?php foreach($errors["warnings"] as $warning): ?>
      <?= $warning; ?>
    <?php endforeach; ?>
  <?php endif; ?>
</p>
PHP;

// Exercice 5 Code 
$ex5 = /** @lang PHP */
  <<<'PHP'

<?php
$currentDate = new DateTime(); 
?>

<p>
  <?= $currentDate->format("H\hi e") ?>
</p>
PHP;

// Exercice 6 Code 
$ex6 = /** @lang PHP */
  <<<'PHP'

<?php
$modifiedDate = new DateTime();
$modifiedDate->add(DateInterval::createFromDateString("1 months"));
?>

<p>Date actuelle: <?= date("d/m/Y"); ?></p>
<p>Date avec 1 mois ajouté: <?= $modifiedDate->format("d/m/Y"); ?></p>
PHP;