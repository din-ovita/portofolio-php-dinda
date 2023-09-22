<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <title>ADD MAPEL</title>
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
    <div style="width: 80%; margin-right: 2rem;" class="mt-5">
        <div class="shadow-lg p-5 rounded-3">
            <h1>UPDATE MAPEL</h1>
            <?php foreach ($mapel as $row) : ?>
                <form class="mt-5 row" action="<?php echo base_url('admin/aksi_up_mapel') ?>" method="post">
                    <input type="hidden" name="id_mapel" value="<?php echo $row->id_mapel ?>">
                    <div class="mb-3 col-6">
                        <label for="exampleInputEmail1" class="form-label">Nama Mata Pelajaran</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mapel" value="<?php echo $row->nama_mapel ?>">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="exampleInputEmail1" class="form-label">Jenis Mata Pelajaran</label>
                        <select class="form-select" aria-label="Default select example" name="jenis_mapel">
                            <option selected><?php echo $row->jenis_mapel ?></option>
                            <option value="Wajib">Wajib</option>
                            <option value="Kejuruan">Kejuruan</option>
                        </select>
                    </div>
                    <div class="mt-4 d-flex justify-content-between">
                        <a href="<?php echo base_url('admin/mapel') ?>" class="btn1 text-center" style="width: 200px;">Kembali</a>
                        <button type="submit" class="btn1" style="width: 200px;">Kirim</button>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>