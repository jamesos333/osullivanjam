<?php
define("MANIFESTO_FULL_JSON", getFileJsonContent(JSON_PATH_ABOUT . "manifestos.json"));

function getManifestoHtml() {
    $current = getCurrentManifesto();
    $version = $current["version"];
    $default = MANIFESTO_FULL_JSON["default"];
    $content = "";
    if ($version != $default) {
        $content = getFileTextContent(HTML_PATH_ABOUT . "about-disclaimer.html");
    }
    $content .= getFileTextContent(HTML_PATH_ABOUT . $current["file"]);
    return $content;
}

function getCurrentManifesto() {
    $full_json = MANIFESTO_FULL_JSON;
    $manifestos = $full_json["versions"];
    $version = $_GET['version'] ?? $full_json["default"];
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
        $result .= "<img src=" .  IMAGE_PATH_ABOUT . $image_name . " alt=''>";
    }
    return $result;
}

function getLogoPanelHeight() {
    return getCurrentManifesto()["height"];
}
?>

<div class="textcontainer">
    <?= getManifestoHtml() ?>

    <div class="rightbox" style='max-height:<?= getLogoPanelHeight() ?>;'>
        <h3>Powered By</h3>
        <?= getLogoPanel() ?>
    </div>
</div>