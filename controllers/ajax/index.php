<?php
// Page's title
$title = "Exercices PHP - AJAX";

// Enables the navbar extended tabs
$tabs = true;

// Items to be shown in the extended navbar
$items = array(
  "exercice1" => "Liste disques",
  "exercice2" => "TheMovieDB"
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