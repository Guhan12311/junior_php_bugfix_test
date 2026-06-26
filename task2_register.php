<!DOCTYPE html>
<html>
<head>
    <title>Task 2 - Registration Admin Issue</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
    <div class="card">
        <h2>Task 2: Registration Data Not Showing in Admin</h2>
        <p><span class="badge">Bug:</span> Data is inserted into customers table only, but admin reads registrations table.</p>

        <form method="post" action="task2_broken_save.php">
            <input type="text" name="name" placeholder="Customer Name" required>
            <input type="email" name="email" placeholder="Customer Email" required>
            <input type="text" name="mobile" placeholder="Mobile Number" required>
            <button>Submit Broken Code</button>
        </form>

        

        <a class="btn" href="task2_admin.php">View Admin Registrations</a>
        <a class="btn btn-light" href="index.php">Back</a>
    </div>
</div>
</body>
</html>
