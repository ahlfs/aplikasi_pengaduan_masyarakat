<?php $this->extend('layouts/LayoutAdmin'); ?>
<?php $this->section('content'); ?>

<?php
$pesan = session()->getFlashdata('pesan');
?>

<div>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Akun</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Role</th>
                               
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($akundata as $a) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $a['username']; ?></td>
                                    <td><?= $a['role']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modal<?= $a['id']; ?>">Detail</button>
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
        <?php foreach ($akundata as $a) : ?>
            <div class="modal fade" id="Modal<?= $a['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6>Id : <?= $a['id']; ?></h6>
                            <h6>Username : <?= $a['username']; ?></h6>
                            <h6>Role : <?= $a['role']; ?></h6>
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