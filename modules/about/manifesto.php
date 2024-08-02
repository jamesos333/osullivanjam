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
?>

<?= getManifesto() ?>