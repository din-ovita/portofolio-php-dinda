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

    .body .card1 {
        padding: 20px;
    }

    .body h6,
    body p {
        color: white;
    }

    .body p {
        font-weight: 600;
        font-size: 28px;
    }

    .body i {
        font-size: 70px;
        color: #e5e7eb;
    }

    .body .info {
        background: #8b5cf6;
        width: 100%;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        padding: 2px 20px;
    }

    .body a {
        text-decoration: none;
        font-weight: 500;
        color: white;
    }
</style>

<body class="d-flex gap-5">
    <?php $this->load->view('style/sidebar') ?>
    <div>
        <div class="d-flex mt-5 gap-4" style="margin-left: 1rem;">
            <div class="shadow-lg body">
                <div class="d-flex justify-content-center align-items-center gap-5 card1">
                    <div>
                        <h6>Jumlah Mapel</h6>
                        <p><?php echo $total_mapel ?></p>
                    </div>
                    <i class="fas fa-book"></i>
                </div>
                <div class="info">
                    <a href="<?php echo base_url('admin/mapel') ?>">Info Lebih Lanjut</a>
                </div>
            </div>
            <div class="shadow-lg body">
                <div class="d-flex justify-content-center align-items-center gap-5 card1">
                    <div>
                        <h6>Jumlah Guru</h6>
                        <p><?php echo $total_guru ?></p>
                    </div>
                    <i class="fas fa-user-tie"></i>
                </div>
                <div class="info">
                    <a href="<?php echo base_url('admin/guru') ?>">Info Lebih Lanjut</a>
                </div>
            </div>
            <div class="shadow-lg body">
                <div class="d-flex justify-content-center align-items-center gap-5 card1">
                    <div>
                        <h6>Jumlah Kelas</h6>
                        <p><?php echo $total_kelas ?></p>
                    </div>
                    <i class="fas fa-door-closed"></i>
                </div>
                <div class="info">
                    <a href="<?php echo base_url('admin/kelas') ?>">Info Lebih Lanjut</a>
                </div>
            </div>
            <div class="shadow-lg body">
                <div class="d-flex justify-content-center align-items-center gap-5 card1">
                    <div>
                        <h6>Jumlah Siswa</h6>
                        <p><?php echo $total_siswa ?></p>
                    </div>
                    <i class="fas fa-user"></i>
                </div>
                <div class="info">
                    <a href="<?php echo base_url('admin/siswa') ?>">Info Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>