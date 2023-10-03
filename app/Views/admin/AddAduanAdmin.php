<?php $this->extend('layouts/LayoutAdmin'); ?>
<?= $this->section('content'); ?>

<?php
$pesan = session()->getFlashdata('pesan');
?>


<!-- Section: Design Block -->
<section class="overflow-hidden">
    
    <?php $session = session() ?>
    <main class="flex-shrink-0">
        <!-- Navigation-->
        
        <!-- Header-->
        
        <div class="d-flex justify-content-center my-5">
        <div class="card text-black mb-3 w-50" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center ">

                <form method="post" action="/aduanAdmin/save">


                    <div class="mb-md-5 mt-md-4 pb-5">
                        <?= csrf_field(); ?>

                        <div>
                            <?php if ($pesan) { ?>
                                <p style="color:green"><?php echo $pesan ?></p>
                            <?php } ?>
                        </div>

                        <h2 class="fw-bold mb-5 text-uppercase">BUAT ADUAN</h2>
                        

                        <div class="form-outline mb-4">
                            <div class="text-start">
                            <label class="form-label" for="name">Nama</label>
                            </div>
                            <input type="text" name="name" id="name" class="form-control" value="<?= old('name'); ?>" required />
                            <?= $validation->getError('name'); ?>
                        </div>

                        <div class="form-outline mb-4">
                        <div class="text-start">
                            <label class="form-label" for="price">No. Telepon</label>
                            </div>
                            <input type="text" name="telp" id="telp" class="form-control" value="<?= old('telp'); ?>" required />
                            <?= $validation->getError('telp'); ?>
                        </div>

                        <div class="form-outline mb-4">
                        <div class="text-start">
                            <label class="form-label" for="wilayah">Wilayah</label>
                            </div>
                            <input type="text" name="wilayah" id="wilayah" class="form-control" value="<?= old('wilayah'); ?>" required />
                            <?= $validation->getError('wilayah'); ?>
                        </div>

                        <div class="form-outline mb-4">
                        <div class="text-start">
                            <label class="form-label" for="judul">Judul</label>
                            </div>
                            <input type="text" name="judul" id="judul" class="form-control" value="<?= old('judul'); ?>" required />
                            <?= $validation->getError('judul'); ?>
                        </div>

                        <div class="form-outline mb-4">
                        <div class="text-start">
                            <label class="form-label" for="keluhan">Keluhan</label>
                            </div>
                            <input type="text" name="keluhan" id="keluhan" class="form-control" value="<?= old('keluhan'); ?>" required />
                            <?= $validation->getError('keluhan'); ?>
                        </div>

                        
                        <button class="btn btn-outline-dark btn-lg px-5 mt-5 text-black text-center" type="submit">Kirim</button>

                    </div>
                </form>


            </div>
        </div>
        </div>

    </main>

    
<!-- Section: Design Block -->

<?= $this->endSection(); ?>