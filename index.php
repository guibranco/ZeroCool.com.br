<?php

$host = $_SERVER["HTTP_HOST"];
$campaign = "custom_domain";

if(isset($_SERVER["HTTP_REFERER"]))
    $campaign = urlencode($_SERVER["HTTP_REFERER"]);

$destination = $host == "apibr.com" ? "apibr.com/ui" : "guibranco.github.io";

exit(header("Location: https://" . $destination . "/?utm_campaign=" . $campaign . "&utm_media=redirect&utm_source=" . $host, true, 301));
