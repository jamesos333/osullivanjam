<?php
    include_once '_config.php';
    include_once ELEMENTS_PATH_EXPERIENCE . 'experienceTable.php';
    $pageName = "experience";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="osullivanjam.es">
    <link rel="stylesheet" href="<?= CSS_PATH . 'experience.css'; ?>">
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH . 'icon.png'; ?>">
    <title><?= 'osullivanjam.es: ' . $pageName; ?></title>
</head>

<body>
    <?php include ELEMENTS_PATH . 'header.php'; ?>
    <div id="content">
        <?php include ELEMENTS_PATH . 'navbar.php'; ?>

        <?php echo getLinkTable() ?>
        <blockquote>
            <p class="darkcloudsquote">I am not nothing in the sense of emptiness, but I am the creative nothing, 
                the nothing out of which I as creator create everything.</p>
        </blockquote>

    </div>
    <?php include ELEMENTS_PATH . 'footer.php'; ?>
</body>
</html>