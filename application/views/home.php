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
        width: 36rem;
        height: 20rem;
        margin-top: 10rem;
    }
</style>

<body class="d-flex justify-center align-items-center px-5 gap-5">
    <div>
        <img src="https://www.unika.ac.id/wp-content/uploads/2022/10/ilmukomunikasi-title-768x455.png">
    </div>
    <div style="margin-top: 10rem;">
        <h1 >Let's Join With Us</h1>
        <p style="text-align: justify; font-weight:semibold;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga atque, eligendi quisquam in excepturi provident voluptatum soluta commodi deserunt quas quaerat quidem iste at suscipit, voluptatem corrupti illum reprehenderit odio?</p>
        <a href="<?php echo base_url('auth'); ?>" class="btn btn-primary mt-5">Get Strated -></a>
    </div>
</body>

</html>