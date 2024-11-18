<?php
define('PROJECTS_TEMPLATE', getFileTextContent(HTML_PATH_PROJECTS . "projects-element.html"));

function getLinkTable() {
    $projects = array_reverse(getFileJsonContent(JSON_PATH_PROJECTS . "projects.json"));
    return populateAndCreateLinkTable($projects);
}

function getLinkElement($element) {
    $body = str_replace(
        array("%TITLE%", "%LINK%", "%IMAGE%", "%LANGUAGE%", "%LANGUAGEIMAGE%"),
        array(
            $element["title"],
            $element["link"],
            IMAGE_PATH_PROJECTS . $element["image"],
            $element["language"],
            IMAGE_PATH_PROJECTS_ICONS . $element["language"] . '.svg'
        ),
        PROJECTS_TEMPLATE
    );
    return "<th>" . $body . "</th>";
}

function populateAndCreateLinkTable($elements) {
    $fullgrid = "<div class='projects-container'>";
    foreach ($elements as $element) {
        if (!isMobile() || $element["mobile"]) {
            $fullgrid .= getLinkElement($element);
        }
    }
    return $fullgrid . "</div>";
}
