<?php
error_reporting(0);
echo "md5 enskripsi\n";
echo "Kalimmat yang akan dienskripsi: ";
$cok=trim(fgets(STDIN));
if ($cok){
	echo "tuh hasilnya: ";
	echo md5($cok)."\n";
	echo "mau enskipsi lagi??(y/n)";
	$lg=trim(fgets(STDIN));
	if ($lg){
		if($lg=="y"){
			echo "Kalimmat yang akan dienskripsi: ";
                	$cok1=trim(fgets(STDIN));
			echo "Tuh hasilnya: ".md5($cok1)."\n";
		}elseif($lg=="n"){
			echo "Makasih udh ke tool saya kakak\n";
			exit();
		}else{
			echo "masukan command yang benar kakak\n";
		}
	}
}else{
	echo "masukan kalimatnya\n";
}
?>
