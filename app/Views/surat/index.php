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
    <br><br><br>
    <div class="row justify-content-md-center w-100">
        <div class="col col-lg-6">
            <div class="text-center">
                <p style="font-family:inter;font-weight:bold;color:#0A5384;font-size:3rem;">Surat Masuk</p>
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
                <div class="col col-lg-2 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mb-2" style="background-color:#0A5384;">CARI</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>