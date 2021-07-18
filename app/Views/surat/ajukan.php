<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center w-100" style="margin-top: 6.5rem">
    <div class="col col-lg-6">
        <div class="text-center">
            <p style="font-weight:bold;color:#0A5384;font-size:3rem;">Surat Masuk</p>
        </div>
        <form action="<?= base_url('/surat/simpan_surat') ?>" class="form-inline" method="post">
            <!-- Bagian Nomor Disposisi -->
            <div class="row">
                <div class="col col-12 col-lg-3" style="margin:auto">
                    <p class="pt-1" style="font-weight:bold;">Nomor Disposisi</p>
                </div>
                <div class="col col-12 col-lg-9">
                    <div class="input-group">
                        <!-- Ini namenya keyword -->
                        <input type="text" class="form-control" placeholder="Masukkan nomor disposisi ..." name="no_disposisi" value="<?= $posisi ?>" readonly>
                    </div>
                </div>
            </div>
            <!-- Bagian Nomor Surat -->
            <div class="row">
                <div class="col col-12 col-lg-3">
                    <p class="pt-1" style="font-weight:bold;">Nomor Surat</p>
                </div>
                <div class="col col-12 col-lg-9">
                    <div class="input-group">
                        <!-- Ini namenya keyword -->
                        <input type="text" class="form-control" placeholder="Masukkan nomor surat ..." name="nomor_surat">
                    </div>
                </div>
            </div>
            <!-- Bagian Perihal -->
            <div class="row">
                <div class="col col-12 col-lg-3">
                    <p class="pt-1" style="font-weight:bold;">Perihal</p>
                </div>
                <div class="col col-12 col-lg-9">
                    <div class="input-group">
                        <!-- Ini namenya keyword -->
                        <input type="text" class="form-control" placeholder="Masukkan perihal ..." name="perihal">
                    </div>
                </div>
            </div>
            <!-- Bagian Tanggal Surat -->
            <div class="row">
                <div class="col col-12 col-lg-3">
                    <p class="pt-1" style="font-weight:bold;">Tanggal surat</p>
                </div>
                <div class="col col-12 col-lg-9">
                    <div class="input-group">
                        <!-- Ini namenya keyword -->
                        <input type="text" class="form-control" placeholder="Masukkan tanggal dibuatnya surat ... (ex: 20-01-2020)" name="surat_dibuat">
                    </div>
                </div>
            </div>
            <!-- Bagian Asal Surat -->
            <div class="row">
                <div class="col col-12 col-lg-3">
                    <p class="pt-1" style="font-weight:bold;">Asal Surat</p>
                </div>
                <div class="col col-12 col-lg-9">
                    <div class="input-group">
                        <!-- Ini namenya keyword -->
                        <input type="text" class="form-control" placeholder="Masukkan asal surat ..." name="asal_surat">
                    </div>
                </div>
            </div>

            <!-- Bagian Button -->
            <div class="col text-center" style="padding-top: 5%;">
                <button type="submit" class="btn btn-primary mb-2" style="background-color:#0A5384;">AJUKAN</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>