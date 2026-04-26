<?php
session_start();
include "db.php";

if($_POST){
    $tarih = $_POST["tarih"];
    $saat = $_POST["saat"];
    $user = $_SESSION["user_id"];

    $conn->query("INSERT INTO reservations (user_id,tarih,saat)
                  VALUES ('$user','$tarih','$saat')");

    echo "<div class='alert alert-success text-center'>Rezervasyon alındı</div>";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(to right, #43e97b, #38f9d7);
}
.form-box {
    background: white;
    padding: 30px;
    border-radius: 15px;
    margin-top: 80px;
}
</style>

</head>

<body>

<div class="container">

<div class="form-box col-md-4 mx-auto shadow">

<h3 class="text-center mb-3">📅 Rezervasyon Yap</h3>

<form method="POST">

<input type="date" name="tarih" class="form-control mb-2" required>
<input type="time" name="saat" class="form-control mb-3" required>

<button class="btn btn-primary w-100">Kaydet</button>

</form>

</div>

</div>

</body>
</html>