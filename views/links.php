<?php
include_once '_config.php';
$pageName = 'links';
$cssName = $pageName;
?>
<?php include ELEMENTS_PATH_TEMPLATES . 'top.php'; ?>

    <div class="disclaimer">
        <h1>WARNING</h1>
        <p>All of the links contained here will direct you to external websites. These sites contains information that has been created, 
            published, maintained, or otherwise posted by institutions or organizations independent of this one. We 
            do not assume responsibility for the accuracy, completeness, or timeliness of the information contained therein.
        </p>
    </div>

    <?php include ELEMENTS_PATH_LINKS . 'linkTable.php';?>

    <blockquote>
        <p class="darkcloudsquote">we can never be after anything because it Always Exists now and even in a world without history
        history will appear of its own accord cuz theres a need for it greater than most of the things we pretend are real.</p>
    </blockquote>

<?php include ELEMENTS_PATH_TEMPLATES . 'bottom.php'; ?>