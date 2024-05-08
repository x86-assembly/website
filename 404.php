<?php
header("HTTP/1.0 404 Not Found"); //just in case

$page_title = "404";
$page_published = "420-06-09";

$page_content = <<<HTML
	<p>This site could not be found</p>
	HTML;

include "template.php";
