<?php

//Calculo para descobrir os números primos entre dois valores pré selecionados

$n = 50; //valor recebido do usuário

$arrRange = []; //array final com números primos

//cria array que será manipulado
for($i = 2; $i <= $n; $i++){
	$arrRange[] = $i;
}

//passa por cada indice do array e verifica quais indices tem valores primos ou não
foreach ($arrRange as $arr) {
	$divisores = 0;
	for ($i=2; $i < $n; $i++) {
			if ($arr % $i == 0) {
				$divisores++;
			}
	}

	for ($i=2; $i < $n; $i++) {
		if ($divisores > 1) {
			$key = array_search($arr, $arrRange);
			unset($arrRange[$key]);
			break;
		}
	}
}

var_dump($arrRange);