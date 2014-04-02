<?php
header("Cache-Control: public, max-age=1500");
if(!empty($_GET['sp'])) {
	$status = 200;
	$p = dirname(__FILE__) . '/pages/' . str_replace('.', '', $_GET['sp']) . '.page';
	if(!file_exists($p)) {
		$status = 404;
		$content = "404 Snapshot not found";
	} else {
		$content = file_get_contents($p);
	}
	header("Content-Type: text/html; charset=utf-8", true, $status);
	echo $content;
} else {
	header("Content-Type: text/html; charset=utf-8");
?>
<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="author" content="Jakub Kubíček">
<title>Buckingham Palace</title>
<link href="styles/bp.style" rel="stylesheet">
<link rel="canonical" href="http://<?php echo $_SERVER['SERVER_NAME'], dirname($_SERVER['SCRIPT_NAME']), '/'; ?>">

<article>
	<h1>Buckingham Palace</h1>
	<p>This presentation is made by Jakub Kubíček and it behaves like a small picture gallery.</p>
	<p>It is a demonstration of <a href="https://en.wikipedia.org/wiki/Buckingham_Palace">Buckingham Palace</a>.</p>
	<figure id="snapshot">
		<img width="1300" height="600" src="pictures/buckingham-palace-front.jpg">
		<legend>Buckingham Palace</legend>
	</figure>
	<button id="toggle-text">Show text</button>
	<section id="text" class="hide">
		<p><strong>Buckingham Palace</strong> is the official London residence and principal workplace of the British monarch. Located in the City of Westminster, the palace is often at the centre of state occasions and welcomming of the royal guests. It has been a focus for the British people at times of celebrating national events.

Originally known as <strong>Buckingham House</strong>, the building which forms the core of today's palace was a large townhouse built for the <strong>Duke of Buckingham</strong> in 1705 on a site which had been in private ownership for at least 150 years.
		<p>Buckingham Palace finally became the official royal palace of the British monarch on the accession of Queen Victoria in 1837. 
	</section>
	<button class="nav prev" id="psp" disabled>
		Previous snapshot
	</button>
	<button class="nav next" id="nsp">
		<a href="?sp=queen">Next snapshot &rsaquo;</a>
	</button>
</article>
<script src="scripts/bp.js"></script>
<?php }


