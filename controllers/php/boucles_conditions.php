<?php
// Page's title
$title = "Exercices PHP - Boucles et Conditions";

// Enables the navbar extended tabs
$tabs = true;

// Items to be shown in the extended navbar
$items = array(
  "exercice1" => "0..150",
  "exercice2" => "Sauvegardes",
  "exercice3" => "Multiplications"
);

// Exercice 1 Code
$ex1 = /** @lang PHP */
  <<<'PHP'

<!-- Creates a foreach loop from 1 to 150 with a step of 2 -->
<?php foreach (range(1, 150, 2) as $number): ?>
  <p>
    <?= $number ?>
  </p>
<?php endforeach; ?>
PHP;

// Exercice 2 Code
$ex2 = /** @lang PHP */
  <<<'PHP'

<!-- Creates a for loop that print a html paragraph 500 times -->
<?php for ($i = 1; $i <= 500; $i++): ?>
  <p>
    Je dois faire des sauvegardes régulières de mes fichiers
  </p>
<?php endfor; ?>
PHP;

// Exercice 3 Code  
$ex3 = /** @lang PHP */
  <<<'PHP'

<table>
  <thead>
  <tr>
    <!-- Fills the th with the values -->
    <?php foreach (range(-1, 12) as $number): ?>
    <!-- If the number is -1 it returns an empty th -->
      <?php if ($number == -1): ?>
        <th></th>
        <!-- Otherwise it returns the current value -->
      <?php else: ?>
        <th><?= $number ?></th>
      <?php endif; ?>
    <?php endforeach; ?>
  </tr>
  </thead>
  <tbody>
  <!-- The first foreach fills the rows -->
  <?php foreach (range(0, 12) as $i): ?>
    <tr>
      <td><?= $i ?></td>
      <!-- The second foreach fills the columns -->
      <?php foreach (range(0, 12) as $j): ?>
        <td><?= $i * $j ?></td>
      <?php endforeach; ?>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
PHP;