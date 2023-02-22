<?php
	$pdo = new PDO ("postgresql: host=localhost; dbname=stock", "postgres", "");
	$pdo -> exec ("SET NAMES 'UTF8'");
?>
