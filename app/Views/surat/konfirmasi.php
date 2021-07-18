<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>

<div class="row justify-content-center w-100" style="margin-top: 10%;">
    <div class="col col-sm-12 col-lg-10 justify-content-center">

        <p class="text-center" style="font-family:inter;font-weight:bold;color:#0A5384;font-size:3rem;margin-bottom: 5%;">Proses Surat</p>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col" class="col col-2"><?= ($surat['no_surat']) ? 'Nomor Surat' : 'Nomor Disposisi' ?></th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Lokasi Surat</th>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col">Perihal</th>
                    <th scope="col" class="col col-2">Tanggal Surat</th>
                    <th scope="col">Asal Surat</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $length = sizeof(explode(',', $surat['kepada'])) ?>
                <?php for ($i = 0; $i < $length; $i++) : ?>
                    <tr>
                        <td><?= ($surat['no_surat']) ? $surat['no_surat'] : $surat['no_disposisi'] ?></td>
                        <td><?= explode(',', $surat['tanggal_surat'])[$i] ?></td>
                        <td><?= explode(',', $s['kepada'])[$length]; ?></td>
                        <td><?= $surat['perihal'] ?></td>
                        <td><?= date('m-d-Y', strtotime($surat['surat_dibuat'])) ?></td>
                        <td><?= $surat['asal_surat'] ?></td>
                        <td><?= explode(',', $surat['keterangan'])[$i] ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>

        <!-- form tujuan -->
        <div class="row justify-content-center w-100" style="margin-top: 6.5rem">
            <div class="col col-lg-6">
                <h2 class="text-center mb-4" style="color:#0A5384;">Silahkan Konfirmasi</h2>
                <form action="" class="form-inline" method="post">
                    <!-- Bagian Lokasi Surat -->
                    <div class="row">
                        <div class="col col-12 col-lg-3">
                            <p class="pt-1" style="font-weight:bold;">Lokasi Surat</p>
                        </div>
                        <div class="col col-12 col-lg-9">
                            <div class="input-group">
                                <!-- Ini namenya keyword -->
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pilih</option>
                                    <option value="Tata Usaha">Tata Usaha</option>
                                    <option value="Seksi 1">Seksi 1</option>
                                    <option value="Seksi 2">Seksi 2</option>
                                    <option value="Seksi 3">Seksi 3</option>
                                    <option value="Seksi 4">Seksi 4</option>
                                    <option value="Seksi 5">Seksi 5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Bagian Keterangan -->
                    <div class="row">
                        <div class="col col-12 col-lg-3">
                            <p class="pt-1" style="font-weight:bold;">Keterangan</p>
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
                        <button type="submit" class="btn btn-primary mb-2" style="background-color:#0A5384;">KONFIRMASI</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>