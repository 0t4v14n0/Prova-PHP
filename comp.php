<?php
	$namea = $_POST["nomea"];

	$arquivo = fopen("$namea.txt", "a+");
	fclose($arquivo);

	include_once('esc.html');
?>