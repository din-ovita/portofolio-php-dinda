<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Kelas</title>
</head>

<style>
    thead tr th {
        background: #8b5cf6;
        padding: 10px;
        color: white;
        border: 1px solid white;
    }

    tbody tr td {
        padding: 10px;
        background: #f3f4f6;
        border: 1px solid white;
    }

    .btn1 {
        background: #8b5cf6;
        font-weight: 500;
        color: whitesmoke;
        padding: 10px 30px;
        border-radius: 8px;
        text-decoration: none;
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
            <div class="d-flex justify-content-between align-items-center">
                <h1>Data Kelas</h1>
                <a href="<?php echo base_url('admin/add_kelas') ?>" class="btn1">ADD</a>
            </div>
            <table class="mt-4" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 20px;">No</th>
                        <th>Tingkat Kelas </th>
                        <th>Jurusan Kelas</th>
                        <th>Wali Kelas</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($kelas) : ?>
                        <?php $int = 0;
                        foreach ($kelas as $row) : $int++ ?>
                            <tr>
                                <td><?= $int ?></td>
                                <td><?= $row->tingkat ?></td>
                                <td><?= $row->jurusan ?></td>
                                <td><?php echo walikelas($row->id_walikelas) ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('admin/up_kelas/') . $row->id_kelas ?>" class="btn btn-primary">Update</a>
                                    <button onclick="del(<?php echo $row->id_kelas ?>)" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php else : ?>
                        <tr class="text-center">
                            <td colspan='5' class="p-3 fw-semibold" style="font-size: 20px;">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
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
                    window.location.href = '<?php echo base_url('admin/delete_kelas/') ?>' + id;
                }
            });
        }
    </script>
</body>

</html>