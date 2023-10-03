<?php $this->extend('layouts/LayoutAdmin'); ?>
<?php $this->section('content'); ?>

<?php $session = session() ?>




    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                Selamat datang <?= $session->get('username'); ?>, anda berhasil login!<br>
                <a class="btn btn-outline-dark btn-lg px-3 fw-bolder my-5" href="/admin/add">Tambah Aduan Sebagai Admin</a>
                </div>
            </div>
        </div>
        
    </main>

    <?php $this->endSection(); ?>