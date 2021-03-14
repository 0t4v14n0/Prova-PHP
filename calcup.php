<?php
	$a = $_POST["ia"];$b = $_POST["ib"];
	$x = 0;


	if(($a > 0)&&($b > 0)){
		echo "$a x + $b = 0 <br/>";
		$x= -$b/$a;
		echo "Valor de x: $x";
	}
	else{
	 	echo "<script> alert('Equa&ccedil&atildeo Invalida');</script>";
	 	include_once('pous.html');
	}
?>