<?php
function getMothElementById($id) {
    $moth_list = getMothListJson();
    $index = array_search($id, array_column($moth_list, "id"));
    if (is_null($id) || $index === false) {
        redirectTo404();
    }
    return $moth_list[$index];
}

function getMothListJson() {
    return getFileJsonContent(JSON_PATH_MOTH . "moth-list.json");
}
