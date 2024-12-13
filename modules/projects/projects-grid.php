<?php
define('PROJECTS_TEMPLATE', getFileTextContent(HTML_PATH_PROJECTS . "projects-element.html"));

function getLinkTable() {
    $projects = array_reverse(getFileJsonContent(JSON_PATH_PROJECTS . "projects.json"));
    return populateAndCreateLinkTable($projects);
}

function getLinkElement($element, $is_available) {
    $icon = $is_available ? $element["language"] : "cellphone-crossed";
    return str_replace(
        array("%TITLE%", "%LINK%", "%IMAGE%", "%LANGUAGE%", "%LANGUAGEIMAGE%", "%CLASS%"),
        array(
            $is_available ? $element["title"] : "",
            $is_available ? $element["link"] : "",
            IMAGE_PATH_PROJECTS . $element["image"],
            $is_available ? $element["language"] : "unavailable on mobile",
            IMAGE_PATH_PROJECTS_ICONS . $icon . ".svg",
            $is_available ? "" : "unavailable"
        ),
        PROJECTS_TEMPLATE
    );
}

function populateAndCreateLinkTable($elements) {
    $fullgrid = "<div class='projects-container'>";
    foreach ($elements as $element) {
        $is_available = !isMobile() || $element["mobile"];
        $fullgrid .= getLinkElement($element, $is_available);
    }
    return $fullgrid . "</div>";
}
