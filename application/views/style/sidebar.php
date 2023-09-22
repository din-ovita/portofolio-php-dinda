<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

<style>
    .div,
    .div1 {
        background: #a78bfa;
    }

    .nav-li {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .nav-li a {
        color: #f3f4f6;
        font-weight: 500;
        text-decoration: none;
        padding: 10px 0;
        gap: 10px;
    }

    .nav-li a:hover{
        background: #8b5cf6;
        width: 150px;
    }

    .aktif{
        background: #8b5cf6;
        /* v-500 */
        width: 150px;
    }

    .log a {
        text-decoration: none;
        display: flex;
        color: #e5e7eb; 
        /* v-100 */
        font-weight: 600;
        gap: 10px;
    }

    .log a i {
        padding-top: 5px;
    }
</style>

<div class="row flex-nowrap div" style="width: 13rem;">
    <div class="col-auto col-md-3 col-xl-2 px-sm-3 px-0 div1">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="<?php echo base_url('admin') ?>" class="d-flex  align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4 d-none d-sm-inline ">ADMIN</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
                <li class="nav-li">
                    <a href="<?php echo base_url('admin') ?>" class="<?= $menu == 'dashboard' ? 'aktif' : '' ?> align-middle d-flex  align-items-center px-2 ">
                        <i class="fas fa-palette"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-li">
                    <a href="<?php echo base_url('admin/mapel') ?>" class="<?= $menu == 'mapel' ? 'aktif' : '' ?> align-middle d-flex  align-items-center px-2">
                        <i class="fas fa-book"></i> <span>Mapel</span>
                    </a>
                </li>
                <li class="nav-li">
                    <a href="<?php echo base_url('admin/guru') ?>" class="<?= $menu == 'guru' ? 'aktif' : '' ?> align-middle d-flex  align-items-center px-2">
                        <i class="fas fa-user-tie"></i> <span>Guru</span>
                    </a>
                </li>
                <li class="nav-li">
                    <a href="<?php echo base_url('admin/kelas') ?>" class="<?= $menu == 'kelas' ? 'aktif' : '' ?> align-middle d-flex  align-items-center px-2">
                        <i class="fas fa-door-closed"></i> <span>Kelas</span>
                    </a>
                </li>
                <li class="nav-li">
                    <a href="<?php echo base_url('admin/siswa') ?>" class="<?= $menu == 'siswa' ? 'aktif' : '' ?> align-middle d-flex  align-items-center px-2">
                        <i class="fas fa-user"></i> <span>Siswa</span>
                    </a>
                </li>
            </ul>
            <div class="log">
                <a href="<?php echo base_url('auth/logout') ?>"><i class="far fa-circle"></i>
                    <p>LOGOUT</p>
                </a>
            </div>
        </div>
    </div>
</div>