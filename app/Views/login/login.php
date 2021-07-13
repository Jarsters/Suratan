<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="background-image: url('/img/background_login.jpg');
    background-size: 100% 100%;background-attachment: fixed;">
    <div class="container">
        <div class="row" style="margin: 0 auto 100px;padding: 10px;margin-top: 20%;
            text-align: center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24); max-width: 400px;">
            <span class="border" style="background-color: white; height: 350px;">
                <br><br>
                <h2 style="color: #0A5384;font-weight: bold;">Login</h2>
                <br>
                <form action="/auth/auth" class="form-inline" method="POST">
                    <!-- Bagian Username -->
                    <div class="row">
                        <div class="col col-md-12 col-lg-3">
                            <p class="pt-1">Username</p>
                        </div>
                        <div class="col col-md-12 col-lg-9">
                            <div class="input-group">
                                <!-- Ini namenya keyword -->
                                <input type="text" class="form-control" placeholder="Username" name="username">
                            </div>
                        </div>
                    </div>
                    <!-- Bagian Password -->
                    <div class="row">
                        <div class="col col-md-12 col-lg-3">
                            <p class="pt-1">Password</p>
                        </div>
                        <div class="col col-md-12 col-lg-9">
                            <div class="input-group">
                                <!-- Ini namenya keyword -->
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>
                    </div>
    
                    <!-- Bagian Button -->
                    <div class="col text-center" style="padding-top: 5%;">
                        <button type="submit" class="btn btn-primary mb-2" style="background-color:#0A5384;">MASUK</button>
                    </div>
                </form>
            </span>
        </div>
    </div>
</body>
</html>