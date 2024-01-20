<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <meta name="description" content="osullivanjam.es">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="styles/specialeffects.css">
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <?php $pageName = "about" ?>
    <title>osullivanjam.es:
        <?php echo $pageName; ?>
    </title>
</head>

<body>
    <?php include 'elements/header.php'; ?>
    <div id="content">
        <?php include 'elements/navbar.php'; ?>

        <div class="warning">
            <div class="warning-left">
                <img src="img/skull.gif" alt="spinning warning skull">
            </div>

            <div class="warning-right">
                <p><span style="color: #ff0000">WARNING</span>: THIS WEBPAGE HOLDS A DISEASE WHICH HAS NO CURE</p>
            </div>
        </div>
        
        <br><br>
    </div>
    <?php include 'elements/footer.php'; ?>
    <script type="module" src="js/main.js"></script>
</body>

</html>