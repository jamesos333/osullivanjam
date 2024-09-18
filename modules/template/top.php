<?php
// essential parameters
// --pageName
// --cssName
// optional parameters
// --useHtmx
// --description
// --additionalHeader
$isIndex = strcmp($pageName, 'index') == 0;
$title = 'osullivanjam.es' . (!$isIndex ? ': ' . $pageName : "");

$htmxLink = "<script src='https://unpkg.com/htmx.org@2.0.2' integrity='sha384-Y7hw+L/jvKeWIRRkqWYfPcvVxHzVzn5REgzbawhxAuQGwX1XWe70vji+VSeHOThJ' crossorigin='anonymous' defer></script>";
$robotsMeta = "<meta name='robots' content='index, follow'>";
$descriptionMeta = "<meta name='description' content='" . (isset($description) ? $description : $title) . "'>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="theme-color" content="black" />
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH . 'icon.png'; ?>">
    <link rel="stylesheet" href="<?= CSS_PATH . $cssName . '.css?v=' . VERSION ?>">
    <?= isset($useHtmx) && $useHtmx ? $htmxLink : "" ?>
    <?= count($_GET) >= 1 ? '' : ($robotsMeta . $descriptionMeta) ?>
    <?= isset($additionalHeader) ? $additionalHeader : "" ?>
    <title><?= $title ?></title>
</head>

<body style="background-color: black;">
    <script>
        0
    </script>
    <?php include ELEMENTS_PATH . 'header.php'; ?>
    <?php $isIndex ? include ELEMENTS_PATH_INDEX . 'scrollingtext.php' : ''; ?>
    <div id="content">
        <?php !$isIndex ? include ELEMENTS_PATH . 'navbar.php' : ''; ?>