<?php 
    include_once '_config.php';
    $pageName = "faq";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="osullivanjam.es">
    <link rel="stylesheet" href="<?=CSS_PATH . 'faq.css';?>">
    <link rel="icon" type="image/x-icon" href="<?=IMAGE_PATH . 'icon.png';?>">
    <title><?='osullivanjam.es: ' . $pageName;?></title>
</head>

<body>
    <?php include ELEMENTS_PATH . 'header.php';?>
    <div id="content">
        <?php include ELEMENTS_PATH . 'navbar.php';?>
        <div class="wrapper">
            <div class="leftpane">
                <img src="<?=IMAGE_PATH_FAQ . 'face1.gif';?>" alt="myface" class="scrollingimage">
            </div>
            <div class="rightpane">
                <div class="title-text">
                    <h1>I am living in your walls.</h1>
                    <h3>You may be concerned about this. In case you are, please read the below:</h3>
                </div>

                <div class="faq-container">
                    <div class="faq-item">
                        <div class="question">Why are you living in my walls?</div>
                        <div class="answer">
                            <p>I'm not going to tell you. </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="question">Are you only in my walls?</div>
                        <div class="answer">
                            <p>You could say I am living in everybody's walls, but in this case I am telling you that I
                                am
                                living in your walls, I am living in your walls.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="question">How are you surviving in my walls?</div>
                        <div class="answer">
                            <p>In my non-physical form, I am crawling around listening for you. That is all I need to
                                survive in that form. In my physical form, I survive by eating rat corpses that cook
                                using the wall behind your oven, and I drink the vapour in the extraction fan duct above
                                your shower.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="question">What are you planning to do in my walls?</div>
                        <div class="answer">
                            <p>Live in them, listening to you.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="question">What do I do about you living in my walls?</div>
                        <div class="answer">
                            <p>Listen for the scraping. Dont touch the walls. Protect yourself. Avoid lighting candles.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="question">When are you going to stop living in my walls?</div>
                        <div class="answer">
                            <p>You cannot escape me.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="question">Do I call the police? </div>
                        <div class="answer">
                            <p>The authorities will not help you.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="question">What are the consequences of you living in my walls?</div>
                        <div class="answer">
                            <p>Be aware.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="question">What if am ok with you living in my walls?</div>
                        <div class="answer">
                            <p>I will make sure you're not.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="question">Are you imaginary?</div>
                        <div class="answer">
                            <p>I AM LIVING IN YOUR WALLS AM LIVING IN YOUR WALLS I AM LIVING IN YOUR WALLS I AM LIVING
                                IN YOUR WALLSI AM LIVING IN YOUR WALLS I AM LIVING IN YOUR WALLS AM LIVING IN YOUR WALLS
                                I AM LIVING IN YOUR WALLS</p>
                        </div>
                    </div>
                    <h3>If there are any more questions then please consult your walls by directly speaking to them.
                    </h3>
                </div>

            </div>
        </div>

    </div>
    <?php include ELEMENTS_PATH . 'footer.php';?>
</body>
</html>