<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$id = intval($_GET['id']);

if(!isset($id)) {
	header("Location: /");
	die("no");
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

include 'template.php';
