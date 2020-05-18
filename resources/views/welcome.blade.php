<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Soraya Web Profile - Company Profile By Abd. Asis</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/') }}/frontend/assets/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/frontend/assets/css/bootstrap.min.css" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/frontend/assets/css/materialdesignicons.min.css" />

        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/frontend/assets/css/style.css" />

    </head>

    <body>

        <!--Navbar Start-->
        @include('frontend.includes.navbar')
        <!-- Navbar End -->

        <!-- home start -->
        <section class="bg-home bg-gradient" id="home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="home-title mo-mb-20">
                                    <h1 class="mb-4 text-white">Soraya Adalah Perusahaan yang bergerak dibidang</h1>
                                    <p class="text-white-50 home-desc mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore praesentium voluptas corporis, pariatur tempora blanditiis? Eaque rem odio sint officia ratione! Nemo cum ut atque reiciendis eum aliquid, tempore ab! </p>
                                    <div class="subscribe">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control" placeholder="Enter your e-mail address">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="submit" class="btn btn-primary">Subscribe Us</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-7">
                                <div class="home-img position-relative">
                                    <img src="{{ url('/') }}/frontend/assets/images/products/panel_surya.jpg" alt="" class="home-first-img">
                                    {{-- <img src="{{ url('/') }}/frontend/assets/images/home-img.png" alt="" class="home-second-img mx-auto d-block">
                                    <img src="{{ url('/') }}/frontend/assets/images/home-img.png" alt="" class="home-third-img"> --}}
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
            </div>
        </section>
        <!-- home end -->

        <!-- clients start -->
        <section>
            <div class="container-fluid">
                <div class="clients p-4 bg-white">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="client-images">
                                <img src="{{ url('/') }}/frontend/assets/images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-images">
                                <img src="{{ url('/') }}/frontend/assets/images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-images">
                                <img src="{{ url('/') }}/frontend/assets/images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-images">
                                <img src="{{ url('/') }}/frontend/assets/images/clients/6.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div>
            </div> <!-- end container-fluid -->
        </section>
        <!-- clients end -->

        <!-- features start -->
        <section class="section-sm" id="features">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h3 class="mb-3">APA YANG KITA TAWARKAN</h3>
                            <p class="text-muted">Kami menetapkan standar untuk layanan pelanggan surya</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-box shadow">
                            <div class="features-img mb-4">
                                <img src="{{ url('/') }}/frontend/assets/images/icons/panel-surya.png" alt="">
                            </div>
                            <h4 class="mb-2">PANEL SURYA</h4>
                            <p class="text-muted">link penuh untuk panel surya monocrystallin dan polycrystalline</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box shadow">
                            <div class="features-img mb-4 ">
                                <img src="{{ url('/') }}/frontend/assets/images/icons/tata-surya.png" alt="">
                            </div>
                            <h4 class="mb-2">TATA SURYA</h4>
                            <p class="text-muted">Sistem tata surya sunwa mengandung semua komponen yang</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box shadow">
                            <div class="features-img mb-4 ">
                                <img src="{{ url('/') }}/frontend/assets/images/icons/solar-inverter.png" alt="">
                            </div>
                            <h4 class="mb-2">SOLAR INVERTER</h4>
                            <p class="text-muted">matahari matahari matarhari menyedian grid (grid terikat)</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->
        </section>
        <!-- features end -->

        {{-- section about  --}}
        <section class="about-section pb-5 pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-box about-box">
                            <h1>TENTANG SUNWAY SOLAR</h1>
                            <p>Hefei Sunway Solar Energy Tech. Co., Ltd. Grup sunway adalah perusahaan grup berkembang internasional, beragam, dan komprehensif yang berkomitmen untuk menyediakan bahan makanan, produk sekali pakai medis dan sistem pembangkit listrik pv secara global. sunway solar sebagai anak perusahaan dari kelompok sunway, yang mengkhususkan diri dalam r & ...</p>
                            <button class="btn btn-outline-light btn-lg btn-rounded">BACA LEBIH BANYAK</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- end section about  --}}

        <!-- available demos start -->
        <section class="section bg-light" id="demo">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title text-center mb-3">
                            <h3>PRODUCT KAMI</h3>
                            <p class="text-muted">At solmen va esser necessi far uniform grammatica.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">


                            <div class="bg-light">
                                <img src="{{ url('/') }}/frontend/assets/images/products/produk-1.jpg"  alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-15 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">3kw dari sistem tenaga surya grid untuk digunakan di rumah</a> </h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">


                            <div class="bg-light">
                                <img src="{{ url('/') }}/frontend/assets/images/products/produk-2.jpg"  alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-15 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">dari grid sistem tenaga surya 1kw</a> </h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>

                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">


                            <div class="bg-light">
                                <img src="{{ url('/') }}/frontend/assets/images/products/produk-3.jpg"  alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-15 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">panel surya monocrystalline seri 72 sel</a> </h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>

                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">
                            <div class="bg-light shadow-sm">
                                <img src="{{ url('/') }}/frontend/assets/images/products/produk-4.jpg"  alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-15 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">panel surya polikristalin 72 sel seri</a> </h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>

                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                </div>

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">


                            <div class="bg-light">
                                <img src="{{ url('/') }}/frontend/assets/images/products/produk-5.jpg"  alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-15 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">1kw solar pada sistem jaringan listrik untuk digunakan di rumah</a> </h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">


                            <div class="bg-light">
                                <img src="{{ url('/') }}/frontend/assets/images/products/produk-6.jpg"  alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-15 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Sistem grid tenaga surya 20kw terikat untuk penggunaan komersial</a> </h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>

                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">


                            <div class="bg-light">
                                <img src="{{ url('/') }}/frontend/assets/images/products/produk-7.jpg"  alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-15 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Sistem grid surya tenaga surya 5kw untuk digunakan di rumah</a> </h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>

                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">
                            <div class="bg-light shadow-sm">
                                <img src="{{ url('/') }}/frontend/assets/images/products/produk-8.jpg"  alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-15 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">5kw perumahan dari jaringan sistem tenaga surya</a> </h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>

                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->
            </div> <!-- end container-fluid -->
        </section>
        <!-- available demos end -->

        <!-- features start -->
        <section class="section">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h3>OUR PROJECT</h3>
                            <p class="text-muted">The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="demo-box bg-white mt-4 p-2">
                            <a href="#" class="text-dark">
                                <img src="{{ url('/') }}/frontend/assets/images/products/proyek-1.jpg" alt="" class="img-fluid mx-auto d-block">
                                <div class="p-3 text-center">
                                    <h5 class="mb-0">{{ strtoupper('rumah menggunakan 2kw dari sistem tenaga surya grid di Sri Lanka') }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="demo-box bg-white mt-4 p-2">
                            <a href="#" class="text-dark">
                                <img src="{{ url('/') }}/frontend/assets/images/products/jaringan_sistem.jpg" alt="" class="img-fluid mx-auto d-block">
                                <div class="p-3 text-center">
                                    <h5 class="mb-0">{{ strtoupper('rumah menggunakan 2kw dari sistem tenaga surya grid di Sri Lanka') }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="demo-box bg-white mt-4 p-2">
                            <a href="#" class="text-dark">
                                <img src="{{ url('/') }}/frontend/assets/images/products/proyek-3.jpg" alt="" class="img-fluid mx-auto d-block">
                                <div class="p-3 text-center">
                                    <h5 class="mb-0">{{ strtoupper('rumah menggunakan 2kw dari sistem tenaga surya grid di Sri Lanka') }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="demo-box bg-white mt-4 p-2">
                            <a href="#" class="text-dark">
                                <img src="{{ url('/') }}/frontend/assets/images/products/proyek-5.jpg" alt="" class="img-fluid mx-auto d-block">
                                <div class="p-3 text-center">
                                    <h5 class="mb-0">{{ strtoupper('rumah menggunakan 2kw dari sistem tenaga surya grid di Sri Lanka') }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="demo-box bg-white mt-4 p-2">
                            <a href="#" class="text-dark">
                                <img src="{{ url('/') }}/frontend/assets/images/products/proyek-4.jpg" alt="" class="img-fluid mx-auto d-block">
                                <div class="p-3 text-center">
                                    <h5 class="mb-0">{{ strtoupper('rumah menggunakan 2kw dari sistem tenaga surya grid di Sri Lanka') }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="demo-box bg-white mt-4 p-2">
                            <a href="#" class="text-dark">
                                <img src="{{ url('/') }}/frontend/assets/images/products/proyek-6.jpg" alt="" class="img-fluid mx-auto d-block">
                                <div class="p-3 text-center">
                                    <h5 class="mb-0">{{ strtoupper('rumah menggunakan 2kw dari sistem tenaga surya grid di Sri Lanka') }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- features end -->

        <!-- testimonial start -->
        <section class="section bg-light" id="clients">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                            <h3>Kata Klien</h3>
                            <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur libero ducimus consequuntur delectus et eius dolore </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testi-box mt-4">
                            <div class="testi-desc bg-white p-4">
                                <p class="text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ad tenetur alias totam fuga molestiae laborum nihil similique voluptate, sequi tempore? Distinctio tenetur neque unde? Neque modi iure non provident.</p>
                            </div>
                            <div class="p-4">
                                <div class="testi-img float-left mr-2">
                                    <img src="{{ url('/') }}/frontend/assets/images/testi/img-2.png" alt="" class="rounded-circle">
                                </div>
                                <div>
                                    <h5 class="mb-0">Abd. Asis</h5>
                                    <p class="text-muted m-0"><small>- Citra land</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="testi-box mt-4">
                            <div class="testi-desc bg-white p-4">
                                <p class="text-muted mb-0">" Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit quidem ea ipsa asperiores quia, beatae, excepturi neque in culpa expedita velit, quisquam harum inventore quis repudiandae natus nostrum blanditiis minima! "</p>
                            </div>
                            <div class="p-4">
                                <div class="testi-img float-left mr-2">
                                    <img src="{{ url('/') }}/frontend/assets/images/testi/img-1.png" alt="" class="rounded-circle">
                                </div>
                                <div>
                                    <h5 class="mb-0">Syamsul Arifin</h5>
                                    <p class="text-muted m-0"><small>- Citra Buana</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="testi-box mt-4">
                            <div class="testi-desc bg-white p-4">
                                <p class="text-muted mb-0">" Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, nihil sit. Tempora inventore amet sapiente fugiat cum, reprehenderit aliquam quo dolorum dolorem nostrum corporis quaerat quibusdam? Iste quam reiciendis est. "</p>
                            </div>
                            <div class="p-4">
                                <div class="testi-img float-left mr-2">
                                    <img src="{{ url('/') }}/frontend/assets/images/testi/img-3.png" alt="" class="rounded-circle">
                                </div>
                                <div>
                                    <h5 class="mb-0">Muhammad Rois</h5>
                                    <p class="text-muted m-0"><small>- Angkasa Mulya</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- testimonial end -->

        <!-- contact start -->
        <section class="section pb-0 bg-gradient" id="contact">
            <div class="bg-shape">
                <img src="{{ url('/') }}/frontend/assets/images/bg-shape-light.png" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title text-center mb-4">
                            <h3 class="text-white">Have any Questions ?</h3>
                            <p class="text-white-50">Please fill out the following form and we will get back to you shortly</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row mb-4">
                    <div class="col-lg-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-email-outline text-info h2"></i>
                            </div>
                            <div class="contact-details text-white">
                                <h5 class="text-white">E-mail</h5>
                                <p class="text-white-50">example@abc.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-cellphone-iphone text-info h2"></i>
                            </div>
                            <div class="contact-details">
                                <h5 class="text-white">Phone</h5>
                                <p class="text-white-50">012-345-6789</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-map-marker text-info h2"></i>
                            </div>
                            <div class="contact-details">
                                <h5 class="text-white">Address</h5>
                                <p class="text-white-50">4413 Redbud Drive, New York</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-lg-10">

                        <div class="custom-form p-5 bg-white">
                            <div id="message"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email...">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Enter Subject...">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="comments">Message</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-danger" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>
                        </div>
                        <!-- end custom-form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- contact end -->

        <!-- cta start -->
        <section class="section-sm bg-light">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h3 class="mb-0 mo-mb-20">We also customize the theme as per your needs</h3>
                    </div>
                    <div class="col-md-3">
                        <div class="text-md-right">
                            <a href="#" class="btn btn-outline-dark btn-rounded"><i class="mdi mdi-email-outline mr-1"></i> Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- cta end -->

        <!-- footer start -->
        @include('frontend.includes.footer')
        <!-- footer end -->

        <!-- Back to top -->
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        <script src="{{ url('/') }}/frontend/assets/js/jquery.min.js"></script>
        <script src="{{ url('/') }}/frontend/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('/') }}/frontend/assets/js/jquery.easing.min.js"></script>
        <script src="{{ url('/') }}/frontend/assets/js/scrollspy.min.js"></script>

        <!-- custom js -->
        <script src="{{ url('/') }}/frontend/assets/js/app.js"></script>
    </body>

</html>
