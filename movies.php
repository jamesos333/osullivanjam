<?php
include_once 'config.php';
include_once ELEMENTS_PATH_MOVIES . 'movietable.php';
$pageName = "movies";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <meta name="description" content="osullivanjam.es">
    <link rel="stylesheet" href="<?= CSS_PATH . 'styles.css'; ?>">
    <link rel="stylesheet" href="<?= CSS_PATH . 'movies.css'; ?>">
    <link rel="stylesheet" href="<?= CSS_PATH . 'specialeffects.css'; ?>">
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH . 'icon.png'; ?>">
    <title><?= 'osullivanjam.es: ' . $pageName; ?></title>
</head>

<body>
    <?php include ELEMENTS_PATH . 'header.php'; ?>
    <div id="content">
        <?php include ELEMENTS_PATH . 'navbar.php'; ?>

        <div class="movieInfoHeader">
            <h1>Archive of the <span style="color:#ffc4c4">TWW Films</span> Project</h1>
            <p>TWW Films was a YouTube channel active from 2015-2019 that specialized in horror short films. During this time period we 
                managed to create around 16 original videos, eventually culminating into the release of 'Extermination of Scum', which is our masterpiece.
                The contents of the channel are available for viewing via YouTube or through the links below.</p>
        </div>

        <?php echo getMovieTable() ?>

    </div>

    <?php include ELEMENTS_PATH . 'footer.php'; ?>
</body>

</html>