<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <title>Dashboard</title>
</head>

<style>
    .body {
        border-radius: 8px;
        background: #a78bfa;
    }
</style>

<body class="d-flex gap-5">
    <?php $this->load->view('style/sidebar') ?>
    <div>
        <div class="row mt-5 gap-3" style="margin-left: 1rem;">
            <div class="col shadow-lg body">
                <div>
                    <div>
                        <p>Jumlah Mapel</p>
                        <p>10</p>
                    </div>
                    <i class="fas fa-book"></i>
                </div>
                <div>
                    <a href="">Info Lebih Lanjut</a>
                </div>
            </div>
            <div class="col shadow-lg body">
                <div>
                    <div>
                        <p>Jumlah Mapel</p>
                        <p>10</p>
                    </div>
                    <i class="fas fa-book"></i>
                </div>
                <div>
                    <a href="">Info Lebih Lanjut</a>
                </div>
            </div>
            <div class="col shadow-lg body">
                <div>
                    <div>
                        <p>Jumlah Mapel</p>
                        <p>10</p>
                    </div>
                    <i class="fas fa-book"></i>
                </div>
                <div>
                    <a href="">Info Lebih Lanjut</a>
                </div>
            </div>
            <div class="col shadow-lg body">
                <div>
                    <div>
                        <p>Jumlah Mapel</p>
                        <p>10</p>
                    </div>
                    <i class="fas fa-book"></i>
                </div>
                <div>
                    <a href="">Info Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>