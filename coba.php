<?php 
//koneksi ke database mysql, silahkan di rubah dengan koneksi agan sendiri 
$koneksi = mysqli_connect("localhost","root","","aritmatika");
//ambil data dari database 
$result = mysqli_query($koneksi, "SELECT * FROM db_aritmatika");
if (!$result) {
	echo mysqli_error($koneksi);
} 
?>
<html>

<head>
	<title>aritmatika php</title>
</head>
<body>
	
<div class="kotak_1"></div>
<center><h1>Penjumlahan</h1></center>

<form action="" method="post">
	<label> Angka Nilai A <input type="number" name="a"></label><br>
	<label> Angka Nilai B <input type="number" name="b"></label><br>
	<button type="submit" name="submit">HITUNG</button>
</form>

<?php  
if(isset($_POST['submit'])){
	// ambil data dari tiap elemen form
	$nilai_a 		= $_POST['a'];
	$nilai_b 		= $_POST['b'];
	$nilai_c 		= $_POST['submit'];
	$nilai_c 		= $nilai_a + $nilai_b;
	echo $nilai_c;

	if ($nilai_c >= 0 && $nilai_c <= 25) {
      $keterangan = "Nilai D";
   }
   elseif ($nilai_c >= 26 && $nilai_c <= 45) {
      $keterangan = "Nilai C";
   }
   elseif ($nilai_c >= 46 && $nilai_c <= 65) {
      $keterangan = "Nilai B";
   }
   elseif ($nilai_c >= 66 && $nilai_c > 100) {
      $keterangan = "Nilai A";
   }
	echo  $keterangan;

	for ($i=0; $i <= 10; $i++) { 
		$nilai_a = $nilai_b;
		$nilai_c = $nilai_a + $nilai_b;
		$nilai_b = $nilai_c;

		//for ($i=1; $i <= 10 ; $i++) {
	//	$nilai_a = $nilai_b;
	//	$nilai_c = $nilai_a + $nilai_b;
	//	$nilai_b = $nilai_c;

	if ($nilai_c >= 0 && $nilai_c <= 25) {
      $keterangan = "Nilai D";
   }
   elseif ($nilai_c >= 26 && $nilai_c <= 45) {
      $keterangan = "Nilai C";
   }
   elseif ($nilai_c >= 46 && $nilai_c <= 65) {
      $keterangan = "Nilai B";
   }
   elseif ($nilai_c >= 66 && $nilai_c > 100) {
      $keterangan = "Nilai A";
   }
	echo $nilai_c; 	
	}


	// query insert data
	$query = "INSERT INTO db_aritmatika VALUES ( '$nilai_a', '$nilai_b', '$nilai_c', '$keterangan')";
	mysqli_query($koneksi, $query);

	}

?>	
	
<hr>
<center>
	<h3>HISTORI TABEL PENJUMLAHAN</h3>
	<table border="2" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO</th>
			<th>NILAI A</th>
			<th>NILAI B</th>
			<th>HASIL</th>
			<th>KETERANGAN</th>	
		</tr>

<?php while ($row = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['nilai_a']; ?></td>
			<td><?php echo $row['nilai_b']; ?></td>
			<td><?php echo $row['nilai_c']; ?></td>
			<td><?php echo $row['keterangan']; ?></td>
		</tr>
<?php endwhile; ?>

	</table>
	</center>



</body>
</html>