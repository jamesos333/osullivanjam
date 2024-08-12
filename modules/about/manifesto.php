<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/views/_config.php';

define('MANIFESTO_VERSIONS', 2);

function getManifesto() {
    return getFileTextContent(HTML_PATH_ABOUT . "manifesto" . getManifestoVersion() . ".html");
}

function getManifestoVersion() {
    $urlVersion = isset($_GET['version']) ? (int)$_GET['version'] : 0;
    return $urlVersion <= MANIFESTO_VERSIONS && $urlVersion > 0 ? $urlVersion : MANIFESTO_VERSIONS;
}

function getLogoPanel() {
    $reallogos = array(
        "apachelogo.png",
        "phplogo.gif",
        "sasslogo.png"
    );
    $funlogos = array(
        "ampmolecule.png",
        "spinningglobe.gif",
        "esdomain.png",
        "html5logo.png",
        "csslogo.png",
        "noscriptlogo.png",
        "htmxlogo.png",
        "gimplogo.png",
        "sabotabby.png",
        "hatchetman.gif",
        "tux.gif",
        "archlogo.gif",
        "vscodelogo.png",
        "comintern.png",
        //"dodecahedron.gif",
        "gnu.png"
    );
    shuffle($funlogos);
    $result = "";
    foreach (array_merge($reallogos, $funlogos) as $imageName) {
        $result .= "<img src=" .  IMAGE_PATH_ABOUT . $imageName . " alt=''>";
    }
    return $result;
}
?>

<div class="textcontainer">
    <?= getManifesto() ?>

    <div class="rightbox">
        <h3>Powered By</h3>
        <?= getLogoPanel() ?>
    </div>
</div>