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
    <script defer src="https://cdn.jsdelivr.net/npm/htmx.org@2.0.10/dist/htmx.min.js" integrity="sha384-H5SrcfygHmAuTDZphMHqBJLc3FhssKjG7w/CeCpFReSfwBWDTKpkzPP8c+cLsK+V" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/htmx-ext-preload@2.1.2" integrity="sha384-PRIcY6hH1Y5784C76/Y8SqLyTanY9rnI3B8F3+hKZFNED55hsEqMJyqWhp95lgfk" crossorigin="anonymous"></script>
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