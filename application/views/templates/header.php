<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/favicon/2.png" />
    <meta name="theme-color" content="#e22454" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="sijabutique" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/2.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sijabutique.">
    <meta name="keywords" content="sijabutique.">
    <meta name="author" content="12-SIJ-2">
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon" />
    <title>Home Page</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body class="theme-color2 light ltr">

    <!-- header start -->
    <header class="header-style" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="<?php echo base_url('') ?>">
                                        <img style="height: 40px;" src="assets/images/sijabutique.png" class="brand img-fluid blur-up lazyload" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <nav>
                                <div class="main-navbar">
                                    <div id="mainnav">
                                        <div class="toggle-nav">
                                            <i class="fa fa-bars sidebar-bar"></i>
                                        </div>
                                        <ul class="nav-menu">
                                            <li class="back-btn d-xl-none">
                                                <div class="close-btn">
                                                    Menu
                                                    <span class="mobile-back"><i class="fa fa-angle-left"></i>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mega-menu home-menu">
                                                <a href="javascript:void(0)" class="nav-link menu-title">Home</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="nav-link menu-title">Hijab</a>
                                                <ul class="nav-submenu menu-content">
                                                    <li>
                                                        <a href="<?php echo base_url('hijab/semuahijab') ?>">Semua Hijab</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('hijab/pashmina') ?>">Pasmina</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('hijab/segiempat') ?>">Segi Empat</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('hijab/hijabinstan') ?>">Hijab Instan</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('hijab/ciput') ?>">Ciput</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu dropdown ratio_40">
                                                <a href="javascript:void(0)" class="nav-link menu-title">
                                                    <div>Pakaian</div>
                                                </a>
                                                <div class="mega-menu-container menu-content">
                                                    <div class="container-fluid">
                                                        <div class="row row-cols-5">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Semua Pakaian</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/setelan') ?>">Setelan</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/olahraga') ?>">Pakaian Olahraga</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/mukena') ?>">Mukena</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/pria') ?>">Pakaian Pria</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/anak') ?>">Pakaian Anak</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Atasan</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/tunik') ?>">Tunik</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/blus') ?>">Blus</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/kemeja') ?>">Kemeja</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/manset') ?>">Manset</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/sweater') ?>">Sweater</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Dress</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/gamis') ?>">Gamis</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/kaftan') ?>">Kaftan</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Outer</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/cardigan') ?>">Cardigan</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/blazer') ?>">Blazer</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/jaket') ?>">Jaket</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/rompi') ?>">Rompi</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Bawahan</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/celana') ?>">Celana</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo base_url('pakaian/rok') ?>">Rok</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Search</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="<?php echo base_url('search/index') ?>">Ajax
                                                                                    Search</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="nav-link menu-title">Aksesoris</a>
                                                <ul class="nav-submenu menu-content">
                                                    <li>
                                                        <a href="<?php echo base_url('aksesoris/masker') ?>">Masker</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('aksesoris/bros') ?>">Bros</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('aksesoris/kaoskaki') ?>">Kaos Kaki</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('aksesoris/kalung') ?>">Kalung</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('aksesoris/sepatu') ?>">Sepatu</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('aksesoris/tas') ?>">Tas</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('aksesoris/ikatrambut') ?>">Ikat Rambut</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('aksesoris/sajadah') ?>">Sajadah</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="nav-link menu-title">
                                                    <div class="gradient-title">Sijab Eksklusif</div>
                                                </a>
                                                <ul class="nav-submenu menu-content">
                                                    <li>
                                                        <a href="<?php echo base_url('sijab/active') ?>">Sijab Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('sijab/basic') ?>">Sijab Basic</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('sijab/daily') ?>">Sijab Daily</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('sijab/essentials') ?>">Sijab Essentials</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('sijab/infreenity') ?>">Sijab Infreenity</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('sijab/scarf') ?>">Sijab Scarf</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="menu-right">
                                <ul>
                                    <li>
                                        <div class="search-box">
                                            <i data-feather="search"></i>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown">
                                        <div class="cart-media">
                                            <i data-feather="user"></i>
                                        </div>
                                        <div class="onhover-div profile-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo base_url('access/login') ?>" class="d-block">Masuk</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url('access/signup') ?>" class="d-block">Daftar</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown wislist-dropdown">
                                        <div class="cart-media">
                                            <a href="<?php echo base_url('wishlist/index') ?>">
                                                <i data-feather="heart"></i>
                                                <span class="label label-theme rounded-pill">5</span>
                                            </a>
                                        </div>
                                        <div class="onhover-div">
                                            <a href="<?php echo base_url('wishlist/index') ?>">
                                                <div class="wislist-empty">
                                                    <i class="fab fa-gratipay"></i>
                                                    <h6 class="mb-1">Daftar keinginanmu kosong !!</h6>
                                                    <p class="font-light mb-0">Telusuri lebih lanjut.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-full">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i data-feather="search" class="font-light"></i>
                                    </span>
                                    <input type="text" class="form-control search-type" placeholder="Cari disini..">
                                    <span class="input-group-text close-search">
                                        <i data-feather="x" class="font-light"></i>
                                    </span>
                                </div>
                                <div class="search-suggestion">
                                    <ul class="custom-scroll">
                                        <li>
                                            <div class="product-cart media">
                                                <img src="assets/images/fashion/product/front/2.jpg" class="img-fluid blur-up lazyload" alt="">
                                                <div class="media-body">
                                                    <a href="javascript:void(0)">
                                                        <h6 class="mb-1">Kerudung Putih</h6>
                                                    </a>
                                                    <ul class="rating p-0">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-0 mt-1">Rp20,000</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-cart media">
                                                <img src="assets/images/fashion/product/front/1.jpg" class="img-fluid blur-up lazyload" alt="">
                                                <div class="media-body">
                                                    <a href="javascript:void(0)">
                                                        <h6 class="mb-1">Celana Hitam</h6>
                                                    </a>
                                                    <ul class="rating m-0 p-0">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-0 mt-1">Rp80,000</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-sm-none">
        <li>
            <a href="<?php echo base_url('home') ?>" class="active">
                <i data-feather="home"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('wishlist/index') ?>">
                <i data-feather="heart"></i>
                <span>Wishlist</span>
            </a>
        </li>
        <li>
            <a href="user-dashboard.html">
                <i data-feather="user"></i>
                <span>Akun</span>
            </a>
        </li>
    </div>
    <!-- mobile fix menu end -->