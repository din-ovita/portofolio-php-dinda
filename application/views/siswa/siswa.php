<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Siswa</title>
</head>

<body class="d-flex gap-5">
    <?php $this->load->view('style/sidebar') ?>
    <div style="width: 80%; margin-right: 2rem;" class="mt-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Data Siswa</h1>
            <a href="<?php echo base_url('admin/add_siswa') ?>" class="btn btn-primary">ADD</a>
        </div>
        <table class="table table-striped mt-4" style="width: 100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Gender</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>NISN</th>
                    <th>Kelas</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $int = 0;
                foreach ($result as $row) : $int++ ?>
                    <tr>
                        <td><?= $int++ ?></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->gender ?></td>
                        <td><?= $row->tempat_lahir . ', ' . $row->tgl_lahir ?></td>
                        <td><?= $row->nisn ?></td>
                        <td><?php echo tampil_full_kelas_byid($row->id_kelas) ?></td>
                        <td class="text-center">
                            <a href="<?php echo base_url('admin/up_siswa/') . $row->id_siswa ?>" class="btn btn-primary">Update</a>
                            <button onclick="del(<?php echo $row->id_siswa ?>)" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <script>
        function del(id) {
            Swal.fire({
                title: 'Yakin Dihapus?',
                text: "Data tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '<?php echo base_url('admin/delete_siswa/') ?>' + id;
                }
            });
        }
    </script>
</body>

</html>