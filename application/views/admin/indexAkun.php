<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">Akun</h1>
                </div>
            </div>
            <hr class="divider">
            <a class="btn btn-primary btn-sm" href="<?= base_url('Admin/indexTambahDataAkun'); ?>">Tambah Akun <i
                    class="fa-solid fa-circle-plus"></i></a>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive px-3 py-3">
                            <table class="table table-striped" style="font-size:13px;" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th style="width:50px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
									foreach ($semuaData['dataAdmin'] as $key => $value) : ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $value->username; ?></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm"
                                                href="<?= base_url('Admin/indexUbahDataAkun/' . $value->id); ?>"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a class="btn btn-primary btn-sm" href="#"
                                                onclick="hapus('<?= $value->id; ?>')"><i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
function hapus(id) {
    Swal.fire({
        title: 'Hapus Data?',
        // text: "You won't be able to revert this!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(baseUrl + 'Admin/HapusData/' + 'tabel_admin/' + id + '/' + 'indexAkun');
        }
    })
}

<?php if ($this->session->flashdata('noticeDataKurang')) : ?>
Swal.fire({
    icon: 'error',
    title: 'Data Admin tersisa 1!'
    // timer: 2000
})
<?php endif; ?>
<?php if ($this->session->flashdata('noticeHapus')) : ?>
Swal.fire({
    icon: 'success',
    title: 'Data berhasil dihapus!',
    timer: 2000
})
<?php endif; ?>
<?php if ($this->session->flashdata('noticeTambah')) : ?>
Swal.fire({
    icon: 'success',
    title: 'Data berhasil ditambahkan!',
    timer: 2000
})
<?php endif; ?>
<?php if ($this->session->flashdata('noticeUbah')) : ?>
Swal.fire({
    icon: 'success',
    title
: 'Data berhasil diubah!',
    timer: 2000
})
<?php endif; ?>
</script>