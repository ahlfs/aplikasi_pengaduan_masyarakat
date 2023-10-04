<?php $this->extend('layouts/LayoutUser'); ?>
<?= $this->section('content'); ?>


<?php
$pesan = session()->getFlashdata('pesan');
?>

<!-- Section: Design Block -->
<section class="gradient-bg overflow-hidden">
    
    <main class="flex-shrink-0">
        <!-- Navigation-->
        
        <!-- Header-->
        
        <div class="d-flex justify-content-center my-5">
        <div class="shadow-lg card text-white mb-3 w-75 container-fluid d-flex text-center" style="border-radius: 1rem;">
        <div class="mb-4">
                <div class="card-body">
                    <table id="example" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No. Telepon</th>
                                <th>Wilayah</th>
                                <th>Judul</th>
                                <th>Keluhan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data as $k) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $k->name; ?></td>
                                    <td><?= $k->telp; ?></td>
                                    <td><?= $k->wilayah; ?></td>
                                    <td><?= $k->judul; ?></td>
                                    <td><?= $k->keluhan; ?></td>
                                    <td>
                                        <a href="/aduanUser/edit/<?= $k->id; ?>" class="btn btn-warning" ><i class="bi bi-pencil-square"></i></a>
                                        <form action="/aduanUser/delete/<?= $k->id; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger text-black" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="bi bi-x-square"></i></button>
                                        </form>
                                        <button type="button" class="btn btn-success text-black" data-bs-toggle="modal" data-bs-target="#Modal<?= $k->id; ?>"><i class="bi bi-info-circle-fill"></i></button>
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
        </div>

        <?php foreach ($data as $k) : ?>
            <div class="modal fade" id="Modal<?= $k->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                        </div>
                        <div class="modal-body">
                            <h6>ID : <?= $k->id; ?></h6>
                            <h6>Nama : <?= $k->name; ?></h6>
                            <h6>Nomor Telepon : <?= $k->telp; ?></h6>
                            <h6>Tanggal Lahir : <?= $k->wilayah; ?></h6>
                            <h6>Judul : <?= $k->judul; ?></h6>
                            <h6>Keluhan : <?= $k->keluhan; ?></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </main>

    
<!-- Section: Design Block -->

<?= $this->endSection(); ?>