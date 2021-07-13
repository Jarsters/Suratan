<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>

<div class="row justify-content-center w-100" style="margin-top: 10%;">
    <div class="col col-sm-12 col-lg-10 justify-content-center">

        <p class="text-center" style="font-family:inter;font-weight:bold;color:#0A5384;font-size:3rem;margin-bottom: 5%;">Proses Surat</p>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col" class="col col-2">Nomor Disposisi</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col" class="col col-2">Tanggal Surat</th>
                    <th scope="col">Perihal</th>
                    <th scope="col">Asal Surat</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td style="width: 15%;">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </td>
                    <td>@mdo</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
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