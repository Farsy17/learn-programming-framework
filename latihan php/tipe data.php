<?php

	//Null
	$a = null;

	echo $a;
	echo "<br>";

	//boolean
	$a = true;
	$b = false;

	if ($a) {
		echo "Betul";
	} else {
		echo "Salah";
	}

	echo "<br>";

	//tipe data integer
	$a = -3;
	$b = 0;
	$c = 123;
	$d = 0123;
	$e = 0x1012;

	echo $a." ".$b." ".$c." ".$d." ".$e;

	echo "<br>";
	//float

	$a = 1.23;
	$b = 10.0;

	echo $a." ".$b;

	echo "<br>";
	//array

	$a = array (1,2,3);
	$b = ["A", true, 123 => 5];

	echo $a[0]."<br>".$b[0]."<br>".$b[123]."<br>".$b[1];
 ?>