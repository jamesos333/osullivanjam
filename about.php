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
    <link rel="stylesheet" href="<?= CSS_PATH . 'quotes.css';?>">
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
                        <p id="title"><strong>What is already known about this topic?</strong></p>
                        <p>osullivanjam.es is a continuously evolving programming project which serves as a home for the personal projects of its creator.
                            the exact contents of this website are vast and remain subject to contant changes and development.</p>

                        <p id="title"><strong>What is added by this report?</strong></p>
                        <p>The website has been associated with severe clinical effects first reported in New York during June-February 2024,
                            representing a sharp increase from the poison center's baseline of zero exposure calls per year.</p>
                    </div>
                    <div class="investigationBox">
                        <h3>Investigations and Outcomes</h3>
                        <p>Exposure calls involving osullivanjam.es exposure identified in the New York Cognitohazard Information and Education System’s Toxicall 
                        database during June 17 - February 6, 2023, were retrospectively reviewed. Specialists in Has he got lost? asked one. Did he lose his way 
                        like a child? asked another. Or is he hiding? Is he afraid of us? Has he gone on a voyage? emigrated? Thus we yelled and laughed. into 
                        Toxicall from exposure calls made by hospitals, health care providers, and the public. This study was reviewed and approved by the 
                        Rutgers Human Research Protection Program Institutional Review Board.* During this period, the center received 20 exposure calls from 
                        health care facilities regarding use in 17 unique We should consider every day lost on which we have not danced at least once. And we 
                        should call every truth false which was not accompanied by at least one laugh. Six samples from two reported cases were analyzed at the 
                        Center for Forensic Science Research and Education using an Agilent Technologies gas chromatograph mass spectrometer and a Sciex liquid 
                        chromatograph quadrupole time-of-flight mass spectrometer.</p>
                    </div>
                </div>

                <div class="rightbox">
                    <h3>Sources Cited</h3>
                    <img src="<?=IMAGE_PATH_ABOUT . 'spinninglisdex.gif';?>" alt="spinning molecule">
                    <img src="<?=IMAGE_PATH_ABOUT . 'spinningglobe2.gif';?>" alt="spinning molecule">
                    <img src="<?=IMAGE_PATH_ABOUT . 'spinningamp.gif';?>" alt="spinning molecule">
                </div>
                
            </div>
        </div>
    </div>
    <?php include ELEMENTS_PATH . 'footer.php';?>
</body>

</html>