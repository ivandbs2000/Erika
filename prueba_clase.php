<?php
	$entero = 10;
	$float = 12.34;
	$string = "clase HCI";
	$array = array("key1","hola","key2","mundo");
	$array2 = array("key1"=>"hola", "key2"=>"mundo");
	$verdadero = true;
	$falso = false;

	class StrValtest{
		private $mivar = "clase1";
		public $mivar2 = "clase 2";
		public function __toString(){
			return __CLASS_;
		}

		public function example(){
			return "estos es una prueba";
		}
	}

	echo "entero ". intval($entero). "<br />";
	echo "float ". intval($float). "<br />";
	echo "string ". intval($string). "<br />";
	echo "boolean verdadero ". intval($verdadero). "<br />";
	echo "boolean falso ". intval($falso). "<br />";
	echo "hex-dec ". intval(0x165). "<br />";

	echo "float string ". strval($float). "<br />";
	$floatString = strval($float);
	echo "floatstring ". gettype($floatString)."<br/>";
	echo "falso string ". strval($falso). "<br />";
	echo "verdadero string ". strval($verdadero). "<br />";

	echo "array int ". (int)$array. "<br />";
	echo "array float". (float)$verdadero. "<br />";

	var_dump((array) new StrValtest);

	echo "<br />";

	var_dump((object)$float);


?>