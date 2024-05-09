<?php
header("HTTP/1.0 404 Not Found"); //just in case

$page_title = "404";
$page_published = null;

$page_content = $custom_error ?? "<p>This site could not be found</p>";

include "template.php";

die();
