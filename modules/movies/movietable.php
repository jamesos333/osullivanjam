<?php
define('MOVIE_ELEMENT_TEMPLATE', getFileTextContent(HTML_PATH_MOVIES . 'movie-element.html'));

function getMovieTable() {
    $movies = getFileJsonContent(JSON_PATH_MOVIES . 'movies.json');
    $secret_movies = getFileJsonContent(JSON_PATH_MOVIES . 'secret-movies.json');
    if (isset($_GET['secret'])) {
        $secretBanner = "<p class='title'>Secret Videos</p>";
        return $secretBanner . populateAndCreateMovieTable($secret_movies);
    }
    return populateAndCreateMovieTable(array(array_shift($movies))) . populateAndCreateMovieTable($movies);
}

function getMovieElement($element) {
    $body = str_replace(
        array("%LINK%", "%IMAGE%", "%TITLE%", "%SUBTITLE%", "%CLASS%"),
        array(
            $element['link'],
            IMAGE_PATH_MOVIES_THUMBNAILS . $element['img'],
            $element['title'],
            getReleaseDateText($element['date']),
            empty($element['title']) ? " secret" : "",
        ),
        MOVIE_ELEMENT_TEMPLATE
    );
    return "<th>$body</th>";
}

function populateAndCreateMovieTable($elements) {
    $tableString = "<table class='movieTable' style='width:100%'>";
    for ($x = 0; $x < count($elements); $x++) {
        $tableString .= "<tr>" . getMovieElement($elements[$x]);
        if ($x != count($elements) - 1) {
            $x++;
            $tableString .= getMovieElement($elements[$x]);
        }
        $tableString .= "</tr>";
    }
    return "$tableString </table>";
}

function getReleaseDateText($releaseDate) {
    return empty($releaseDate) ? "" : "official upload date ($releaseDate)";
}
