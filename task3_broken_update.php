<?php
require "db.php";

$customer_id = $_POST['customer_id'];
$payment_id = $_POST['razorpay_payment_id'];
$payment_status = $_POST['payment_status'];

// if ($payment_status == "success") {
//     $payment_status = "paid";
// }

$stmt = $pdo->prepare("
UPDATE payments 
SET razorpay_payment_id=?, status=? 
WHERE customer_id=?
");

$stmt->execute([$payment_id,$payment_status,$customer_id]);

echo "Payment updated";
?>
