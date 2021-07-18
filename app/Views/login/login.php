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
                <form action="<?= base_url('/auth/auth') ?>" class="form-inline" method="POST">
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
                                <span class="input-group-text" id="basic-addon1">
                                    <svg style="cursor: pointer;" onclick="showHide()" id="togglePassword" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                        <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"></path>
                                        <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"></path>
                                        <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"></path>
                                    </svg>
                                </span>
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
    <script>
        function showHide() {
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementsByName('password')[0];
            if (password.type === "password") {
                password.type = "text";
                togglePassword.innerHTML = '<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>'
            } else {
                password.type = "password";
                togglePassword.innerHTML = '<path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"></path><path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"></path><path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"></path>'
            }
            // toggle the type attribute
            // const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            // password.setAttribute('type', type);
            // toggle the eye / eye slash icon
            // this.classList.toggle('bi-eye');
        }
    </script>
</body>

</html>