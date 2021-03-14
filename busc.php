<?php
	$namea = $_POST["nomeaa"];$cont = 0;

	$arquivo = fopen("$namea.txt", "r");
	while (!feof($arquivo)){
		$linha = fgets($arquivo);
		$letra = substr($linha, 0, 1);
		tabe($linha);
		//addvet($letra,$cont,$linha,$arrtxt);
	}
	fclose($arquivo);

	//ordenar($arrtxt);

	function addvet($letra,&$cont,$linha,&$arrtxt){
		if($letra == 'A'){
			$arrtxt[$cont] =[1,$linha];
			$cont++;
		}
		else if($letra == 'B'){
			$arrtxt[$cont] =[2,$linha];
			$cont++;
		}
		else if($letra == 'C'){
			$arrtxt[$cont] =[3,$linha];
			$cont++;
		}
		else if($letra == 'D'){
			$arrtxt[$cont] =[4,$linha];
			$cont++;
		}
		else if($letra == 'E'){
			$arrtxt[$cont] =[5,$linha];
			$cont++;
		}
		else if($letra == 'F'){
			$arrtxt[$cont] =[6,$linha];
			$cont++;
		}
		else if($letra == 'G'){
			$arrtxt[$cont] =[7,$linha];
			$cont++;
		}
		else if($letra == 'H'){
			$arrtxt[$cont] =[8,$linha];
			$cont++;
		}
		else if($letra == 'I'){
			$arrtxt[$cont] =[9,$linha];
			$cont++;
		}
		else if($letra == 'J'){
			$arrtxt[$cont] =[10,$linha];
			$cont++;
		}
		else if($letra == 'K'){
			$arrtxt[$cont] =[11,$linha];
			$cont++;
		}
		else if($letra == 'L'){
			$arrtxt[$cont] =[12,$linha];
			$cont++;
		}
		else if($letra == 'M'){
			$arrtxt[$cont] =[13,$linha];
			$cont++;
		}
		else if($letra == 'N'){
			$arrtxt[$cont] =[14,$linha];
			$cont++;
		}
		else if($letra == 'O'){
			$arrtxt[$cont] =[15,$linha];
			$cont++;
		}
		else if($letra == 'P'){
			$arrtxt[$cont] =[16,$linha];
			$cont++;
		}
		else if($letra == 'Q'){
			$arrtxt[$cont] =[17,$linha];
			$cont++;
		}
		else if($letra == 'R'){
			$arrtxt[$cont] =[18,$linha];
			$cont++;
		}
		else if($letra == 'S'){
			$arrtxt[$cont] =[19,$linha];
			$cont++;
		}
		else if($letra == 'T'){
			$arrtxt[$cont] =[20,$linha];
			$cont++;
		}
		else if($letra == 'U'){
			$arrtxt[$cont] =[21,$linha];
			$cont++;
		}
		else if($letra == 'V'){
			$arrtxt[$cont] =[22,$linha];
			$cont++;
		}
		else if($letra == 'W'){
			$arrtxt[$cont] =[23,$linha];
			$cont++;
		}
		else if($letra == 'X'){
			$arrtxt[$cont] =[24,$linha];
			$cont++;
		}		
		else if($letra == 'Y'){
			$arrtxt[$cont] =[25,$linha];
			$cont++;
		}
		else if($letra == 'Z'){
			$arrtxt[$cont] =[26,$linha];
			$cont++;
		}
	}

	function ordenar($arrtxt){
		for($i = 0; $i < count($arrtxt); $i++){
    		for($j = 0; $j < count($arrtxt) - 1; $j++){
       			if($arrtxt[$j] > $arrtxt[$j + 1]){
         			$aux = $arrtxt[$j];
         			$arrtxt[$j] = $arrtxt[$j + 1];
         			$arrtxt[$j + 1] = $aux;
        		}
    		}
    	}
	}
	function tabe ($linha){
		$conta = 0;
		$b = 0;
		$a = 0;
		$i = 0;
		$arr = explode(" ", $linha);
		$b = count($arr);

		do{
			if ($i == $b) {
				echo "arr[0]";
				$a = 1;
			}
			else{
				echo "arr[1]";
				$i++;
				$a = 0;				
			}

		}while ( $a<=1);
	}
?>