<?php
$id = intval($_GET['id']);

if(!isset($id)) {
	$custom_error = "This article could not be found";
	include "404.php";
	die();
}

include "db.php";

$conn = connectDB();

$result = $conn->query("SELECT * FROM articles WHERE id = $id LIMIT 1;");

if($result->num_rows != 1){
	include "404.php";
	die();
}

$post = $result->fetch_assoc();

$page_title = $post['title'];
$page_published = $post['date_pub'];
$page_updated = $post['date_ed'];
$page_content = $post['content'];
$page_author = $post['auth'];
$page_license = $post['copy'];
$page_lang = $post['lang'];

include 'template.php';
