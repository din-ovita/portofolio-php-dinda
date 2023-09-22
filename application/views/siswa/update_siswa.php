<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <title>UPDATE SISWA</title>
</head>

<style>
    .btn1 {
        background: #8b5cf6;
        font-weight: 500;
        color: whitesmoke;
        padding: 10px 30px;
        border-radius: 8px;
        text-decoration: none;
        border: none;
    }

    .btn1:hover {
        background: #7c3aed;
        color: white;
    }

    .btn1:active {
        background: #7c3aed;
        color: white;
    }
</style>

<body class="d-flex gap-5">
    <?php $this->load->view('style/sidebar') ?>
    <div style="width: 80%; margin-right: 2rem;" class="mt-3">
        <div class="shadow-lg p-5 rounded-3">
            <h1>UPDATE SISWA</h1>
            <?php foreach ($siswa as $row) : ?>
                <form class="mt-5" action="<?php echo base_url('admin/aksi_up_siswa') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $row->id_siswa ?>" name="id_siswa">
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" value="<?php echo $row->nama ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_lengkap">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputPassword1" class="form-label">Gender</label>
                            <select name="gender" id="gender" class="form-select">
                                <option selected value="<?php echo $row->gender ?>"><?php echo $row->gender ?></option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                            <input type="text" value="<?php echo $row->tempat_lahir ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tempat_lahir">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                            <input type="date" value="<?php echo $row->tgl_lahir ?>" class="form-control" id="exampleInputPassword1" name="tgl_lahir">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">NISN</label>
                            <input type="text" value="<?php echo $row->nisn ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nisn">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputPassword1" class="form-label">KELAS</label>
                            <select name="kelas" class="form-select">
                                <option selected value="<?php echo $row->id_kelas ?>"><?php echo tampil_full_kelas_byid($row->id_kelas) ?></option>
                                <?php foreach ($kelas as $p) : ?>
                                    <option value="<?php echo $p->id_kelas ?>"><?php echo $p->tingkat . ' ' . $p->jurusan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mt-4 d-flex justify-content-between">
                        <a href="<?php echo base_url('admin/siswa') ?>" class="btn1 text-center" style="width: 200px;">Kembali</a>
                        <button type="submit" class="btn1" style="width: 200px;">Kirim</button>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>