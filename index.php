<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Ana Sayfa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(to right, #141e30, #243b55);
    color:white;
}

.kutu{
    margin-top:120px;
    text-align:center;
}
</style>

</head>

<body>

<div class="container kutu">

<h1>📌 Rezervasyon Sistemi</h1>
<p>Devam etmek için giriş yap veya kayıt ol</p>

<a href="login.php" class="btn btn-success btn-lg m-2">Giriş Yap</a>
<a href="register.php" class="btn btn-warning btn-lg m-2">Kayıt Ol</a>

</div>

</body>
</html>