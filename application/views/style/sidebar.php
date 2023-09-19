<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

<div class="row flex-nowrap bg-primary-subtle" style="width: 13rem;">
    <div class="col-auto col-md-3 col-xl-2 px-sm-3 px-0 bg-primary-subtle">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4 d-none d-sm-inline text-dark">ADMIN</span>
            </a>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/siswa') ?>" class="nav-link align-middle d-flex justify-content-center align-items-center px-0">
                        <i class="fas fa-user"></i> <span class="ms-1 d-none d-sm-inline">Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/guru') ?>" class="nav-link px-0 d-flex justify-content-center align-items-center align-middle">
                        <i class="fas fa-user-tie"></i> <span class="ms-1 d-none d-sm-inline">Guru</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/kelas') ?>" class="nav-link px-0 d-flex justify-content-center align-items-center align-middle">
                        <i class="fas fa-door-closed"></i> <span class="ms-1 d-none d-sm-inline">Kelas</span> </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/mapel') ?>" class="nav-link px-0 d-flex justify-content-center align-items-center align-middle">
                        <i class="fas fa-door-closed"></i> <span class="ms-1 d-none d-sm-inline">Mapel</span> </a>
                </li>
            </ul>
            <hr>
            <div class="pb-4">
                <a href="">LOGOUT</a>
            </div>
        </div>
    </div>
</div>