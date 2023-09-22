<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <title>UPDATE KELAS</title>
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
            <h1>UPDATE KELAS</h1>
            <?php foreach ($kelas as $row1) : ?>
                <form class="mt-5 row" action="<?php echo base_url('admin/aksi_up_kelas') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $row1->id_kelas ?>" name="id_kelas">
                    <div class="mb-3 col-6">
                        <label for="exampleInputEmail1" class="form-label">Tingkat Kelas</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tingkat" placeholder="Tingkat kelas.." value="<?php echo $row1->tingkat ?>">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="exampleInputEmail1" class="form-label">Jurusan Kelas</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jurusan" placeholder="Jurusan kelas.." value="<?php echo $row1->jurusan ?>">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="exampleInputPassword1" class="form-label">Walikelas</label>
                        <select name="id_walikelas" id="gender" class="form-select">
                            <option selected value="<?php echo $row1->id_walikelas?>"><?php echo walikelas($row1->id_walikelas) ?></option>
                            <?php foreach ($res as $row) : ?>
                                <option value="<?php echo $row->id_guru ?>"><?php echo $row->nama_guru ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mt-4 d-flex justify-content-between">
                        <a href="<?php echo base_url('admin/kelas') ?>" class="btn1 text-center" style="width: 200px;">Kembali</a>
                        <button type="submit" class="btn1" style="width: 200px;">Kirim</button>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>