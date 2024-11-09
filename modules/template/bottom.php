<?php
date_default_timezone_set("America/New_York");
$date = date("m-d-y h:i:sa");
$copyrightPath = HTML_PATH . 'copyright.html';
$copyrightString = str_replace(
    array("%VERSION%", "%DATE%"),
    array(VERSION, $date),
    getFileTextContent($copyrightPath)
);
?>

    </div>
    <div class="copyright">
        <?=$copyrightString?>
    </div>
</body>
</html>