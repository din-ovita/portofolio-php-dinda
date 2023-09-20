<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <title>Login</title>
</head>

<style>
    body {
        background: linear-gradient(to bottom right, #dbd3ef, #8b5cf6);
        height: 100vh;
        padding: 101px 0;
    }

    .card {
        padding: 30px 50px;
    }

    label {
        color: #a78bfa;
    }

    .btn {
        background: #a78bfa;
        font-weight: 500;
        color: whitesmoke;
        width: 160px;
    }

    .btn:hover {
        background: #8b5cf6;
        color: whitesmoke;
    }

    .btn:active {
        background: #8b5cf6;
        color: whitesmoke;
    }

    .signup {
        color: #a78bfa;
    }

    .signup:hover {
        color: #8b5cf6;
    }
</style>

<body class="d-flex align-items-center justify-content-center">
    <form action="<?php echo base_url('auth/aksi_login') ?>" method="post" class="card bg-body-tertiary shadow-lg">
        <h1 class="text-center">LOGIN</h1>
        <p class="mb-3 text-center">Silahkan masuk ke akun Anda</p>
        <div>
            <label class="mb-2 fw-medium">Email</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                <input type="text" class="form-control" placeholder="Email..." name="email" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
        </div>
        <div>
            <label class="mb-2 fw-medium">Password</label>
            <div class="input-group mb-0">
                <span class="input-group-text" id="basic-addon1"> <i class="fas fa-eye-slash" onclick="togglePassword()" id="icon"></i>
                </span>
                <input type="password" class="form-control" placeholder="Password..." name="password" id="password" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
        </div>
        <button style="width: 100%;" class="btn mt-5" type="submit" name="submit">LOGIN</button>
        <div class="mt-2">
            <p class="fw-semibold fs-6">Untuk mendaftarkan akun baru -> <a href="<?php echo base_url('auth/register') ?>" class="signup">Register</a></p>
        </div>
    </form>
</body>
<script>
    function togglePassword() {
        var passwordType = document.getElementById("password");
        var icon = document.getElementById("icon");
        if (passwordType.type === "password") {
            passwordType.type = "text";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        } else {
            passwordType.type = "password";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        }
    }
</script>

</html>