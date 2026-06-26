<?php
require "db.php";

$customer_id = $_POST['customer_id'];

if(!is_dir("uploads")){
    mkdir("uploads");
}

$file_name=time()."_".basename($_FILES['id_proof']['name']);

$path="uploads/".$file_name;

move_uploaded_file($_FILES['id_proof']['tmp_name'],$path);

$stmt=$pdo->prepare("
INSERT INTO kyc_documents
(customer_id,id_proof,created_at)
VALUES(?,?,NOW())
");

$stmt->execute([$customer_id,$path]);

echo "<link rel='stylesheet' href='assets/style.css'>";
echo "<div class='container'><div class='card'>";
echo "<h2 class='success'>KYC Uploaded Successfully</h2>";
echo "<a class='btn' href='task4_output.php'>View Upload</a>";
echo "</div></div>";
?>