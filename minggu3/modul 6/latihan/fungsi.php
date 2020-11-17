<?php 

	//tanpa parameter
	function belajar_web(){
		echo "<h2>Tips Pemrograman Web</h2>";
		echo "Berlatih terus menerus HTML, CSS, PHP dan MySQLi";
	}		

	belajar_web();

	echo "<br>";

	//dengan parameter
	function jumlahkan($x,$y){
		$total=$x+$y;
		echo "<h2>Penjumlahan dari :</h2>";
		echo "$x + $y = $total";
	}

	jumlahkan(11,23);

	echo "<br>";

	//fungsi dengan return
	function perkalian($angka1,$angka2){
		$hasil=$angka1*$angka2;
		return $hasil;
	}

	$hasil=perkalian(4,5);
	echo "Perkalian 4 x 5 adalah $hasil <br>";
	echo "Perkalian 7 x 2 adalah ".perkalian(7,2);

	echo "<br><br>";

	//passing parameter
	//by value
	function increment($value){
		$value++;
	}

	$x=0;
	increment($x);
	echo $x;

	echo "<br><br>";

	//by reference
	function increment2(&$value){
		$value++;
	}

	$x=0;
	increment2($x);
	echo $x;

	echo "<br><br>";

	//default parameter
	function bar($color="black"){
		echo '<font color="'.$color.'">This is some text!</font><br>';
	}

	bar();
	bar('red');
	bar('green');
	bar('blue');

 ?>