<?php
	$vota = $_POST["vot"];

	$arquivo = fopen('dados.txt', 'a');
	$write = fwrite($arquivo, "$vota \n");
	fclose($arquivo);

	include_once('votacao.html');
?>