<?php
include "db.php";

if($_POST){
    $user = $_POST["username"];
    $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $conn->query("INSERT INTO users (username,password) VALUES ('$user','$pass')");
    echo "<div class='alert alert-success text-center'>Kayıt başarılı! Giriş yapabilirsiniz.</div>";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Kayıt Ol</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(to right, #ff9966, #ff5e62);
}

.register-box {
    background: white;
    padding: 30px;
    border-radius: 15px;
    margin-top: 90px;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
}
</style>

</head>

<body>

<div class="container">

<div class="register-box col-md-4 mx-auto">

<h3 class="text-center mb-4">📝 Kayıt Ol</h3>

<form method="POST">

<div class="mb-3">
<label>Kullanıcı Adı</label>
<input name="username" class="form-control" required>
</div>

<div class="mb-3">
<label>Şifre</label>
<input type="password" name="password" class="form-control" required>
</div>

<button class="btn btn-warning w-100">Kayıt Ol</button>

</form>

<div class="text-center mt-3">
<a href="login.php">Zaten hesabın var mı? Giriş yap</a>
</div>

</div>

</div>

</body>
</html>