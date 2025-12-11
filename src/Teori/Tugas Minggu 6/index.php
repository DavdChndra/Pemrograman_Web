<?php
session_start();

// Cek login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>
    <title>Dashboard - Minggu 6 (PHP)</title>
    <style>
    body {
        font-family: monospace;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    </style>
</head>

<body>
    <div>
        <h1>Selamat datang, <span class="fw-bold"><?php echo $_SESSION['nama_lengkap']; ?>!</span></h1>
        <h2>Username: <?php echo $_SESSION['username']; ?></h2>
        <p>Ini adalah halaman dashboard.</p>
        <a href="logout.php" class="btn btn-outline-danger">Logout</a>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI' crossorigin='anonymous'>
    </script>
</body>

</html>