<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ajukan Surat</title>
</head>
<body>
    <header>
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
                                        <a href="" class="nav-link active" style="color:#0A5384"><h6 style="font-weight: bolder;">Ajukan Surat</h6></a>
                                    </li>
                                    <li class="nav-item" style="padding-top: 1.5rem;">
                                        <a href="" class="nav-link active" style="color:#0A5384"><h6>Kumpulan Surat</h6></a>
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
    </header><hr>
    <br><br><br>
    
    <div class="row align-items-center">
        <div class="col col-lg-6">
            <div class="text-center">
                <p style="font-weight:bold;color:#0A5384;font-size:3rem;">Surat Masuk</p>
            </div>
            <form class="form-inline">
                <!-- Bagian Nomor Disposisi -->
                <div class="row">
                    <div class="col col-md-12 col-lg-3">
                        <p class="pt-1">Nomor Disposisi</p>
                    </div>
                    <div class="col col-md-12 col-lg-9">
                        <div class="input-group">
                            <!-- Ini namenya keyword -->
                            <input type="text" class="form-control" placeholder="Masukkan nomor disposisi ..." name="no_disposisi">
                        </div>
                    </div>
                </div>
                <!-- Bagian Perihal -->
                <div class="row">
                    <div class="col col-md-12 col-lg-3">
                        <p class="pt-1">Perihal</p>
                    </div>
                    <div class="col col-md-12 col-lg-9">
                        <div class="input-group">
                            <!-- Ini namenya keyword -->
                            <input type="text" class="form-control" placeholder="Masukkan perihal ..." name="perihal">
                        </div>
                    </div>
                </div>
                <!-- Bagian Asal Surat -->
                <div class="row">
                    <div class="col col-md-12 col-lg-3">
                        <p class="pt-1">Asal Surat</p>
                    </div>
                    <div class="col col-md-12 col-lg-9">
                        <div class="input-group">
                            <!-- Ini namenya keyword -->
                            <input type="text" class="form-control" placeholder="Masukkan asal surat ..." name="asal_surat">
                        </div>
                    </div>
                </div>
                <!-- Bagian Tanggal Surat -->
                <div class="row">
                    <div class="col col-md-12 col-lg-3">
                        <p class="pt-1">Tanggal surat</p>
                    </div>
                    <div class="col col-md-12 col-lg-9">
                        <div class="input-group">
                            <!-- Ini namenya keyword -->
                            <input type="text" class="form-control" value="<?= date('d-m-Y') ?>" name="tanggal_surat" disabled>
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
</body>
</html>