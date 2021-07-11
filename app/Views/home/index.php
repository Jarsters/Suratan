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
    <header>
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
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <img src="\img\icon_login2.png" alt="" class="img-fluid">
                                        <h6>Login</h6>
                                    </a>
                                </li>
                            </ul>                        
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </nav>
    </header>
    <div class="row">
        <img src="\img\Kantor_Wali_Kota_Jakarta_Timur.jpg" class="img-fluid" alt="">
    </div>
    <br><br><br>
    <div class="row justify-content-md-center">
        <!-- <div class="col col-lg-2"></div> -->
        <div class="col col-lg-6">
            <div class="text-center">
                <p style="font-family:inter;font-weight:bold;color:#0A5384;font-size:3rem;">Pencarian Surat</p>
            </div>
            <form class="form-inline">
                <div class="row">
                    <div class="col col-lg-10">
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
                    <div class="col col-lg-2">
                        <button type="submit" class="btn btn-primary mb-2" style="background-color:#0A5384;">CARI</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- <div class="col col-lg-2"></div> -->
    </div>
</body>
</html>