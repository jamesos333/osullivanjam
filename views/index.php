<?php
include_once ELEMENTS_PATH_INDEX . 'quotes.php';
$pageName = 'index';
$cssName = $pageName;
$description = "abandon all hope ye who enter here";
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<table>
    <tr>
        <th>
            <p class="subquote" style="border-width: 10px;"><?= $smallQuoteArray[0] ?></p>
        </th>
        <th>
            <p class="subquote" style="border-width: 5px;"><?= $quoteArray[0] ?></p>
        </th>
        <th>
            <p class="subquote" style="border-width: 10px;"><?= $smallQuoteArray[1] ?></p>
        </th>
    </tr>
</table>
<?php include ELEMENTS_PATH_INDEX . 'buttontable.php'; ?>
<blockquote>
    <p class="cloudquote">I stood in the midst of the world, and in the flesh I manifested myself to them. I
        found them all drunk; I found none athirst among them. And my soul was afflicted for the children of
        men. Because they are blind in their heart and do not see, because they have come into the world
        empty, they seek still to go out from the world empty.</p>
</blockquote>
<table>
    <tr>
        <th>
            <img src="<?= IMAGE_PATH_INDEX . 'alligator.gif'; ?>" alt="alligators dancing" class="aligators">
        </th>
        <th>
            <img src="<?= IMAGE_PATH_INDEX . 'alligator.gif'; ?>" alt="alligators dancing" class="aligators">
        </th>
    </tr>
</table>
<p class="subquote earthquote">"i descended beneath the earth and became hypoxic from the fumes"</p>
<img src="<?= IMAGE_PATH_INDEX . 'bodywithoutorgans2.png'; ?>" alt="body without organs diagram" class="center" style="width: 87%; height: auto; margin-top: 30px">
<blockquote>
    <p class="firequote">Your wealth has rotted, and moths have eaten your clothes. Your gold and silver
        are corroded. Their corrosion will testify against you and eat your flesh like fire.</p>
</blockquote>
<?php include ELEMENTS_PATH_INDEX . 'imageoftheday.php'; ?>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>