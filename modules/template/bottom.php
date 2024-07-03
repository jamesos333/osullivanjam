<?php
    date_default_timezone_set("America/New_York");
    $date = date("m-d-y h:i:sa");
    $copyrightPath = HTML_PATH . 'copyright.html';
    $copyrightString = getFileTextContent($copyrightPath);
    $copyrightString = str_replace('DATE_HERE', $date, $copyrightString);
?>

    </div>
    <div class="copyright">
        <?=$copyrightString?>
    </div>
</body>
</html>