<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/voxo/front-end/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Jan 2023 16:03:03 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voxo">
    <meta name="keywords" content="Voxo">
    <meta name="author" content="Voxo">
    <link rel="icon" href="../assets/images/favicon/2.png" type="image/x-icon" />
    <title>Sign Up</title>

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="../assets/css/style.css">

</head>

<body class="signup-page theme-color2">

    <!-- Sign Up Section Start -->
    <div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <div class="login-title">
                    <h2>Daftar</h2>
                </div>

                <div class="input">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name">
                    <span class="spin"></span>
                </div>

                <div class="input">
                    <label for="emailname">Alamat Email</label>
                    <input type="text" name="name" id="emailname">
                    <span class="spin"></span>
                </div>

                <div class="input">
                    <label for="pass">Kata Sandi</label>
                    <input type="password" name="pass" id="pass">
                    <span class="spin"></span>
                </div>

                <div class="input">
                    <label for="compass">Konfirmasi Kata Sandi</label>
                    <input type="password" name="pass" id="compass">
                    <span class="spin"></span>
                </div>

                <div class="button login">
                    <button onclick="location.href = '<?php echo base_url('access/signup') ?>';">
                        <span>Daftar</span>
                        <i class="fa fa-check"></i>
                    </button>
                </div>

                <p class="sign-category">
                    <span>Atau Daftar Dengan</span>
                </p>

                <div class="row gx-md-3 gy-3">
                    <div class="col-md-6">
                        <a href="www.facebook.html">
                            <div class="social-media fb-media">
                                <img src="../assets/images/inner-page/facebook.png" class="img-fluid blur-up lazyload" alt="">
                                <h6>Facebook</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="www.gmail.html">
                            <div class="social-media google-media">
                                <img src="../assets/images/inner-page/google.png" class="img-fluid blur-up lazyload" alt="">
                                <h6>Google</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <p>Sudah Mempunyai Akun? <a href="<?php echo base_url('access/login') ?>" class="theme-color">Masuk</a></p>
            </div>
        </div>
    </div>
    <!-- Sign Up Section End -->

    <div class="bg-overlay"></div>

    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- lazyload js-->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/feather/feather.min.js"></script>

    <!-- Slick js-->
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/slick/slick-animation.min.js"></script>
    <script src="../assets/js/slick/custom_slick.js"></script>

    <!-- Notify js-->
    <script src="../assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="../assets/js/theme-setting.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/home-script.js"></script>

</body>


<!-- Mirrored from themes.pixelstrap.com/voxo/front-end/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Jan 2023 16:03:03 GMT -->

</html>