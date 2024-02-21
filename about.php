<?php 
include_once 'config.php';
$pageName = "about";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <meta name="description" content="osullivanjam.es">
    <link rel="stylesheet" href="<?= CSS_PATH . 'styles.css';?>">
    <link rel="stylesheet" href="<?= CSS_PATH . 'about.css';?>">
    <link rel="stylesheet" href="<?= CSS_PATH . 'specialeffects.css';?>">
    <link rel="icon" type="image/x-icon" href="<?=IMAGE_PATH . 'icon.png';?>">
    <title><?= 'osullivanjam.es: ' . $pageName;?></title>
</head>

<body>
    <?php include ELEMENTS_PATH . 'header.php';?>
    <div id="content">
        <?php include ELEMENTS_PATH . 'navbar.php';?>
        <div class="warning">
            <div class="warning-left">
                <img src="<?=IMAGE_PATH_ABOUT . 'skull.gif';?>" alt="spinning skull">
            </div>
            <div class="warning-right">
                <p><span style="color: #ff0000; font-weight: 900">WARNING</span>: THIS WEBPAGE HOLDS A
                    <span style="font-style: italic">DISEASE</span> WHICH HAS <span style="font-style: italic">NO</span> CURE.
                </p>
            </div>
        </div>
        <div class="wrapper">
            <div class="textcontainer">
                <h1><em>Notes from the Field</em>: Cluster of Severe Illness from Internet Usaged Linked to osullivanjam.es webpage - New York, June-February 2024</h1>
                <div class="leftbox">
                    <div class="summarybox">
                        <h3>Summary</h3>
                        <p><strong>What is already known about this topic?</strong></p>
                        <p>osullivanjam.es is a continuously evolving programming project which serves as a home for the personal projects of its creator.
                            the exact contents of this website are vast and remain subject to contant changes and development.</p>

                        <p><strong>What is added by this report?</strong></p>
                        <p>The website has been associated with severe clinical effects first reported in New York during June-February 2024,
                            representing a sharp increase from the poison center's baseline of zero exposure calls per year.</p>
                    </div>
                </div>

                <div class="rightbox">
                    <h3>Sources Cited</h3>
                    <img src="<?=IMAGE_PATH_ABOUT . 'spinninglisdex.gif';?>" alt="spinning molecule" class="center" style="width: 90%; margin-top:-20px;">
                    <img src="<?=IMAGE_PATH_ABOUT . 'spinningamp.gif';?>" alt="spinning molecule" class="center" style="width: 90%; margin-top:-20px;">
                </div>
                
                <p></p>
                
            </div>
        </div>
    </div>
    <?php include ELEMENTS_PATH . 'footer.php';?>
</body>

</html>