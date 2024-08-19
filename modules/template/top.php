<?php
$htmxLink = "<script src='https://unpkg.com/htmx.org@2.0.0' integrity='sha384-wS5l5IKJBvK6sPTKa2WZ1js3d947pvWXbPJ1OmWfEuxLgeHcEbjUUA5i9V5ZkpCw' crossorigin='anonymous' defer></script>";
$isIndex = strcmp($pageName, 'index') == 0;
$title = 'osullivanjam.es' . (!$isIndex ? ': ' . $pageName : "");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="theme-color" content="black" />
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH . 'icon.png'; ?>">
    <link rel="stylesheet" href="<?= CSS_PATH . $cssName . '.css?v=' . VERSION ?>">
    <?= (isset($useHtmx) && $useHtmx) ? $htmxLink : "" ?>
    <title><?= $title ?></title>
</head>

<body style="visibility: hidden;">
    <script>0</script>
    <?php include ELEMENTS_PATH . 'header.php'; ?>
    <?php $isIndex ? include ELEMENTS_PATH_INDEX . 'scrollingtext.php' : ''; ?>
    <div id="content">
        <?php !$isIndex ? include ELEMENTS_PATH . 'navbar.php' : ''; ?>