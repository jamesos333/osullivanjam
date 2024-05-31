<?php
    include_once '_config.php';
    $pageName = "about";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="osullivanjam.es">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS_PATH . 'about.css'; ?>">
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH . 'icon.png'; ?>">
    <title><?= 'osullivanjam.es: ' . $pageName; ?></title>
</head>

<body>
    <?php include ELEMENTS_PATH . 'header.php'; ?>
    <div id="content">
        <?php include ELEMENTS_PATH . 'navbar.php'; ?>
        <div class="warning">
            <div class="warning-left">
                <img src="<?= IMAGE_PATH_ABOUT . 'skull.gif'; ?>" alt="spinning skull">
            </div>
            <div class="warning-right">
                <p><span style="color: #ff0000; font-weight: 900">WARNING</span>: THIS WEBPAGE HOLDS A
                    <span style="font-style: italic">DISEASE</span> WHICH HAS <span style="font-style: italic">NO</span> CURE.
                </p>
            </div>
        </div>
        <div class="wrapper">
            <div class="textcontainer">
                <h1><em>Notes from the Field</em>: Cluster of Design Philosophies and Miscellaneous Thoughts from osullivanjam.es webpage - New York, December-March 2024</h1>
                <div class="leftbox">
                    <div class="summarybox">
                        <h3>Summary</h3>
                        <p class="summaryTitle"><strong>What is already known about this topic?</strong></p>
                        <p>osullivanjam.es is a continuously evolving programming project which serves as a home for the personal projects of its creator. The exact contents of this website are vast and remain subject to contant changes and development.</p>

                        <p class="summaryTitle"><strong>What is added by this report?</strong></p>
                        <p>The osullivanjam.es website has not yet had its purpose and objectives explicitly outlined; I believe it stands to benefit from this analysis. In this document we will investigate its broder aims and design philosophy.</p>
                    </div>
                    <div class="investigationBox">
                        <h3>Investigations and Outcomes</h3>
                        <p>With modern programming, there is an undeniable emphasis on making frontend design as functional, easily understandable, and modern as possible. This is, of course, generally a good thing. We don't want the websites we use to be convoluted or confusing, and there is a lot of comfort in being able to pick up most user interfaces quickly. I mean, you would not want your banking app to look the way that this site does.</p>
                        <p>However, I feel as though this emphasis on utility over creativity serves to siphon the creativity out of what we do as programmers at the behest of maximum functionality. It's not so much a form of free self-expression anymore and the creative process becomes imprisoned; you can still create appealing designs as long as they remain confined to the strict boundaries of design frameworks (such as Bootstrap, Material Design, etc.) and also confined to what the modern internet user expects and can use easily. Studies on where our eyes will look first on a webpage and where advertisements can be placed to generate the most clicks aid in web design and are, dare I say, too human. But in the process of adapting more and more to us, they become less human. Every website tries to become a sterile copy of the next, deviating slightly to give us the facade of innovation. New websites continuously exist in the shadow of the last, and this endless conformity ensures that few risks can be taken in design anymore.</p>
                    </div>
                    <div class="investigationBox">
                        <h3>Design Approach and Implementation</h3>
                        <p>So, I want to design this site to be anti-human, or at least in opposition to how sterile and boring modern user interface development has become. I will create a site that is ugly, confusing, outdated, but overall a vessel for one individual (me) to express themselves and have fun. I don't know how easy it is for someone to navigate this site, I don't know if anyone else will get enjoyment out of this, but hopefully this site will be as enjoyable to navigate as it is for me to design. As I continue to improve my skills, I hope that those improvements will be reflected in the website. Currently, my development stack is pretty simple and consists of PHP, SASS, Apache2, and Ubuntu, but this is subject to change whenever I find more interesting/fun things to use.</p>
                    </div>
                    <div class="investigationBox">
                        <h3>Preliminary Conclusions and Actions</h3>
                        <p>I'm not saying that all web design should be selfish like this. I care what people want to see, and while I am doing this for fun, I do care what other people think about it and I want to make it enjoyable for others. Simultaneously though, I'm not designing for everyone; if the look and style of these pages resonates with you, then that is great, but if they don't, that's okay too. Media designed for everyone will end up being for no one. I want to style these pages in a way that I think is cool and interesting and using languages I enjoy playing with. I hope you, dear visitor, can see that enjoyment on display here.</p>
                    </div>
                </div>

                <div class="rightbox">
                    <h3>Powered By</h3>
                    <img src="<?= IMAGE_PATH_ABOUT . 'ampmolecule.png'; ?>" alt="spinning molecule">
                    <img src="<?= IMAGE_PATH_ABOUT . 'apachelogo.png'; ?>" alt="spinning logo">
                    <img src="<?= IMAGE_PATH_ABOUT . 'spinningglobe3.gif'; ?>" alt="spinning globe">
                    <img src="<?= IMAGE_PATH_ABOUT . 'phplogo.gif'; ?>" alt="spinning logo">
                    <img src="<?= IMAGE_PATH_ABOUT . 'esdomain.png'; ?>" alt="spinning logo">
                    <img src="<?= IMAGE_PATH_ABOUT . 'sasslogo.png'; ?>" alt="spinning logo">
                    <img src="<?= IMAGE_PATH_ABOUT . 'html5logo.png'; ?>" alt="spinning logo">
                </div>

            </div>
        </div>
    </div>
    <?php include ELEMENTS_PATH . 'footer.php'; ?>
</body>

</html>