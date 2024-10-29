<?php
// essential parameters
// --pageName
// --cssName
// optional parameters
// --backLink
// --description
// --additionalHeader
$isIndex = strcmp($pageName, 'index') == 0;
$title = 'osullivanjam.es' . (!$isIndex ? ': ' . $pageName : "");
$descriptionText = isset($description) ? $description : $title;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="black">
    <meta property="og:type" content="website">
    <meta property="og:title" content="osullivanjam.es">
    <meta property="og:image" content="<?= "https://osullivanjam.es" . IMAGE_PATH_GLOBAL . "scaryface.jpg" ?>">
    <meta property="og:description" content="<?= $descriptionText ?>">
    <meta name='description' content='<?= $descriptionText ?>'>
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH_GLOBAL . 'icon.png' ?>">
    <link rel="preload" href="<?= CSS_PATH . $cssName . '.css?v=' . VERSION ?>" as="style">
    <link rel="stylesheet" href="<?= CSS_PATH . $cssName . '.css?v=' . VERSION ?>">
    <meta name='robots' content='<?= count($_GET) == 0 ? 'index, follow' : 'noindex' ?>'>
    <script src='https://unpkg.com/htmx.org@2.0.2' integrity='sha384-Y7hw+L/jvKeWIRRkqWYfPcvVxHzVzn5REgzbawhxAuQGwX1XWe70vji+VSeHOThJ' crossorigin='anonymous' defer></script>
    <script src="https://unpkg.com/htmx-ext-preload@2.0.1/preload.js" defer></script>
    <?= isset($additionalHeader) ? $additionalHeader : "" ?>
    <title><?= $title ?></title>
</head>

<body hx-ext="preload" style="background-color: black;">
    <script>
        0
    </script>
    <?php include ELEMENTS_PATH . 'header.php'; ?>
    <?php $isIndex ? include ELEMENTS_PATH_INDEX . 'scrollingtext.php' : ''; ?>
    <div id="content">
        <?php !$isIndex ? include ELEMENTS_PATH . 'navbar.php' : ''; ?>