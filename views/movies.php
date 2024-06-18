<?php
    include_once '_config.php';
    include_once ELEMENTS_PATH_MOVIES . 'movietable.php';
    $pageName = "movies";
    $cssName = $pageName;
?>
<?php include ELEMENTS_PATH_TEMPLATES . 'top.php'; ?>

    <div class="infoHeader">
        <h1>Archive of the <span class="pink">TWW Films</span> Project</h1>
        <p><span class="pink">TWW Films</span> was a YouTube channel active from 2015-2019 that specialized in 
        horror short films. During this time period we managed to create around 16 original videos, eventually culminating 
        in the release of <span class="pinkI">Extermination of Scum</span>, our masterpiece. The contents of 
        the channel are available for viewing via 
        <a href="https://www.youtube.com/@TheWhattetyWhaters"><span class="youtubeLink">YouTube</span></a>, or through the links below.</p>
    </div>
    <?=getMovieTable()?>

<?php include ELEMENTS_PATH_TEMPLATES . 'bottom.php'; ?>