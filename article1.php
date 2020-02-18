<?php
$article1 = fopen("articles/article1.txt", "r")or die("Failed!");
echo fread($article1, filesize("articles/article1.txt"));
fclose($article1);
?>
