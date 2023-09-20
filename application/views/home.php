<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title><?php echo $title ?></title>
</head>

<style>
    img {
        width: 34rem;
        height: 18rem;
    }

    body {
        background: #f9fafb;
        padding: 180px 100px;
    }

    .title{
        color: #a78bfa;
    }
    .btn {
        background: #a78bfa;
        font-weight: 500;
        color: whitesmoke;
        width: 160px;
    }
    .btn:hover{
        background: #8b5cf6;
        color: whitesmoke;
    }
    .btn:active{
        background: #8b5cf6;
        color: whitesmoke;
    }
</style>

<body class="d-flex justify-center align-items-center gap-5">
    <div>
        <p class="mb-0 fs-5 title">Sistem Infomasi Sekolah</p>
        <h1 class="fw-bold">Mengelola data sekolah lebih mudah dan efisien</h1>
        <p style="text-align: justify"  class="lh-sm fw-medium mt-4">Solusi penyimpanan data modern, efisien, dan aman. Keamanan data kuat untuk melindungi informasi penting. Sistem manajemen data terpadu akan memungkinkan proses administratif menjadi lebih efisien.</p>
        <a href="<?php echo base_url('auth'); ?>" class="btn mt-4">Get Strated</a>
    </div>
    <div>
        <img src="https://www.unika.ac.id/wp-content/uploads/2022/10/ilmukomunikasi-title-768x455.png">
    </div>
</body>

</html>