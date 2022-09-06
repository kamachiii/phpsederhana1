<?php 
	function cetak_deret_fibonacci($jumlah){
		// nilai awal 
		$angka_pertama = 0;
		$angka_kedua = 1;
 
		//menyimpan string angka pertama
		$hasil = $angka_kedua;
		for ($i=0; $i<$jumlah-1; $i++) {
			// menghitung angka fibonacci
			$output = $angka_kedua + $angka_pertama;
			// hasilnya akan ditambahkan ke string $hasil
			$hasil = $hasil .$output;
 
			//masukan angka untuk dilakuakn perhitungan berikutnya 
			$angka_pertama = $angka_kedua;
			$angka_kedua = $output;
		}
		return $hasil;
	}
	function piramida_fibonacci($tingkat){
		for($i=1; $i<$tingkat+1; $i++){
			echo cetak_deret_fibonacci($i);
			echo "<br>";
		}
	}
	// menampilkan nilai berdasarkan function dengan jumlah fibonacci
	piramida_fibonacci(15);
?>