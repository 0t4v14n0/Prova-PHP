<?php
	$namea = $_POST["nomea"];
	$nome = $_POST["nomes"];

	$arquivo = fopen("$namea.txt", "a");
	$write = fwrite($arquivo, "\r\n");
	$write = fwrite($arquivo, "$nome");
	fclose($arquivo);

	include_once('addn.html');
?>