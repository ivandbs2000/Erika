<?php
function convert($r,$g,$b){
	echo "Calculando el valor de hexadecimal de los valores RGB". "<br />";
	echo "RGB " . strval($r).".".strval($g).".".strval($b). "<br />";
	echo "Hexadecimal: #".conca($r).conca($g).conca($b);

}

function calculate($r,$value){

	$div = $r/$value;
	$int = (int)$div;
	$multi = $value*$int;
	$dif = $r - $multi;
	$result =  array('cociente' => $int, 'residuo' => $dif );
	return $result;
}

function validateH($h){
	if($h < 10){
		return string($h);
	}
	else{
		if($h == 10){
			return 'A';
		}
		if($h == 11){
			return 'B';	
		}
		if($h == 12){
			return 'C';
		}
		if($h == 13){
			return 'D';
		}
		if($h == 14){
			return 'E';
		}
		if($h == 15){
			return 'F';
		} 
	}
}

function conca($value){

	$resultString = '';
	$n = 0;
	if($value > 255){
		$n  = 255;
	}
	else{
		$n = $value;
	}

	$result = calculate($n,16);
	$resultString = (string)validateH($result["cociente"]).(string)validateH($result["residuo"]);
	return $resultString;
}

convert(255,255,300)
?>