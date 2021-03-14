<?php
	$nameaa = $_POST["nomeaa"];

	$arquivo = fopen("$nameaa.txt", "r");
	while (!feof($arquivo)){
		$linha = fgets($arquivo);
		$letra = substr($arquivo, 0, 1);
		echo "$letra";
	}
	fclose($arquivo);
?>