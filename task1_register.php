<!DOCTYPE html>
<html>
<head>
    <title>Task 1 - Registration SQL Error</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
    <div class="card">
        <h2>Task 1: SQL Duplicate Column Error</h2>
        <p><span class="badge">Bug:</span> Registration fails because password column is added twice in INSERT query.</p>

        <form method="post" action="task1_broken_save.php">
            <input type="text" name="name" placeholder="Enter Name" required>
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit">Submit Broken Code</button>
        </form>

        

        <a class="btn btn-light" href="index.php">Back</a>
    </div>
</div>
</body>
</html>
