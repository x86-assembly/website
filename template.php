<?php
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header("HTTP/1.0 403 Forbidden");

	$page_title = "403";
	$page_published = null;

	$page_content = "<p>Template cannot be called directly</p>";
}

?><!DOCTYPE html>
<html lang="<?= $page_lang ?? "en";?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $page_title ?? "website";?></title>
	<style>
	:root {
		--nav-background: #FFE4B6;
		--orange-bold: #CC7351;
		--orange-light: #E08F62;
		--pastel-green: #9DAB86;
		--dark-brown: #351900;

	}

	h1, h2, h3, h4, h5, h6 {color: var(--dark-brown);margin:0;}
	h2::before{content:"# ";font-style: italic; font-size:1.5rem;opacity:0.7;}
	p{padding:1px;}
	a{color:var(--dark-brown);}a:hover{color:#C40F0F;text-decoration:none;}
	i{font-size: 95%;}
	blockquote{max-width: 300px; quotes: initial; border-left: solid black 2px; padding-left: 5px;}
	hr{color:var(--dark-brown)}


	body {
		margin: 0;
		background-color:#ffeed2;
		font-family:"Helvetica", "Linux Libertine", "Georgia", "Times", "Source Serif Pro", serif;
}

	nav {
		float: left;
		margin-right: 20px;
		margin-bottom: 5px;
		background-color:var(--nav-background);
		padding: 7px;
		border: 2px var(--orange-light) ridge;
	}
	header {
		background-color:var(--pastel-green);
		font-size: 85%;
	}


	main {
		padding-left: 8%;
		padding-right: 8%;
		min-height: 80vh;
	}


	.section-label {
		font-weight: bold;
		border-bottom: thin dotted #E0C080;
		min-width: 100%;
		display: block;
	}

	#welcome-section-greeting {
		margin-bottom: 5px;
	}
	</style>
</head>
<body>
	<nav>
		<div id="welcome-section" aria-labelledby="welcome-section-greeting"><!--apperently i shouldn't use sections, so divs it is!-->
			<span class="section-label" id="welcome-section-greeting">Welcome</span>
			<a href="/"><img id="welcome-icon" src="/static/block.png" alt="a minecraft commandblock" width="128px" height="128px" /></a>
		</div>
		<div id="links-section" aria-labelledby="links-section-label">
			<span class="section-label" id="links-section-label">Important links</span>	
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/about.php">About</a></li>
				<li><a href="/contact.php">Contact</a></li>
			</ul>

		</div><!--<div id="articles-section" aria-labelledby="articles-section-label">
			<span class="section-label" id="articles-section-label">My Stuff</span>
			<ol>
				<li class="latest-article"><a href="/">Article one</a></li>
				<li><a href="/article/2">Article two</a></li>
				<li><a href="/test.php">Article three</a></li>
			</ol>
		</div>-->
	</nav>
	<header>
	<h1><?= $page_title??"Title: None"; ?></h1><?php

	if(isset($page_published)) {
		echo '<p>Published: <time datetime="' . date('Y-m-d', strtotime($page_published)) . '">' . date('F jS Y', strtotime($page_published)) . '</time>';


		if(isset($page_updated)) {
			echo '; Last updated: <time datetime="' . date('Y-m-d', strtotime($page_updated)) . '">' . date('F jS Y', strtotime($page_updated)) . '</time>';
		}
		echo '</p>';
	}


	if(isset($page_author)) {
		echo "<p>Author: " . htmlspecialchars($page_author) . "</p>";	
	}

	echo "<p>License: " . ($page_license ?? "CC BY-SA") . "</p>";

	?></header>
	<main>
		<?= $page_content ?? "No page content, sorry :(";?>
	</main>
	<footer>
		<hr />
		<ul>
			<li>copyright: &copy; 2024 <a href="mailto:assembly@codemania.net">"assembly"</a></li>
			<li>source: <a href="https://github.com/x86-assembly/website">GitHub (GPL3)</a></li>
		</ul>
	</footer>
</body>
</html>
