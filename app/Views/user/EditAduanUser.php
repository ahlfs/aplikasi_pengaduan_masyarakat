<?php $this->extend('layouts/LayoutUser'); ?>
<?= $this->section('content'); ?>


<?php
$pesan = session()->getFlashdata('pesan');
?>


    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 w-75" data-aos="fade-up">
        <div class="row gx-lg-5 align-items-center mb-5 mt-5">

            <div class="col-lg-12 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass" data-aos="flip-down">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form method="post" action="/aduanUser/update/<?= $aduan['id']; ?>">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id" value="<?= $aduan['id']; ?>">
                            <div>
                                <?php if ($pesan) { ?>
                                    <p style="color:green"><?php echo $pesan ?></p>
                                <?php } ?>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="nama">Nama :</label>
                                <input type="text" name="name" id="name" class="form-control" value="<?= (old('nama')) ? old('name') : $aduan['name'] ?>" required />
                                <?= $validation->getError('name'); ?>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="nik">No. Telepon :</label>
                                <input type="text" name="telp" id="telp" class="form-control" value="<?= (old('telp')) ? old('telp') : $aduan['telp'] ?>" required />
                                <?= $validation->getError('telp'); ?>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="tanggal_lahir">Wilayah :</label>
                                <input type="text" name="wilayah" id="wilayah" class="form-control" value="<?= (old('wilayah')) ? old('wilayah') : $aduan['wilayah'] ?>" required />
                                <?= $validation->getError('wilayah'); ?>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="tanggal_lahir">Judul :</label>
                                <input type="text" name="judul" id="judul" class="form-control" value="<?= (old('judul')) ? old('judul') : $aduan['judul'] ?>" required />
                                <?= $validation->getError('judul'); ?>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="tanggal_lahir">Keluhan :</label>
                                <input type="text" name="keluhan" id="keluhan" class="form-control" value="<?= (old('keluhan')) ? old('keluhan') : $aduan['keluhan'] ?>" required />
                                <?= $validation->getError('keluhan'); ?>
                            </div>

                           

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block btn-lg mb-4">
                                Ubah Data
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->

<?= $this->endSection(); ?>