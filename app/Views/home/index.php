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
    <header style="position: fixed; top: 0;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-1">
                            <a class="navbar-brand" href="#">
                                <img src="\img\1200px-Coat_of_arms_of_Jakarta.svg.png" alt="" class="img-fluid">
                            </a>                    
                        </div> 
                        <div class="col-5"></div>
                        <div class="col text-center">
                            <ul class="nav justify-content-end">
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
                <div class="col-1"></div>
            </div>
        </nav>
    </header>
    <div class="row w-100" style="margin:auto; margin-top: 6.5rem">
        <img src="\img\Kantor_Wali_Kota_Jakarta_Timur.jpg" class="img-fluid" alt="">
    </div>
    <br><br><br>
    <div class="row justify-content-center w-100">
        <div class="col col-sm-12 col-lg-6 justify-content-center">

            <div class="text-center">
                <p style="font-family:inter;font-weight:bold;color:#0A5384;font-size:3rem;">Pencarian Surat</p>
            </div>

            <form class="form-inline">
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
</body>
</html>