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
          image.classList.add("responsive-img");
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