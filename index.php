<!DOCTYPE html>
<html>
<head>
	<title>大西洲-Atlantico</title>
	<link rel="stylesheet" type="text/css" href="article.css">
	<link rel="stylesheet" type="text/css" href="intro.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="image.css">
</head>



<body style="background-image: url(wolfa-3069636.jpg); background-repeat: no-repeat; background-attachment: fixed;">
<nav><h id=titlehead>WHIMS, GIBBERISH and IDEAS</h></nav>

<div class="intro">
	<fieldset class="intro">
	<legend class="introh">Atlantico</legend><hr>
	<span class="introp">No introduction. The manager.</span>
	</fieldset>
</div>

<div class="article">
<fieldset class="article">
<legend class="h">Hello World!</legend>
<br>
<?php
$article1 = fopen("article1.txt", "r")or die("Failed!");
echo fread($article1, filesize("article1.txt"));
fclose($article1);
?>
<br><br>
<div class="img">
<img src="IMG_3169.JPG">
</div>
	</fieldset>
</div>
</body>
</html>