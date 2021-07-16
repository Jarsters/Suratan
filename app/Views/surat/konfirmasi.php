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
                    <th scope="col">Lokasi</th>
                    <th scope="col" class="col col-2">Tanggal Surat</th>
                    <th scope="col">Perihal</th>
                    <th scope="col">Asal Surat</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $length = sizeof(explode(',', $surat['kepada'])) ?>
                <?php for($i = 0; $i < $length; $i++) : ?>
                <tr>
                    <td><?= ($surat['no_surat']) ? $surat['no_surat'] : $surat['no_disposisi'] ?></td>
                    <td><?= explode(',', $surat['tanggal_surat'])[$i] ?></td>
                    <td><?= explode(',', $surat['kepada'])[$i] ?></td>
                    <td><?= date('m-d-Y', strtotime($surat['surat_dibuat'])) ?></td>
                    <td><?= $surat['perihal'] ?></td>
                    <td><?= $surat['asal_surat'] ?></td>
                    <td><?= explode(',', $surat['keterangan'])[$i] ?></td>
                </tr>
                <?php endfor; ?>
                <tr>
                    <td>3</td>
                    <td>Larry the Bird</td>
                    <td style="width: 15%;">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Thornton</td>
                </tr>
            </tbody>
        </table>
        <div class="col col-12 text-center" style="margin-top: 5%">
            <button type="submit" class="btn btn-primary mb-2" style="background-color:#0A5384;">KONFIRMASI</button>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>