<?php
session_start();
include "koneksi.php";

$error="";

if(isset($_POST['login'])){
    $u=$_POST['username'];
    $p=md5($_POST['password']);

    $cek=mysqli_query($koneksi,"SELECT * FROM users WHERE username='$u' AND password='$p'");

    if(mysqli_num_rows($cek)>0){
        $_SESSION['username']=$u;
        header("location:index.php");
        exit;
    } else {
        $error="Login gagal!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark d-flex justify-content-center align-items-center vh-100">

<div class="card p-4" style="width:300px;">
<h3 class="text-center">Login</h3>

<?php if($error) echo "<div class='alert alert-danger'>$error</div>"; ?>

<form method="POST">
<input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
<input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
<button name="login" class="btn btn-primary w-100">Login</button>
</form>

</div>

</body>
</html>