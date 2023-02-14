<?php 

// untuk mengetesnya silahkan hilangkan komentar pada tiap no yg akan dijalankan.

################################################################

// SOAL PROGRAMING (1/5)

################################################################
// 1
################################################################
// function solution($intTinggi = 50){
//  	for ($i=$intTinggi; $i > 0 ; $i/=2) { 
//  		if ($i <= 1) {
//  			break;
//  		}
//  		echo $i . ", ";
//  	}
//  	return $i;
 	
//  }

################################################################
// 2
################################################################
// function solution($intJamMasuk = 10, $intJamKeluar = 12){

// 	$totalJam = $intJamKeluar - $intJamMasuk;

// 	if ($totalJam == 1 and $intJamMasuk <= 8) {
// 		$harga = 350000;
// 	}
// 	else if ($totalJam ==2 and $intJamMasuk <= 8){
// 		$harga = 500000;
// 	}
// 	else if ($totalJam >=2 and $intJamMasuk <= 8){
// 		// harga per 30 menit jika sewa sebelum jam 8 75.000
// 		$harga = 500000 + (75000 * $totalJam);
// 	}
// 	else if ($totalJam == 1 and $intJamMasuk <= 12){
// 		$harga = 350000 + (100000 * $totalJam);
// 	}
// 	else if ($totalJam >=2 and $intJamMasuk <= 12){
// 		// harga per 30 menit jika sewa masuk jam 9 dst dikenakan tambahan 100.000
// 		$harga = 500000 + (100000 * $totalJam);
// 	}
// 	else {
// 		// harga per 30 menit jika sewa sebelum jam 8 75.000
// 		$harga = " Terjadi kesalahan, Silahkan ulangi kembali";
// 		// harga per 30 menit jika sewa masuk jam 9 dst dikenakan tambahan 100.000
// 	}

// 	return $harga;
// }

################################################################
// 3.
################################################################
// function solution($intNilai1 = 1, $intNilai2 = 2, $intNilai3 = 6){
// 	for ($i=$intNilai1; $i < $intNilai3; $i++) { 
// 		echo $i . ", " ;
// 	}

// 	return $i;

//  }

################################################################
// 4.
################################################################
// function solution($intN = 6,$doubleNilai = 123){
// 	$karakter = strlen($doubleNilai);
// 	$N = $intN - $karakter;
// 	$x = substr("0000000000", 0 , $N);

// 	$hasil = $x . $doubleNilai;

// 	return $hasil;

// }

################################################################
// 5.
################################################################
function solution($doublePokok = 120000 ,$intTenor = 12,$doubleBungaPerbulan = 0.1){

	$nilaiBunga = $doublePokok * $doubleBungaPerbulan;

	$pinjamanPerbulan = ($doublePokok + $nilaiBunga) / $intTenor;
	$bungaPerbulan = $nilaiBunga;
	$totalPinjaman = $pinjamanPerbulan + $bungaPerbulan;

	return $totalPinjaman;
}

################################################################


################################################################

// menampilkan ke layar
// silahkan jika ingin di isi sesuaikan dengan parameternya masing-masing.
echo solution();

################################################################


 ?>
