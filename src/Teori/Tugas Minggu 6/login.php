<?php
session_start();

$valid_username = "davdchndra";
$valid_password = "12345678";

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $nama_lengkap = $_POST['nama_lengkap'];

    if ($user === $valid_username && $pass === $valid_password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $user;
        $_SESSION['nama_lengkap'] = $nama_lengkap;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <style>
    body {
        font-family: monospace;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100dvh;
    }

    .atas {
        background-color: #465c88;
        color: white;
    }

    .bawah {
        background-color: white;
        border: 2px solid black;
    }

    .btn-style {
        border: 1px solid #465c88;
    }

    .btn-style:hover {
        color: white;
        border: 1px solid #465c88;
        background-color: #465c88;
    }
    </style>
    <title>Login - Minggu 6 (PHP)</title>
</head>

<body>
    <div class="container p-4">
        <div class="atas rounded-4 mb-4">
            <h3 class="px-5 py-3">Login - <span class="fw-bold">PHP</span></h3>
        </div>
        <div class="bawah p-5 rounded-4">
            <?php if(isset($error)) { echo "<p class='error mb-3 text-danger fw-bold'>$error</p>"; } ?>
            <h4 class="mb-4 fw-bold">Login</h4>
            <form class="row g-3" action="" method="post">
                <div class="col-12">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                        placeholder="Masukkan Nama Lengkap Anda" />
                    <div id="feedback_nama_lengkap"></div>
                </div>

                <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username"
                        placeholder="Masukkan username Anda" />
                    <div id="feedback_username"></div>
                </div>

                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukkan Password Anda" />
                    <div id="feedback_password"></div>
                </div>

                <div class="col-auto">
                    <input type="submit" name="login" value="Login" class="btn btn-style w-100">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>