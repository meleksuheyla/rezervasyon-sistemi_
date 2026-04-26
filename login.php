<?php
session_start();
include "db.php";

$hata = "";

if($_POST){
    $user = $_POST["username"];
    $pass = $_POST["password"];

    $result = $conn->query("SELECT * FROM users WHERE username='$user'");
    $row = $result->fetch_assoc();

    if($row && password_verify($pass, $row["password"])){
        $_SESSION["user_id"] = $row["id"];
        header("Location: dashboard.php");
        exit;
    } else {
        $hata = "❌ Hatalı giriş!";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Giriş Yap</title>

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(to right, #667eea, #764ba2);
}

.login-box {
    background: white;
    padding: 30px;
    border-radius: 15px;
    margin-top: 100px;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
}
</style>

</head>

<body>

<div class="container">

<div class="login-box col-md-4 mx-auto">

<h3 class="text-center mb-4">🔐 Giriş Yap</h3>

<?php if($hata != ""): ?>
<div class="alert alert-danger text-center">
    <?php echo $hata; ?>
</div>
<?php endif; ?>

<form method="POST">

<div class="mb-3">
    <label>Kullanıcı Adı</label>
    <input name="username" class="form-control" required>
</div>

<div class="mb-3">
    <label>Şifre</label>
    <input type="password" name="password" class="form-control" required>
</div>

<button class="btn btn-primary w-100">Giriş Yap</button>

</form>

</div>

</div>

</body>
</html>