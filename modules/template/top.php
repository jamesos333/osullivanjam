<?php
// essential parameters
// --pageName
// --cssName
// optional parameters
// --useHtmx
// --description
// --additionalHeader
$htmxLink = "<script src='https://unpkg.com/htmx.org@2.0.2' integrity='sha384-Y7hw+L/jvKeWIRRkqWYfPcvVxHzVzn5REgzbawhxAuQGwX1XWe70vji+VSeHOThJ' crossorigin='anonymous' defer></script>";
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
    <meta name="description" content="<?= isset($description) ? $description : $title ?>">
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH . 'icon.png'; ?>">
    <link rel="stylesheet" href="<?= CSS_PATH . $cssName . '.css?v=' . VERSION ?>">
    <?= (isset($useHtmx) && $useHtmx) ? $htmxLink : "" ?>
    <?= isset($additionalHeader) ? $additionalHeader : "" ?>
    <title><?= $title ?></title>
</head>

<body style="background-color: black;">
    <script>0</script>
    <?php include ELEMENTS_PATH . 'header.php'; ?>
    <?php $isIndex ? include ELEMENTS_PATH_INDEX . 'scrollingtext.php' : ''; ?>
    <div id="content">
        <?php !$isIndex ? include ELEMENTS_PATH . 'navbar.php' : ''; ?>