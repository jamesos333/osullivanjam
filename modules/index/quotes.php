<?php
$quotes_full = getFileJsonContent(JSON_PATH_INDEX . "quotes.json");
$small_quotes = $quotes_full["small-quotes"];
$quotes = $quotes_full["quotes"];

shuffle($small_quotes);
shuffle($quotes);
