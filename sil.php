<?php
include "db.php";

$id = $_GET["id"];

$conn->query("DELETE FROM reservations WHERE id='$id'");

header("Location: dashboard.php");
?>