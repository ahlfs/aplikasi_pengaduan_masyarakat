<?php $this->extend('layouts/LayoutUser'); ?>
<?= $this->section('content'); ?>

<?php $session = session() ?>

<!-- Section: Design Block -->
<section class="gradient-bg overflow-hidden">
    
    <main class="flex-shrink-0">
        <!-- Navigation-->
        
        <!-- Header-->
        
        <div class="d-flex justify-content-center my-5">
        <div class="shadow-lg card bg-dark text-white mb-3 w-50" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center ">

                
            Selamat datang <?= $session->get('username'); ?>, anda berhasil login!

            </div>
        </div>
        </div>

    </main>

    
<!-- Section: Design Block -->

<?= $this->endSection(); ?>