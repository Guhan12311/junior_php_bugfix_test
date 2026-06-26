<?php
require "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$stmt = $pdo->prepare("
INSERT INTO customers
(name,email,mobile,created_at)
VALUES(?,?,?,NOW())
");

$stmt->execute([$name,$email,$mobile]);

$customer_id = $pdo->lastInsertId();

$stmt = $pdo->prepare("
INSERT INTO registrations
(customer_id,name,email,mobile,status,created_at)
VALUES(?,?,?,?,?,NOW())
");

$stmt->execute([
    $customer_id,
    $name,
    $email,
    $mobile,
    "Registered"
]);

echo "<link rel='stylesheet' href='assets/style.css'>";
echo "<div class='container'><div class='card'>";
echo "<h2 class='success'>Registration Successful</h2>";
echo "<a class='btn' href='task2_admin.php'>View Admin</a>";
echo "</div></div>";
?>