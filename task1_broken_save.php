<?php
require "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "INSERT INTO customers
(name,email,password,created_at)
VALUES (?,?,?,NOW())";

$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $password]);

echo "<link rel='stylesheet' href='assets/style.css'>";
echo "<div class='container'><div class='card'>";
echo "<h2 class='success'>Registration Successful</h2>";
echo "<a class='btn' href='task1_register.php'>Back</a>";
echo "</div></div>";
?>