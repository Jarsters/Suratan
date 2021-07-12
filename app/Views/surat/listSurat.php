<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>
<body style="height:1500px;">
    <header style="position: fixed; top: 0;width: 100%;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="col-1"></div>
                <div class="col-10 text-center">
                    <div class="row">
                        <div class="col-1 text-center">
                            <a class="navbar-brand" href="#">
                                <img src="D:\buat software bapak\Suratan\public\img\1200px-Coat_of_arms_of_Jakarta.svg.png" alt="" width="75px">
                            </a>     
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="col-5"></div>
                        <div class="col text-center">
                            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                                <ul class="nav justify-content-end">
                                    <li class="nav-item active" style="padding-top: 1.5rem;">
                                        <a href="" class="nav-link" style="color:#0A5384"><h6>Ajukan Surat</h6></a>
                                    </li>
                                    <li class="nav-item" style="padding-top: 1.5rem;">
                                        <a href="" class="nav-link active" style="color:#0A5384"><h6 style="font-weight: bolder;">Kumpulan Surat</h6></a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="fs-4 mt-1">
                                            <a href="" class="nav-link active" style="color:#0A5384">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                                                </svg>
                                                <h6>Login</h6>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
          </nav>
    </header>
    <div class="row w-100" style="margin:auto; margin-top: 6.5rem">
        <img src="D:\buat software bapak\Suratan\public\img\Kantor_Wali_Kota_Jakarta_Timur.jpg" class="img-fluid" alt="">
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
                    <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
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
                    <td>@fat</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</body>
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
</html>