<?php
define("MANIFESTO_FULL_JSON", getFileJsonContent(JSON_PATH_ABOUT . "manifestos.json"));

function getManifestoHtmlByVersion($version) {
    $manifestoJson = getManifestoJsonByVersion($version);
    return getFileTextContent(HTML_PATH_ABOUT . $manifestoJson["file"]);
}

function getManifestoJsonByVersion($version) {
    $manifestos = MANIFESTO_FULL_JSON["versions"];
    $current_key = array_search($version, array_column($manifestos, "version"));
    if ($current_key === false) {
        echo "Manifesto version cannot be found.";
        redirectTo404();
    }
    return $manifestos[$current_key];
}

function getLogoPanel() {
    $logos = getFileJsonContent(JSON_PATH_ABOUT . "logos.json");
    $fun_logos = $logos["fun"];
    shuffle($fun_logos);
    $all_logos = array_slice(array_merge($logos["real"], $fun_logos), 0, 16);
    $result = "";
    foreach ($all_logos as $image_name) {
        $result .= "<img src=" .  IMAGE_PATH_ABOUT . $image_name . " width='200' height='200' alt=''>";
    }
    return $result;
}

function getLogoPanelHeightByVersion($version) {
    return getManifestoJsonByVersion($version)["height"];
}
