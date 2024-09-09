<?php
define('MANIFESTO_VERSIONS', 2);

function getManifesto() {
    return getFileTextContent(HTML_PATH_ABOUT . "manifesto" . getManifestoVersion() . ".html");
}

function getManifestoVersion() {
    $urlVersion = isset($_GET['version']) ? intval($_GET['version']) : MANIFESTO_VERSIONS;
    if ($urlVersion <= 0 || $urlVersion > MANIFESTO_VERSIONS) {
        redirectTo404();
    }
    return $urlVersion;
}

// this implementation is crude but it works for now
function redirectTo404() {
    echo "Manifesto version cannot be found.";
    echo "<meta http-equiv='refresh' content='0;url=/404'>";
    die();
}

function getLogoPanel() {
    $reallogos = array(
        "apachelogo.png",
        "sasslogo.png",
        "phplogo.gif"
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
        //"jokerscards.gif",
        "gnu.png",
        "digitalocean.png",
        "cirno9.png"
    );
    shuffle($funlogos);
    $result = "";
    $fullArray = array_slice(array_merge($reallogos, $funlogos), 0, 16);
    foreach ($fullArray as $imageName) {
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