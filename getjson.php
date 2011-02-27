<?php
	$filename = $_GET['file'];
	
    $content = file_get_contents($filename);
	echo $content;
?>