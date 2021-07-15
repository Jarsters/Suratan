<?= $this->extend('layout/navbar');?>

<?= $this->section('content');?>

<div class="row w-100" style="margin:auto; margin-top: 6.5rem">
    <img src="\img\Kantor_Wali_Kota_Jakarta_Timur.jpg" class="img-fluid" alt="">
</div>
<br><br><br>
<div class="row justify-content-center w-100">
    <div class="col col-sm-12 col-lg-6 justify-content-center">

        <div class="text-center">
            <p style="font-family:inter;font-weight:bold;color:#0A5384;font-size:3rem;">Pencarian Surat</p>
        </div>

        <form action="<?= base_url("/surat/search")?>" class="form-inline" method="GET">
            <div class="row justify-content-center">
                <div class="col col-8 col-lg-10 w-80">
                    <div class="input-group">
                        <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                        </span>
                        <!-- Ini namenya keyword -->
                        <input type="text" class="form-control" placeholder="Cari Berdasarkan Nomor Surat atau Tanggal" name="keyword">
                    </div>
                </div>
                <div class="col col-12 col-lg-2 text-center">
                    <button type="submit" class="btn btn-primary mb-2" style="background-color:#0A5384;">CARI</button>
                </div>
            </div>
        </form>

    </div>
</div>
<?= $this->endSection(); ?>