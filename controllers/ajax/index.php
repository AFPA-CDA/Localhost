<?php
// Page's title
$title = "Exercices PHP - AJAX";

// Enables the navbar extended tabs
$tabs = true;

// Items to be shown in the extended navbar
$items = array(
  "exercice1" => "Liste disques",
  "exercice2" => "Régions et Départements",
  "exercice3" => "TheMovieDB"
);

// Exercice 1 Javascript Code
$ex1js = /** @lang JavaScript */
  <<<'JS'

document.addEventListener("DOMContentLoaded", function () {
    // List of all elements
    const showDiscsBtn = document.getElementById("showDiscs");

    // On show discs button click
    showDiscsBtn.addEventListener("click", function () {
        // Makes an ajax GET request to listeproduit.php
        axios("listeproduit.php").then(response => {
            // If nothing went wrong it puts the data in the innerHTML
            this.nextElementSibling.innerHTML = response.data;
        }).catch(error => {
            // If something went wrong it puts the error in the element textContent
            this.nextElementSibling.textContent = error;
        })
    });
});
JS;

// Exercice 1 PHP Code
$ex1php = /** @lang PHP */
  <<<'PHP'

<?php

try {
    // Creates a new PDO Connection
    $db = new PDO("mysql:host=localhost;dbname=record;charset=utf8", "root", "root");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}

// The SQL SELECT request
$request = "SELECT * FROM disc INNER JOIN artist a ON disc.artist_id = a.artist_id";

// Executes the SQL Query
$query = $db->query($request);

// Fetches all the discs
$discs = $query->fetchAll();

// Shuffles the array randomly
shuffle($discs);
?>

<table>
    <thead>
    <tr>
        <th>Année</th>
        <th>Artiste</th>
        <th>Genre</th>
        <th>Label</th>
        <th>Prix</th>
        <th>Titre</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($discs as $disc): ?>
        <tr>
            <td><?= $disc->disc_year ?></td>
            <td><?= $disc->artist_name ?></td>
            <td><?= $disc->disc_genre ?></td>
            <td><?= $disc->disc_label ?></td>
            <td><?= $disc->disc_price ?>€</td>
            <td><?= $disc->disc_title ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
PHP;

// Exercice 2 Code PHP 1
$ex2php1 = /** @lang PHP */
  <<<'PHP'

<?php

try {
    // Creates a new PDO connection
    $db = new PDO("mysql:host=localhost;dbname=ajax_regions;charset=utf8", "root", "root");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}

// The SQL SELECT request
$request = "SELECT reg_id, reg_v_nom FROM regions";

// Makes the query to the database
$query = $db->query($request);

// Fetches all the regios ids
$regions = $query->fetchAll();

// Closes the cursor
$query->closeCursor();

// Returns the JSON version of the regions
echo json_encode($regions);
PHP;

// Exercise 2 Code PHP 2  
$ex2php2 = /** @lang PHP */
  <<<'PHP'

<?php

try {
    // Creates a new PDO connection
    $db = new PDO("mysql:host=localhost;dbname=ajax_regions;charset=utf8", "root", "root");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}

// Gets and filters the input to be used for the prepared statement
$regionId = filter_input(INPUT_GET, "region_id", FILTER_SANITIZE_NUMBER_INT);

// The SQL SELECT request
$request = "SELECT dep_nom, dep_id FROM departements INNER JOIN regions r ON r.reg_id = departements.dep_reg_id WHERE r.reg_id = :region_id";

// Prepares the statement
$stmt = $db->prepare($request);

// Bind the param with the filtered input
$stmt->bindParam(":region_id", $regionId, PDO::PARAM_INT);

// Executes the prepared statement
$stmt->execute();

// Fetches all the departements
$departements = $stmt->fetchAll();

// Closes the cursot
$stmt->closeCursor();

// Returns the JSON version of the departements
echo json_encode($departements);
PHP;

// Exercice 2 Javascript Code
$ex2js = /** @lang JavaScript */
  <<<'JS'

document.addEventListener("DOMContentLoaded", function () {
    // List of all elements
    const departementsSelect = document.getElementById("departementsSelect");
    const regionsSelect = document.getElementById("regionsSelect");

    // Makes an ajax GET request to listeoptions1.php
    axios("listeoptions1.php").then(response => {
        // For each regions
        for (let region of response.data) {
            // Adds an option with its name and id
            regionsSelect.add(new Option(region.reg_v_nom, region.reg_id));
        }
    });
    
    // On regionsSelect change
    regionsSelect.addEventListener("change", function () {
        // Makes an ajax GET request to listeoptions2.php with the current region ID
        axios(`listeoptions2.php?region_id=${this.selectedOptions[0].value}`).then(response => {
            // Deletes all option in order to prevent duplicates
            while (departementsSelect.hasChildNodes()) departementsSelect.removeChild(departementsSelect.firstChild);

            // For each departements
            for (let departement of response.data) {
                // Adds an option with its name and id
                departementsSelect.add(new Option(departement.dep_nom, departement.dep_id));
            }
        })
    });
});
JS;

// Exercice 3 Javascript Code
$ex3 = /** @lang JavaScript */
  <<<'JS'

// Whens the DOMContent has been loaded
document.addEventListener("DOMContentLoaded", function () {
    // A function used to simply capitalize the given string
    function capitalize(str) {
        // Make the first character UpperCase while making the rest lowercase
        return str.charAt(0).toUpperCase() + str.substr(1, str.length - 1).toLowerCase();
    }

    // Here lies all the elements used for this script
    const moviesList = document.getElementById("moviesList").getElementsByTagName("tbody")[0];
    const movieSearch = document.getElementById("movieSearch");
    const searchButton = document.getElementById("searchButton");

    // On searchButton click
    searchButton.addEventListener("click", function () {
        // Makes an ajax GET Request with the input value as the query
        axios("https://api.themoviedb.org/3/search/movie?api_key=f33cd318f5135dba306176c13104506a", {
            params: {
                query: movieSearch.value
            }
        }).then(response => {
            // Removes all tbody rows
            while (moviesList.hasChildNodes()) moviesList.removeChild(moviesList.firstChild);

            // For each entries in the results array
            for (let movie of response.data.results) {
                // If there is an image
                if (movie.poster_path !== null) {
                    // Creates a new image
                    const image = new Image();

                    // Sets the src and the alt
                    image.alt = movie.title;
                    image.src = `https://image.tmdb.org/t/p/w185${movie.poster_path}`;

                    // Creates a new Date instance from the movie release date
                    const rlDate = new Date(movie.release_date);

                    // Defines a date format
                    const dateFormat = new Intl.DateTimeFormat("fr", {
                        year: "numeric",
                        month: "long",
                        day: "numeric"
                    });

                    const [{value: day}, , {value: month}, , {value: year}] = dateFormat.formatToParts(rlDate);

                    // Creates a new tbody row
                    const row = moviesList.insertRow(0);

                    // Creates 3 new cells with the title, release date and poster
                    const title = row.insertCell(0);
                    const releaseDate = row.insertCell(1);
                    const poster = row.insertCell(2);

                    // Sets the title, the formatted release date and the poster image in the table
                    title.textContent = movie.title;
                    releaseDate.textContent = `${day} ${capitalize(month)} ${year}`;
                    poster.appendChild(image);
                }
            }
        })
    });
});
JS;