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
$descriptionText = $description ?? $title;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='robots' content='index, follow'>
    <meta name="theme-color" content="black">
    <meta property="og:type" content="website">
    <meta property="og:title" content="osullivanjam.es">
    <meta property="og:image" content="<?= "https://osullivanjam.es" . IMAGE_PATH_GLOBAL . "scaryface.jpg" ?>">
    <meta property="og:description" content="<?= $descriptionText ?>">
    <meta name='description' content='<?= $descriptionText ?>'>
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH_GLOBAL . 'icon.png' ?>">
    <link rel="preload" href="<?= CSS_PATH . $cssName . '.css?v=' . VERSION ?>" as="style">
    <link rel="stylesheet" href="<?= CSS_PATH . $cssName . '.css?v=' . VERSION ?>">
    <script src="https://unpkg.com/htmx.org@2.0.4" integrity="sha384-HGfztofotfshcF7+8n44JQL2oJmowVChPTg48S+jvZoztPfvwD79OC/LTtG6dMp+" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/htmx-ext-preload@2.1.0/preload.js" defer></script>
    <?= $additionalHeader ?? "" ?>
    <title><?= $title ?></title>
</head>

<body hx-ext="preload" style="background-color: black;">
    <script>
        0
    </script>
    <?php include ELEMENTS_PATH_TEMPLATES . 'banner.php'; ?>
    <?php $isIndex ? include ELEMENTS_PATH_INDEX . 'scrollingtext.php' : ''; ?>
    <div id="content">
        <?php !$isIndex ? include ELEMENTS_PATH_TEMPLATES . 'navbar.php' : ''; ?>