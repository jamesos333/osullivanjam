<?php
include_once '_config.php';
$pageName = 'links';
$cssName = $pageName;
?>
<?php include ELEMENTS_PATH_TEMPLATES . 'top.php'; ?>

    <div class="decoder">
        <div class="decoder-element tech">tech</div>
        <div class="decoder-element news">news</div>
        <div class="decoder-element art">art</div>
        <div class="decoder-element books">books</div>
        <div class="decoder-element media">media</div>
        <div class="decoder-element download">download</div>
    </div>

    <?php include ELEMENTS_PATH_LINKS . 'linkTable.php';?>

    <blockquote>
        <p class="darkcloudsquote">we can never be after anything because it Always Exists now and even in a world without history
        history will appear of its own accord cuz theres a need for it greater than most of the things
        we pretend are real.</p>
    </blockquote>

<?php include ELEMENTS_PATH_TEMPLATES . 'bottom.php'; ?>