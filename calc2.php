<?php
	$cont = 0;$br = 0;$th = 0;$ty = 0;$ba = 0;$bra = 0;$nu = 0;$por = 0;$sbn = 0;$vali = 0;
	$arquivo = fopen("dados2.txt", "r");
	while (!feof($arquivo)){
		$linha = fgets($arquivo);
		$letra = substr($linha, 0, 1);
		$cont++;
		calc($letra,$br,$th,$ty,$ba,$bra,$nu,$vali);
	}
	fclose($arquivo);

	ganhador($br,$th,$ty,$ba,$gan);

	echo "Ganhador $gan[1] <br/> Com $gan[0] votos";

	function calc ($letra,&$br,&$th,&$ty,&$ba,&$bra,&$nu,&$vali){
		if($letra == '1'){$br++;$vali++;}
		else if($letra == '2'){$th++;$vali++;}
		else if($letra == '3'){$ty++;$vali++;}
		else if($letra == '4'){$ba++;$vali++;}
		else if($letra == '5')$bra++;
		else if($letra == '6')$nu++;
	}

	function ganhador ($br,$th,$ty,$ba,&$gan){
		if(($br>$th)&&($br>$ty)&&($br>$ba)){$gan[0]=$br;$gan[1]="BRAGI";}
		else if(($th>$br)&&($th>$ty)&&($th>$ba)){$gan[0]=$th;$gan[1]="THOR";}
		else if(($ty>$br)&&($ty>$th)&&($ty>$ba)){$gan[0]=$ty;$gan[1]="TYR";}
		else if(($ba>$th)&&($br>$ty)&&($br>$br)){$gan[0]=$ba;$gan[1]="BALDER";}
	}
?>