<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
        <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="background-color: #fff;">
    <div class="box">
        <h1 class="text-center">Welcome, <span><?= $_SESSION['name']; ?></span>!</h1>
        <P>This is an <span>admin</span> page.</P>
        <button type="button" class="btn btn-outline-danger my-3" onclick="window.location.href='logout.php'">Logout</button>      
    </div>
        <!-- Bootstrap JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
