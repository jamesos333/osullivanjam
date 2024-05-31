<?php 
    include_once '_config.php';
    include_once ELEMENTS_PATH_INDEX . 'quotes.php';
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="description" content="osullivanjam.es">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS_PATH . 'index.css?nocache'; ?>">
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH . 'icon.png'; ?>">
    <title>osullivanjam.es</title>
</head>

<body>
    <?php include ELEMENTS_PATH . 'header.php';?>
    <?php include ELEMENTS_PATH_INDEX . 'scrollingtext.php';?>
    <div id="content">
        <table>
            <tr>
                <th>
                    <p class="subquote" style="border-width: 10px;"><?php echo $smallQuoteArray[0]?></p>
                </th>
                <th>
                    <p class="subquote" style="border-width: 5px;"><?php echo $quoteArray[0]?></p>
                </th>
                <th>
                    <p class="subquote" style="border-width: 10px;"><?php echo $smallQuoteArray[1]?></p>
                </th>
            </tr>
        </table>
        <?php include ELEMENTS_PATH_INDEX . 'buttontable.php';?>
        <blockquote>
            <p class="cloudquote">I stood in the midst of the world, and in the flesh I manifested myself to them. I
                found them all drunk; I found none athirst among them. And my soul was afflicted for the children of
                men. Because they are blind in their heart and do not see, because they have come into the world
                empty, they seek still to go out from the world empty.</p>
        </blockquote>
        <table>
            <tr>
                <th>
                    <img src="<?= IMAGE_PATH_INDEX . 'alligator.gif'; ?>" alt="alligators dancing" style="width: 70%; margin-bottom: 10px">
                </th>
                <th>
                    <img src="<?= IMAGE_PATH_INDEX . 'alligator.gif'; ?>" alt="alligators dancing" style="width: 70%; margin-bottom: 10px">
                </th>
            </tr>
        </table>
        <p class="subquote">"i descended beneath the earth and became hypoxic from the fumes"</p>
        <img src="<?= IMAGE_PATH_INDEX . 'bodywithoutorgans2.png'; ?>" alt="body without organs" class="center" style="width: 87%; margin-top: 30px">
        <blockquote>
            <p class="firequote">Your wealth has rotted, and moths have eaten your clothes. Your gold and silver
                are corroded. Their corrosion will testify against you and eat your flesh like fire.</p>
        </blockquote>
    </div>
    <?php include ELEMENTS_PATH . 'footer.php';?>
</body>
</html>