<?php $this->extend('layouts/LayoutAdmin'); ?>
<?php $this->section('content'); ?>

<?php
$pesan = session()->getFlashdata('pesan');
?>

<div>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Aduan Masyarakat</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>No. Telepon</th>
                                <th>WIlayah</th>
                                <th>Judul</th>
                                <th>Keluhan</th>
                                <th>Pembuat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($aduan as $adu) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $adu['name']; ?></td>
                                    <td><?= $adu['telp']; ?></td>
                                    <td><?= $adu['wilayah']; ?></td>
                                    <td><?= $adu['judul']; ?></td>
                                    <td><?= $adu['keluhan']; ?></td>
                                    <td><?= $adu['created_by']; ?></td>
                                    <td>
                                        <a href="/aduanAdmin/edit/<?= $adu['id']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <form action="/aduanAdmin/delete/<?= $adu['id']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="bi bi-x-square"></i></button>
                                        </form>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Modal<?= $adu['id']; ?>"><i class="bi bi-info-circle-fill"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php if ($pesan) { ?>
                                <h5 style="color:green"><?php echo $pesan ?><h5>
                                    <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php foreach ($aduan as $adu) : ?>
            <div class="modal fade" id="Modal<?= $adu['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                        </div>
                        <div class="modal-body">
                            <h6>ID : <?= $adu['id']; ?></h6>
                            <h6>Nama : <?= $adu['name']; ?></h6>
                            <h6>Nomor Telepon : <?= $adu['telp']; ?></h6>
                            <h6>Wilayah : <?= $adu['wilayah']; ?></h6>
                            <h6>Judul : <?= $adu['judul']; ?></h6>
                            <h6>Keluhan : <?= $adu['keluhan']; ?></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </main>

    <?php $this->endSection(); ?>