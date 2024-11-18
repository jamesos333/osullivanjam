<?php
define('PROJECTS_TEMPLATE', getFileTextContent(HTML_PATH_PROJECTS . "projects-element.html"));

function getLinkTable() {
    $projects = array_reverse(getFileJsonContent(JSON_PATH_PROJECTS . "projects.json"));
    return populateAndCreateLinkTable($projects);
}

function getLinkElement($element) {
    if(isMobile() && !$element["mobile"]) {
        return;
    }
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
    $fullgrid = "<table class='linkTable' style='width:100%'>";
    for ($x = 0; $x < count($elements); $x++) {
        $fullgrid .= "<tr>" . getLinkElement($elements[$x]);
        if ($x != count($elements) - 1) {
            $x++;
            $fullgrid .= getLinkElement($elements[$x]);
        }
        $fullgrid .= "</tr>";
    }
    return $fullgrid . "</table>";
}
