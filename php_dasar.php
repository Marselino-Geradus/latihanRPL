<?php 
	echo "Hai dunia. Ini adalah percobaan pertamaku memakai PHP di laptop ini. <br>";
	echo "-------------------------------------------------------------------- <br>";
	$nama = 'Marselino Geradus';
	$nim = 'D0221364';
	$prodi = "Teknik Informatika";
	$berat = 54.8;
	$tinggi = 150;
	$mahasiswa = True;


//	print "<h2>== MY BIO ==<br> </h2>";
//	echo "- Nama: ",$nama,"<br>";
//	echo "- NIM: ",$nim, "<br>";
//	echo "- Prodi: ",$prodi, "<br>";
//	echo "- Tinggi badan: ",$tinggi,' cm',"<br>";
//	echo "- Berat badan: $berat kg <br>";
//	echo "- Status: $mahasiswa <br>";
//	echo "Ini adalah biodata singkat. Sekian dan terima kasih. <br>"

	$a = 12;
	$b = 8;
	$c = 5;

	$hasil1 = $a + $b - $c;
	$hasil2 = $a * $b / $c;
	$hasil3 = $a + $b * $c;
	$hasil4 = $a + $b / $c;
	$hasil5 = ($a - $b) * $c;
	$hasil6 = ($a + $b) * $c;
	
/*
	echo "Hasil dari a + b - c = $hasil1 <br>";
	echo "Hasil dari a * b / c = $hasil2 <br>";
	echo "Hasil dari a + b * c = $hasil3 <br>";
	echo "Hasil dari a + b / c = $hasil4 <br>";
	echo "Hasil dari (a - b) * c = $hasil5 <br>";
	echo "Hasil dari (a + b) * c = $hasil6 <br>";*/	


	$nilai = 80;


	if ($nilai <= 100 && $nilai >= 80) {
		echo "Nilai Anda = A";
	}elseif ($nilai < 80 && $nilai >70) {
		echo "Nilai Anda = B";
	}elseif ($nilai <= 69 && $nilai >=50) {
		echo "Nilai Anda = C";

	}else {
		echo "Nilai Anda = D! Mohon konfirmasi dosen terkait secepatnya untuk perbaikan nilai!";
	}

 ?>