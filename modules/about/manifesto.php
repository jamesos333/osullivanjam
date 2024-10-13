<?php
function getManifesto() {
    return getFileTextContent(HTML_PATH_ABOUT . getManifestoDetails()["title"]);
}

function getManifestoDetails() {
    $manifestos = array(
        array("title" => "manifesto1.html", "height" => "100em"),
        array("title" => "manifesto2.html", "height" => "155em")
    );
    $urlVersion = isset($_GET['version']) ? intval($_GET['version']) : count($manifestos);
    if ($urlVersion <= 0 || $urlVersion > count($manifestos)) {
        echo "Manifesto version cannot be found.";
        redirectTo404();
    }
    return  $manifestos[$urlVersion - 1];
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

function getRightboxStyle() {
    return "style='max-height:" . getManifestoDetails()["height"] . ";'";
}
?>

<div class="textcontainer">
    <?= getManifesto() ?>

    <div class="rightbox" <?= getRightboxStyle() ?>>
        <h3>Powered By</h3>
        <?= getLogoPanel() ?>
    </div>
</div>