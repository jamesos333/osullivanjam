<?php
define('MOVIE_ELEMENT_TEMPLATE', getFileTextContent(HTML_PATH_MOVIES . 'movie-element.html'));

function isSecret() {
    return isset($_GET['secret']);
}

function getMovieTable() {
    $movies = getFileJsonContent(JSON_PATH_MOVIES . 'movies.json');
    $secret_movies = getFileJsonContent(JSON_PATH_MOVIES . 'secret-movies.json');
    if (isSecret()) {
        return populateAndCreateMovieTable($secret_movies);
    }
    return populateAndCreateMovieTable($movies);
}

function populateAndCreateMovieTable($elements) {
    $element_html = "";
    foreach ($elements as $element) {
        $element_html .= getMovieElement($element);
    }
    return "<div class='movieTable'>$element_html</div>";
}

function getMovieElement($element) {
    $body = str_replace(
        array("%LINK%", "%IMAGE%", "%TITLE%", "%SUBTITLE%", "%CLASS%"),
        array(
            $element['link'],
            IMAGE_PATH_MOVIES_THUMBNAILS . $element['img'],
            $element['title'],
            getReleaseDateText($element['date']),
            empty($element['title']) ? "secret" : "",
        ),
        MOVIE_ELEMENT_TEMPLATE
    );
    return $body;
}

function getReleaseDateText($release_date) {
    return empty($release_date) ? "" : "official upload date ($release_date)";
}
