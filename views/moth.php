<?php
include ELEMENTS_PATH_MOTH . 'moth-image.php';
$moth_element = getMothElementById($id);

$title = $moth_element['title'];
$css = 'moth';
$class = $moth_element['class'] ?? 'default';
$file = $moth_element['file'];
$description = $moth_element['description'] ?? $title;
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
    <meta property="og:description" content="<?= $description ?>">
    <meta name='description' content='<?= $description ?>'>
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH_GLOBAL . 'icon.png' ?>">
    <link rel="stylesheet" href="<?= CSS_PATH . $css . '.css?v=' . VERSION ?>">
    <meta http-equiv="refresh" content="4; url=/">
    <title><?= $title ?></title>
</head>

<body>
    <a href="/">
        <div class="<?= $class ?>">
            <img src="<?= IMAGE_PATH_MOTH . $file ?>" alt="moth">
        </div>
    </a>
</body>

</html>