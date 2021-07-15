<?= $this->extend('layout/navbar');?>

<?= $this->section('content');?>

<div class="row w-100" style="margin:auto; margin-top: 6.5rem">
    <img src="\img\Kantor_Wali_Kota_Jakarta_Timur.jpg" class="img-fluid" alt="">
</div>
<br><br><br>
<div class="row justify-content-center w-100">
    <div class="col col-sm-12 col-lg-10 justify-content-center">

        <p style="font-family:inter;font-weight:bold;color:#0A5384;font-size:3rem;">Kumpulan Surat</p>

        <div class="col col-8 col-lg-5">
            <div class="input-group">
                <button type="button" class="btn btn-primary" style="margin-right: 2%;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                        <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
                    </svg>
                    Filter
                </button>
                
                <span class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                </svg>
                </span>
                <!-- Ini namenya keyword -->
                <input type="text" class="form-control" id="myInput" onkeyup="filterFunc()" placeholder="Cari Berdasarkan Nomor Disposisi atau Tanggal" name="keyword">
            </div>
        </div>

        <table class="table" id="myTable">
            <thead>
                <tr>
                <th scope="col">Nomor Disposisi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Tanggal Surat</th>
                <th scope="col">Perihal</th>
                <th scope="col">Asal Surat</th>
                <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($surat as $s) : ?>
                <?php $length = sizeof(explode(',', $s['tanggal_surat'])) - 1; ?>
                <tr>
                <td><a href="surat/lihat/<?= $s['no_disposisi']?>"><?= $s['no_disposisi']?></a></td>
                <td><?= date('d-m-Y', strtotime($s['surat_dibuat']))?></td>
                <td><?= explode(',', $s['kepada'])[$length]; ?></td>
                <td><?= explode(',', $s['tanggal_surat'])[$length]; ?></td>
                <td><?= $s['perihal']?></td>
                <td><?= $s['asal_surat']?></td>
                <td><?= explode(',', $s['keterangan'])[$length]; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<script>
    function filterFunc() {
      // Declare variables
      var input, filter, table, tr, td1, td2, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td1 = tr[i].getElementsByTagName("td")[0];
        td2 = tr[i].getElementsByTagName("td")[1];
        if (td1) {
          txtValue = td1.textContent || td1.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
        // else if (td2) {
        //   txtValue = td2.textContent || td2.innerText;
        //   if (txtValue.toUpperCase().indexOf(filter) > -1) {
        //     tr[i].style.display = "";
        //   } else {
        //     tr[i].style.display = "none";
        //   }
        // }
      }
    }
</script>
<?= $this->endSection(); ?>