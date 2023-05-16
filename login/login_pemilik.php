<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Pemilik kos</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles_login.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XA20rr3fBc6KYvK3Z9T/38+TmWJf8btdq3ygsQ2Fj+4W7Jkzv0EZP7oOzwZIuNEnzkBxOxJ+7Kf1I/yYV7L8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-Vc2V+94uGYlCjV7JYtY+8V7OhuJzZ+OcGkjtlNjNfBvmJpPz6gz/ajD5GhQ5us5uyJvUmQ9lEsoO+HnwblJx0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body id="page-top">
    <!-- Navigation-->
    <!-- Masthead-->
    <header class="masthead text-white ">
        <div class="container d-flex  flex-column">
            <!-- Masthead Avatar Image-->
            <img class=" alt=" ..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0"><button class="arrow-button">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </button>
                Login Pemilik Kos</h1>
            <!-- Icon Divider-->

            <!-- Masthead Subheading-->
            <form action="submit-form.php" method="post">

                <label for="phone-number">Nomor Handphone</label> <br>
                <div class="phone-number1" role="textbox" aria-required="true" aria-invalid="false">
                    <input type="tel" name="Nomor Handphone" maxlength="14" placeholder="Nomor Handphone" required="required" class="phone-number2">
                </div>
                <br>

                <label for="phone-number">Password</label> <br>
                <div class="phone-number1" role="textbox" aria-required="true" aria-invalid="false">
                    <input type="password" name="Password" maxlength="14" placeholder="Masukkan Password" required="required" class="phone-number2">
                    <span class="password-toggle1">
                        <!-- <i class="fa fa-eye-slash"></i> -->
                    </span>
                </div><br>



                <button class="divider-custom-daftar" type="submit" value="Login">Login</button>
            </form><br>

            <p> Belum punya akun Mamikos? <a class="rata-kan-satu" href="../register/registrasi_pemilik.php">Daftar sekarang</a>
            </p>
            <p class=" rata-kan-dua">Lupa password?</p>

        </div>
    </header>
    <!-- Portfolio Section-->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>