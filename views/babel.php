<?php 
    include_once '../_config.php';
    $pageName = "tower of babel";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="osullivanjam.es">
    <link rel="stylesheet" href="<?=CSS_PATH . 'contact.css';?>">
    <link rel="icon" type="image/x-icon" href="<?=IMAGE_PATH . 'icon.png';?>">
    <title>osullivanjam.es: contact</title>
</head>

<body>
    <?php include ELEMENTS_PATH . 'header.php';?>
    <div id="content">
        <?php include ELEMENTS_PATH . 'navbar.php';?>

        <p class="title">SPEAK TO THE WIZARD, BEHOLD YOUR FATE!</p>
        <div class="chat-container">
            <div id="wizardcontainer" style="min-height: 110px">
                <?php include ELEMENTS_PATH_CONTACT . 'chatbox.php';?>
            </div>
            <img src="<?=IMAGE_PATH_CONTACT . 'emerald.gif'; ?>" alt="seeingstone" id="stone" class="center" style="width: 10%; margin-top: 20px">
        </div>

        <table>
            <tr>
                <th>
                    <img src="<?=IMAGE_PATH_CONTACT . 'wizard.gif'; ?>" alt="wizard" style="width: 70%">
                </th>
                <th>
                    <img src="<?=IMAGE_PATH_CONTACT . 'wizard.gif'; ?>" alt="wizard" style="width: 70%">
                </th>
            </tr>
        </table>
    </div>
    <?php include ELEMENTS_PATH . 'footer.php';?>
    <script type="module" src="<?=JS_PATH . 'babel.js'; ?>"></script>
</body>
</html>