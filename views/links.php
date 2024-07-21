<?php
include_once '_config.php';
$pageName = 'links';
$cssName = $pageName;
?>
<?php include ELEMENTS_PATH_TEMPLATES . 'top.php'; ?>

    <div class="disclaimer">
        <h1>IMPORTANT INFORMATION</h1>
        <p>All of the links contained herein will direct you to external websites. These sites contains information that has been created, 
            published, maintained, or otherwise posted by institutions or organizations independent of this organization. We 
            do not assume responsibility for the accuracy, completeness, or timeliness of the information contained therein.
        </p>
    </div>

    <div class="decoder">
        <div class="decoder-element tech">tech</div>
        <div class="decoder-element info">info</div>
        <div class="decoder-element art">art</div>
        <div class="decoder-element books">books</div>
        <div class="decoder-element mscl">mscl</div>
        <div class="decoder-element download">download</div>
    </div>

    <?php include ELEMENTS_PATH_LINKS . 'linktable.php';?>

    <blockquote>
        <p class="darkcloudsquote">we can never be after anything because it Always Exists now and even in a world without history
        history will appear of its own accord cuz theres a need for it greater than most of the things
        we pretend are real.</p>
    </blockquote>

<?php include ELEMENTS_PATH_TEMPLATES . 'bottom.php'; ?>