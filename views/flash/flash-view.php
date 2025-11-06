<?php
include ELEMENTS_PATH_FLASH . "flash-helper.php";
$flash_element = getFlashElementById($id);
$flash_title = $flash_element['title'];
$flash_path = SWF_PATH . $flash_element['file'];
$flash_width = $flash_element['width'];
$flash_height = $flash_element['height'];
$flash_base = SWF_PATH . (isset($flash_element["basepath"]) ? $flash_element["basepath"] : "");

$pageName = $flash_title;
$cssName = 'flash';
$backLink = "/flash";
$description = "play online flash games nya nya";
$additionalHeader = "<style>#flash-player-container{min-height: " . $flash_height + 60 . ";}</style>";
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<div id="flash-player-container"></div>
<script>
    window.RufflePlayer = window.RufflePlayer || {};
    window.RufflePlayer.config = {
        "contextMenu": "rightClickOnly",
        "autoplay": "on",
        "quality": "high",
        "splashScreen": true,
        "base": "<?= $flash_base ?>"
    }
    window.addEventListener("load", (event) => {
        const container = document.getElementById("flash-player-container");
        const ruffle = window.RufflePlayer.newest();
        let player = ruffle.createPlayer();
        container.appendChild(player);
        player.style.width = "<?= $flash_width ?>";
        player.style.height = "<?= $flash_height ?>";
        player.ruffle().load("<?= $flash_path ?>").then(() => {
            player.ruffle().volume = 0.75;
        });
    });
</script>
<script src="https://unpkg.com/@ruffle-rs/ruffle"></script>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>