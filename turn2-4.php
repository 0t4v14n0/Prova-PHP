<?php
	$vota = $_POST["vot"];

	$arquivo = fopen('dados2.txt', 'a');
	$write = fwrite($arquivo, "$vota \n");
	fclose($arquivo);

	include_once('thorvsbalderv.html');
?>