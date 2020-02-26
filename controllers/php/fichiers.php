<?php
// Page's title
$title = "Exercices PHP - Les fichiers";

// Enables the navbar extended tabs
$tabs = true;

// Items to be shown in the extended navbar
$items = array(
  "exercice1" => "Lecture",
  "exercice2" => "Distant"
);

// Exercice 1 Code
$ex1 = /** @lang PHP */
  <<<'PHP'

<?php
  // Reads the file and return an array each element being a line of the file
  $lines = file("../../assets/files/liens.txt");
  ?>

  <!-- Foreach lines in the file -->
  <?php foreach ($lines as $line_num => $line): ?>
    <p>
      <!-- It prints the line num and the current line of the file -->
      Ligne <?= ++$line_num; ?>: <?= htmlspecialchars($line); ?>
    </p>
  <?php endforeach; ?>
PHP;

// Exercice 2 Code
$ex2 = /** @lang PHP */
  <<<'PHP'

<?php
// Reads the file and return an array each element being a line of the file
$file = file("http://bienvu.net/misc/customers.csv");
// Returns a new array with the function str_getcsv applied on each element
$csv = array_map('str_getcsv', $file);
// Sorts the array by the values in a ascending way
asort($csv);
?>

<table>
  <thead>
  <tr>
    <th>Firstname</th>
    <th>Surname</th>
    <th>Email</th>
    <th>Phone</th>
    <th>City</th>
    <th>State</th>
  </tr>
  </thead>
  <tbody>
  <!-- Foreach row we create a tr -->
  <?php foreach ($csv as $csv_row): ?>
    <tr>
      <!-- In each row we put the value in a td -->
      <?php foreach ($csv_row as $csv_value): ?>
        <td><?= $csv_value ?></td>
      <?php endforeach; ?>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
PHP;
