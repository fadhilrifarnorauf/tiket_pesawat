<?php
include "koneksi.php";

$nama=$_POST['nama'];
$kode=$_POST['kode'];
$kelas=$_POST['kelas'];
$jumlah=$_POST['jumlah'];

$harga=1000000;
$total=$harga*$jumlah;

$kode_tiket="TKT".rand(1000,9999);

mysqli_query($koneksi,"INSERT INTO tiket VALUES(NULL,'$nama','$kode','$kelas','$jumlah','$harga','$total')");

$dataQR="Kode:$kode_tiket|Nama:$nama|Total:$total";
$qr="https://api.qrserver.com/v1/create-qr-code/?size=120x120&data=".urlencode($dataQR);
?>

<!DOCTYPE html>
<html>
<head>
<title>Tiket</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.ticket{max-width:800px;margin:40px auto;display:flex;box-shadow:0 5px 15px rgba(0,0,0,0.2);}
.left{width:70%;background:white;padding:20px;}
.right{width:30%;background:#0d6efd;color:white;text-align:center;padding:20px;}
</style>

</head>
<body class="bg-light">

<div class="ticket">
<div class="left">
<h4>BOARDING PASS</h4>
<p>Kode: <?php echo $kode_tiket; ?></p>
<p>Nama: <?php echo $nama; ?></p>
<p>Maskapai: <?php echo $kode; ?></p>
<p>Kelas: <?php echo $kelas; ?></p>
<p>Jumlah: <?php echo $jumlah; ?></p>
<h5>Total: Rp <?php echo number_format($total); ?></h5>
</div>

<div class="right">
<img src="<?php echo $qr; ?>"><br>
Scan QR
</div>
</div>

<div class="text-center">
<button onclick="window.print()" class="btn btn-primary">Cetak</button>
<a href="tiket.php" class="btn btn-secondary">Kembali</a>
</div>

</body>
</html>