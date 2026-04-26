<?php
$conn = new mysqli("localhost", "root", "", "rezervasyon");

if($conn->connect_error){
    die("Bağlantı hatası");
}
?>