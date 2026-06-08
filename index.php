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
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar bg-dark navbar-dark px-3">
<span class="navbar-brand">✈️ Tiket Pesawat</span>
<div>
<span class="text-white">Hi, <?php echo $_SESSION['username']; ?></span>
<a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
</div>
</nav>

<div class="container mt-5 text-center">
<h2>Dashboard</h2>
<a href="tiket.php" class="btn btn-primary">Pesan Tiket</a>
</div>

</body>
</html>