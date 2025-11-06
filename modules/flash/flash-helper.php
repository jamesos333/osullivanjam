<?php
define('FLASH_TEMPLATE', getFileTextContent(HTML_PATH_FLASH . "flash-list-element.html"));

function getFlashListJson() {
    return getFileJsonContent(JSON_PATH_FLASH . "flash-list.json");
}

function getFlashElementById($id) {
    $flash_list = getFlashListJson();
    $index = array_search($id, array_column($flash_list, "id"));
    if (is_null($id) || $index === false) {
        redirectTo404();
    }
    return $flash_list[$index];
}

function getFullFlashGameGrid() {
    $full_list = getFlashListJson(JSON_PATH_PROJECTS . "projects.json");
    $flash_grid = "<div class='flash-list-container'>";
    foreach ($full_list as $element) {
        if (!isset($element["enabled"]) || $element["enabled"]) {
            $flash_grid .= getFlashListElement($element);
        }
    }
    return $flash_grid . "</div>";
}

function getFlashListElement($element) {
    return str_replace(
        array("%TITLE%", "%LINK%", "%IMAGE%"),
        array(
            $element["title"],
            $element["id"],
            IMAGE_PATH_FLASH . $element["image"]
        ),
        FLASH_TEMPLATE
    );
}
