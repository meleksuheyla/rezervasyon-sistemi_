<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}
include "db.php";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<!-- BOOTSTRAP (BURAYA EKLENİR) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(to right, #4facfe, #00f2fe);
}

.kutu {
    background: white;
    padding: 30px;
    border-radius: 15px;
    margin-top: 50px;
}
</style>

</head>

<body>

<div class="container">

<div class="kutu col-md-6 mx-auto shadow">
<nav class="mb-3">
<a href="rezervasyon.php" class="btn btn-success btn-sm">➕ Rezervasyon Yap</a>
<a href="dashboard.php" class="btn btn-primary btn-sm">📋 Rezervasyonlarım</a>
<a href="logout.php" class="btn btn-danger btn-sm">🚪 Çıkış</a>
</nav> 
<h2 class="text-center mb-4">👋 Hoşgeldin</h2>

<div class="d-flex justify-content-between mb-3">
<a href="rezervasyon.php" class="btn btn-success">+ Rezervasyon Yap</a>
<a href="logout.php" class="btn btn-danger">Çıkış</a>
</div>

<h4>📅 Rezervasyonlarım</h4>

<?php
$user = $_SESSION["user_id"];
$result = $conn->query("SELECT * FROM reservations WHERE user_id='$user'");

while($row = $result->fetch_assoc()){
    echo "
    <div class='card mb-2'>
        <div class='card-body d-flex justify-content-between'>
            <div>
                <b>".$row["tarih"]."</b> - ".$row["saat"]."
            </div>
            <a href='sil.php?id=".$row["id"]."' class='btn btn-sm btn-danger'>Sil</a>
        </div>
    </div>
    ";
}
?>

</div>
</div>

</body>
</html>