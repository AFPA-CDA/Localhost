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
$lines = file("../../assets/files/liens.txt");
?>

<?php foreach ($lines as $line_num => $line): ?>
  <p>
    Ligne <?= ++$line_num; ?>: <?= htmlspecialchars($line); ?>
  </p>
<?php endforeach; ?>
PHP;

// Exercice 2 Code
$ex2 = /** @lang PHP */
  <<<'PHP'

 <?php
$file = file("http://bienvu.net/misc/customers.csv");
$csv = array_map('str_getcsv', $file);
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
  </tr>
  </thead>
  <tbody>
  <?php foreach ($csv as $csv_value): ?>
    <tr>
      <td><?= $csv_value[0] ?></td>
      <td><?= $csv_value[1] ?></td>
      <td><?= $csv_value[2] ?></td>
      <td><?= $csv_value[3] ?></td>
      <td><?= $csv_value[4] ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
PHP;
