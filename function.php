<?php
	$a = 120;

	comp($a);

	echo "$a";

	function comp (&$a){
		if($a <=50)$a=$a+50;
		else if(($a > 50)&&($a <= 100))$a = $a +100;
		else if($a > 100)$a = $a +200;
	}
?>