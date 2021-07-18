<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>

<div class="row justify-content-center w-100" style="margin-top: 10%;">
    <div class="col col-sm-12 col-lg-10 justify-content-center">

        <p class="text-center" style="font-family:inter;font-weight:bold;color:#0A5384;font-size:3rem;margin-bottom: 5%;">Proses Surat</p>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Lokasi</th>
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
                        <!-- Tanggal (Dinamis) -->
                        <td><?= explode(',', $surat['tanggal_surat'])[$i] ?></td> 
                        <!-- Lokasi -->
                        <td><?= explode(',', $surat['kepada'])[$i] ?></td>
                        <!-- Nomor Surat -->
                        <td><?= $surat['no_surat'] ?></td>
                        <!-- Perihal -->
                        <td><?= $surat['perihal'] ?></td>
                        <!-- Tanggal Surat -->
                        <td><?= date('m-d-Y', strtotime($surat['surat_dibuat'])) ?></td>
                        <!-- Asal Surat -->
                        <td><?= $surat['asal_surat'] ?></td>
                        <!-- Keterangan -->
                        <td><?= explode(',', $surat['keterangan'])[$i] ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        <div class="col col-12 text-center" style="margin-top: 5%">
            <button type="submit" class="btn btn-primary mb-2" style="background-color:#0A5384;">KONFIRMASI</button>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>