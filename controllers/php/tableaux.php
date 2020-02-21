<?php
// Page's title
$title = "Exercices PHP - Les Tableaux";

// Disable the navbar extended tabs
$tabs = true;

// Items to be shown in the extended navbar
$items = array(
  "exercice1" => "Mois de l'année",
  "exercice2" => "Capitales",
  "exercice3" => "Départements"
);

// Array used for the "Mois de l'année"
$monthAndYears = array(
  "Janvier" => 31,
  "Février" => 28,
  "Mars" => 31,
  "Avril" => 30,
  "Mai" => 31,
  "Juin" => 30,
  "Juillet" => 31,
  "Aôut" => 31,
  "Septembre" => 30,
  "Octobre" => 31,
  "Novembre" => 30,
  "Décembre" => 31
);

// Array used for the "Capitales" exercise
$capitales = array(
  "Bucarest" => "Roumanie",
  "Bruxelles" => "Belgique",
  "Oslo" => "Norvège",
  "Ottawa" => "Canada",
  "Paris" => "France",
  "Port-au-Prince" => "Haïti",
  "Port-d'Espagne" => "Trinité-et-Tobago",
  "Prague" => "République tchèque",
  "Rabat" => "Maroc",
  "Riga" => "Lettonie",
  "Rome" => "Italie",
  "San José" => "Costa Rica",
  "Santiago" => "Chili",
  "Sofia" => "Bulgarie",
  "Alger" => "Algérie",
  "Amsterdam" => "Pays-Bas",
  "Andorre-la-Vieille" => "Andorre",
  "Asuncion" => "Paraguay",
  "Athènes" => "Grèce",
  "Bagdad" => "Irak",
  "Bamako" => "Mali",
  "Berlin" => "Allemagne",
  "Bogota" => "Colombie",
  "Brasilia" => "Brésil",
  "Bratislava" => "Slovaquie",
  "Varsovie" => "Pologne",
  "Budapest" => "Hongrie",
  "Le Caire" => "Egypte",
  "Canberra" => "Australie",
  "Caracas" => "Venezuela",
  "Jakarta" => "Indonésie",
  "Kiev" => "Ukraine",
  "Kigali" => "Rwanda",
  "Kingston" => "Jamaïque",
  "Lima" => "Pérou",
  "Londres" => "Royaume-Uni",
  "Madrid" => "Espagne",
  "Malé" => "Maldives",
  "Mexico" => "Mexique",
  "Minsk" => "Biélorussie",
  "Moscou" => "Russie",
  "Nairobi" => "Kenya",
  "New Delhi" => "Inde",
  "Stockholm" => "Suède",
  "Téhéran" => "Iran",
  "Tokyo" => "Japon",
  "Tunis" => "Tunisie",
  "Copenhague" => "Danemark",
  "Dakar" => "Sénégal",
  "Damas" => "Syrie",
  "Dublin" => "Irlande",
  "Erevan" => "Arménie",
  "La Havane" => "Cuba",
  "Helsinki" => "Finlande",
  "Islamabad" => "Pakistan",
  "Vienne" => "Autriche",
  "Vilnius" => "Lituanie",
  "Zagreb" => "Croatie"
);

// ---------------------------------------------------------------------

// Exercice 1 Code
$ex1 = /** @lang PHP */
  <<<'PHP'

<?php
  $monthAndYears = array(
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Aôut" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
  );

  // Sorts the table in a ascending order
  asort($monthAndYears);
  ?>

<table>
  <thead>
  <tr>
    <th>Mois</th>
    <th>Nombre de jours</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($monthAndYears as $month => $year): ?>
    <tr>
      <td><?= $month ?></td>
      <td><?= $year ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
PHP;

// Exercice 2 Part 1 Code
$ex2p1 = /** @lang PHP */
  <<<'PHP'

<?php
  $capitales = array(
    "Bucarest" => "Roumanie", 
    "Bruxelles" => "Belgique", 
    "Oslo" => "Norvège", 
    "Ottawa" => "Canada", 
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago", 
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie", 
    "Rome" => "Italie", 
    "San José" => "Costa Rica",
    "Santiago" => "Chili", 
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas", 
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay", 
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali", 
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil", 
    "Bratislava" => "Slovaquie", 
    "Varsovie" => "Pologne", 
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie", 
    "Caracas" => "Venezuela", 
    "Jakarta" => "Indonésie", 
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda", 
    "Kingston" => "Jamaïque", 
    "Lima" => "Pérou", 
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne", 
    "Malé" => "Maldives", 
    "Mexico" => "Mexique", 
    "Minsk" => "Biélorussie", 
    "Moscou" => "Russie",
    "Nairobi" => "Kenya", 
    "New Delhi" => "Inde", "
    Stockholm" => "Suède",
    "Téhéran" => "Iran", 
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal", "
    Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie", 
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan", 
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie", 
    "Zagreb" => "Croatie"
  ); ?>
  
  <table>
    <thead>
    <tr>
      <th>Capitales</th>
      <th>Pays</th>
    </tr>
    </thead>
    <tbody>
    <?php
    // Sorts the array by the keys in ascending order
    ksort($capitales);

    foreach ($capitales as $capitale => $pays): ?>
      <tr>
        <td><?= $capitale ?></td>
        <td><?= $pays ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
PHP;

// Exercice 2 Part 2 Code
$ex2p2 = /** @lang PHP */
  <<<'PHP'

<table>
  <thead>
    <tr>
      <th>Pays</th>
      <th>Capitales</th>
    </tr>
  </thead>
  <tbody>
  <?php
  // Sorts the array by the values in ascending order
  asort($capitales);
  foreach ($capitales as $capitale => $pays): ?>
    <tr>
      <td><?= $pays ?></td>
      <td><?= $capitale ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
PHP;

// Exercice 2 Part 3 Code
$ex2p3 = /** @lang PHP */
  <<<'PHP'

<p>
  <?= count($capitales); ?>
</p>
PHP;

// Exercice 2 Part 4 Code
$ex2p4 = /** @lang PHP */
  <<<'PHP'

<?php
  foreach ($capitales as $key => $value) {
    if (preg_match("/^[^b]/i", $key)) {
      unset($capitales[$key]);
    }
  }
  ?>

  <table>
    <thead>
    <tr>
      <th>Capitales</th>
      <th>Pays</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($capitales as $capitale => $pays): ?>
      <tr>
        <td><?= $pays ?></td>
        <td><?= $capitale ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
PHP;

// Exercice 3 Code  
$ex3 = /** @lang PHP */
  <<<'PHP'

<table>
  <thead>
  <tr>
    <?php foreach (range(-1, 12) as $number): ?>
      <?php if ($number == -1): ?>
        <th></th>
      <?php else: ?>
        <th><?= $number ?></th>
      <?php endif; ?>
    <?php endforeach; ?>
  </tr>
  </thead>
  <tbody>
  <?php foreach (range(0, 12) as $i): ?>
    <tr>
      <td><?= $i ?></td>
      <?php foreach (range(0, 12) as $j): ?>
        <td><?= $i * $j ?></td>
      <?php endforeach; ?>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
PHP;