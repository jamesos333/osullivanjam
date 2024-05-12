<?php
include_once 'config.php';
include_once ELEMENTS_PATH_MOVIES . 'movietable.php';
$pageName = "movies";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="osullivanjam.es">
    <link rel="stylesheet" href="<?= CSS_PATH . 'movies.css'; ?>">
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH . 'icon.png'; ?>">
    <title><?= 'osullivanjam.es: ' . $pageName; ?></title>
</head>

<body>
    <?php include ELEMENTS_PATH . 'header.php'; ?>
    <div id="content">
        <?php include ELEMENTS_PATH . 'navbar.php'; ?>

        <div class="infoHeader">
            <h1>Archive of the <span class="pink">TWW Films</span> Project</h1>
            <p><span class="pink">TWW Films</span> was a YouTube channel active from 2015-2019 that specialized in 
            horror short films. During this time period we managed to create around 16 original videos, eventually culminating 
            in the release of <span class="pinkI">Extermination of Scum</span>, our masterpiece. The contents of 
            the channel are available for viewing via 
            <a href="https://www.youtube.com/@TheWhattetyWhaters"><span class="youtubeLink">YouTube</span></a>, or through the links below.</p>
        </div>
        <?php echo getMovieTable() ?>
    </div>
    <?php include ELEMENTS_PATH . 'footer.php'; ?>
</body>
</html>