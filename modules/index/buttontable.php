<?php
function getAllButtons() {
    $full_buttons_json = getFileJsonContent(JSON_PATH_INDEX . "buttons.json");
    $buttons = $full_buttons_json["all"];
    shuffle($buttons);
    array_splice($buttons, 0, 0, $full_buttons_json["about"]);
    array_splice($buttons, 4, 0, $full_buttons_json["eye"]);

    $element_html = "";
    foreach ($buttons as $button) {
        $element_html .= getButton($button);
    }
    return $element_html;
}

function getButton($button) {
    $link = $button["link"];
    $image = IMAGE_PATH_BUTTONS . $button["image"];
    $class = $button["class"];
    $height = $button["height"] ?? "120";
    return "<a href='$link'><img src='$image' width='300' height='$height' alt='' class='$class'></a>";
}
