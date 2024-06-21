<?php
    $htmxLink = "<script src='https://unpkg.com/htmx.org@2.0.0' integrity='sha384-wS5l5IKJBvK6sPTKa2WZ1js3d947pvWXbPJ1OmWfEuxLgeHcEbjUUA5i9V5ZkpCw' crossorigin='anonymous'></script>";
    $isIndex = strcmp($pageName, 'index') == 0;
    $title = 'osullivanjam.es';
    if(!$isIndex) {
        $title .= ': ' . $pageName;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="osullivanjam.es">
    <link rel="icon" type="image/x-icon" href="<?=IMAGE_PATH . 'icon.png';?>">
    <link rel="stylesheet" href="<?= CSS_PATH . $cssName . '.css?v=' . VERSION?>">
    <?php if($useHtmx){ echo $htmxLink; }?>
    <title><?= $title?></title>
</head>

<body>
    <script>0</script>
    <?php include ELEMENTS_PATH . 'header.php'; ?>
    <?php if($isIndex){ include ELEMENTS_PATH_INDEX . 'scrollingtext.php'; }?>
    <div id="content">
        <?php if(!$isIndex){ include ELEMENTS_PATH . 'navbar.php'; }?>