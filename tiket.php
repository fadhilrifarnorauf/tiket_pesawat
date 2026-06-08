<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Form Tiket</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
<div class="card p-4">

<h4>Form Tiket</h4>

<form action="simpan.php" method="POST">
<input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>

<select name="kode" class="form-control mb-2">
<option value="Garuda">Garuda</option>
<option value="Lion">Lion</option>
<option value="Batik">Batik</option>
</select>

<label>Kelas:</label><br>
<input type="radio" name="kelas" value="Eksekutif" required> Eksekutif
<input type="radio" name="kelas" value="Bisnis"> Bisnis
<input type="radio" name="kelas" value="Ekonomi"> Ekonomi
<br><br>

<input type="number" name="jumlah" class="form-control mb-3" placeholder="Jumlah" required>

<button class="btn btn-success">Simpan</button>
</form>

</div>
</div>

</body>
</html>