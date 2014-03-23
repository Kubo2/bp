<?php
if(!empty($_GET['sp'])) {
	$status = 200;
	$p = dirname(__FILE__) . '/pages/' . str_replace('.', '', $_GET['sp']) . '.page';
	if(!file_exists($p)) {
		$status = 404;
		$content = "404 Snapshot not found";
	} else {
		$content = file_get_contents($sp);
	}
	header("Content-Type: text/html; charset=utf-8", true, $status);
	echo $content;
} else {
	header("Content-Type: text/html; charset=utf-8");
?>
<!doctype html>
<meta charset="utf-8">
<meta name="author" content="Jakub Kubíček">
<title>Buckingham Palace</title>
<link href="styles/bp.style" rel="stylesheet">
<link rel="canonical" href="http://<?php echo $_SERVER['SERVER_NAME'], dirname($_SERVER['SCRIPT_NAME']), '/'; ?>">

<article>
	<h1>Buckingham Palace</h1>
	<p>This presentation is made by Jakub Kubíček and it behaves like a small picture gallery.</p>
	<p>It is a demonstration of <a href="https://en.wikipedia.org/wiki/Buckingham_Palace">Buckingham Palace</a>.</p>
	<figure id="snapshot">
		<img src="pictures/buckingham-palace-front.jpg">
		<legend>Buckingham Palace</legend>
	</figure>
	<button class="nav next" id="nsp">
		<a href="?sp=queen">Next snapshot &rsaquo;</a>
	</button>
</article>
<script src="scripts/bp.js"></script>
<?php }


