<!DOCTYPE html>
<html>
<head>
<title>Task 4 - KYC Upload</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container"><div class="card">
<h2>Task 4: KYC Upload Path Issue</h2>
<p><span class="badge">Bug:</span> File path issue and missing validation causes upload failure or forbidden output.</p>

<form method="post" action="task4_broken_upload.php" enctype="multipart/form-data">
    <input type="number" name="customer_id" placeholder="Customer ID eg: 1" value="1" required>
    <input type="file" name="id_proof" required>
    <button>Submit Broken Code</button>
</form>



<a class="btn" href="task4_output.php">View KYC Output</a>
<a class="btn btn-light" href="index.php">Back</a>
</div></div>
</body>
</html>
