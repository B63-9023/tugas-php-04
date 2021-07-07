<?php 
	echo "<h4>Tugas 4 Page 1 <i>//Memotong desimal angka dibelakang</i></h4><br>"; 
	$beli = 8000;
	$jual = 7500;
	$untung = 300;

	echo "Harga Beli = Rp 8000 <br>";
	echo "Harga Jual = Rp 7500 <br>";
	echo "Keuntungan = Rp 300 <br>";
	$jawab1 = $beli / $jual;
	$output = number_format($jawab1, 0, '.', '');
	echo "Berapa jumlah kambing yang dibeli? Jawaban: $output<br>";

	echo "<br><br><br>";

	echo "<h4>Tugas 4 Page 2 <i>//Pembagian</i></h4><br>";
	$saluran = 523;
	$terpakai = 8891;

	echo "Jumlah Saluran = 523 <br>";
	echo "Jumlah Terpakai = 8891 <br>";
	echo "Rata-rata Pemakaian = ...? <br>";
	$literkeluarga = $terpakai / $saluran;
	echo "Jawaban: $literkeluarga liter/keluarga";
?>
