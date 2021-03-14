<?php
	$a = $_POST["ia"];$b = $_POST["ib"];$c = $_POST["ic"];
	$x1 = 0;$x2 = 0;$delta=0;

	if(($a != 0)){
		echo "$a x² $b x $c = 0 <br/>";

		$delta = ($b*$b)-((4*$a)*$c);
		$x1 = (-$b + sqrt($delta))/(2*$a);
		$x2 = (-$b - sqrt($delta))/(2*$a);

		echo "Valor de delta: $delta <br/>";
		echo "Valor de x1: $x1 <br/> Valor de x2: $x2";
	}
	else{
	 	echo "<script> alert('Equa&ccedil&atildeo Invalida');</script>";
	 	include_once('pous.html');
	}
?>