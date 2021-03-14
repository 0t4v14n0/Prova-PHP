<?php
	$cont = 0;$br = 0;$th = 0;$ty = 0;$ba = 0;$bra = 0;$nu = 0;$por = 0;$sbn = 0;$vali = 0;
	$arquivo = fopen("dados.txt", "r");
	while (!feof($arquivo)){
		$linha = fgets($arquivo);
		$letra = substr($linha, 0, 1);
		$cont++;
		calc($letra,$br,$th,$ty,$ba,$bra,$nu,$vali);
	}
	fclose($arquivo);

	ganhador($br,$th,$ty,$ba,$gan);
	ganhador2($br,$th,$ty,$ba,$gan,$gan2);

	if(($bra+$nu)<($cont /2)){
		if($gan[0]<($vali/2)){
			if(($gan[1]=="BRAGI")&&($gan2[1]=="THOR"))include_once('turno2/bragivsthor.html');
			else if(($gan[1]=="BRAGI")&&($gan2[1]=="TYR"))include_once('turno2/bragivstyr.html');
			else if(($gan[1]=="BRAGI")&&($gan2[1]=="BALDER"))include_once('turno2/bragivsbalder.html');
			else if(($gan[1]=="THOR")&&($gan2[1]=="TYR"))include_once('turno2/thorvstyr.html');
			else if(($gan[1]=="THOR")&&($gan2[1]=="BALDER"))include_once('turno2/thorvsbalder.html');
			else if(($gan[1]=="TYR")&&($gan2[1]=="BALDER"))include_once('turno2/tyrvsbalder.html');
		}
		else{
			echo "Ganhador:$gan[1] <br/>
				  Com $gan[0] votos";
		}
	}
	else echo "Eleição invalida";

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
		else if(($ba>$th)&&($ba>$ty)&&($ba>$br)){$gan[0]=$ba;$gan[1]="BALDER";}
	}
	function ganhador2 ($br,$th,$ty,$ba,$gan,&$gan2){
		if($gan[1] == "BRAGI"){
			if(($th<$gan[0])&&($th>=$ty)&&($th>=$ba)){$gan2[0]=$th;$gan2[1]="THOR";}
			else if(($ty<$gan[0])&&($ty>=$th)&&($ty>=$ba)){$gan2[0]=$ty;$gan2[1]="TYR";}
			else if(($ba<$gan[0])&&($ba>=$th)&&($ba>=$ty)){$gan2[0]=$ba;$gan2[1]="BALDER";}
		}
		else if($gan[1] == "THOR"){
			if(($br<$gan[0])&&($br>=$ty)&&($br>$ba)){$gan2[0]=$br;$gan2[1]="BRAGI";}
			else if(($ty<$gan[0])&&($ty>=$br)&&($ty>=$ba)){$gan2[0]=$ty;$gan2[1]="TYR";}
			else if(($ba<$gan[0])&&($ba>=$ty)&&($ba>=$br)){$gan2[0]=$ba;$gan2[1]="BALDER";}

		}
		else if($gan[1] == "TYR"){
			if(($br<$gan[0])&&($br>=$th)&&($br>$ba)){$gan2[0]=$br;$gan2[1]="BRAGI";}
			else if(($th<$gan[0])&&($th>=$br)&&($th>=$ba)){$gan2[0]=$th;$gan2[1]="THOR";}
			else if(($ba<$gan[0])&&($ba>=$th)&&($ba>=$br)){$gan2[0]=$ba;$gan2[1]="BALDER";}

		}
		else if($gan[1] == "BALDER"){
			if(($br<$gan[0])&&($br>=$th)&&($br>=$ty)){$gan2[0]=$br;$gan2[1]="BRAGI";}
			else if(($th<$gan[0])&&($th>=$br)&&($th>=$ty)){$gan2[0]=$th;$gan2[1]="THOR";}
			else if(($ty<$gan[0])&&($ty>=$th)&&($ty>=$br)){$gan2[0]=$ty;$gan2[1]="TYR";}

		}
	}
?>