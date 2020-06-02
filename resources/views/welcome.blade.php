@extends('frontend.layouts.app')


@section('content')
        <!-- home start -->
<section class="slider " style="margin-top: 100px">
    <div class="card card-slider">
        <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox" style="position: relative;">
                @foreach ($sliders as $key => $slider)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ url('/') }}/gambar_slider/{{ $slider->gambar_slider }}"  alt="{{ $slider->gambar_slider }}" class="d-block img-fluid image-slider">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">First slide label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div> --}}
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!-- home end -->


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
            <div class="col-lg-3">
                <div class="features-box shadow">
                    <div class="features-img mb-4">
                        <img src="{{ url('/') }}/frontend/assets/images/icons/panel-surya.png" alt="">
                    </div>
                    <h4 class="mb-2">PANEL SURYA</h4>
                    <p class="text-muted">link penuh untuk panel surya monocrystallin dan polycrystalline</p>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-3">
                <div class="features-box shadow">
                    <div class="features-img mb-4 ">
                        <img src="{{ url('/') }}/frontend/assets/images/icons/tata-surya.png" alt="">
                    </div>
                    <h4 class="mb-2">TATA SURYA</h4>
                    <p class="text-muted">Sistem tata surya sunwa mengandung semua komponen yang</p>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-3">
                <div class="features-box shadow">
                    <div class="features-img mb-4 ">
                        <img src="{{ url('/') }}/frontend/assets/images/icons/solar-inverter.png" alt="">
                    </div>
                    <h4 class="mb-2">SOLAR INVERTER</h4>
                    <p class="text-muted">matahari matahari matarhari menyedian grid (grid terikat)</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="features-box shadow">
                    <div class="features-img mb-4 ">
                        <img src="{{ url('/') }}/frontend/assets/images/icons/solar-inverter.png" alt="">
                    </div>
                    <h4 class="mb-2">PART & ACCESSORIES</h4>
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
                    <p>ANUGRAH RAYA Solar Enegegy adalah perusahaan grup nasioanl ang berkembang yang berkomitmen untuk menyediakan sistem pembangkit listrik pv secara global. AUGERAH RAYA solar enegy bekejra sama dengan SUNFINE SOLAR TECHNOLOGY CO LTD yang mengkhususkan diri dalam promotion and application of new energy products, especially solar pumping system.</p>
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
            @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card-box product-box shadow">
                    <a href="{{ route('produk.show', $product->id) }}">
                        <img src="{{ url('/') }}/frontend/assets/images/products/produk-1.jpg"  alt="{{ $product->nama_produk }}" class="img-fluid align-content-center">

                    </a>
                    <div class="product-info">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="font-15 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">{{ $product->nama_produk }}</a> </h5>
                            </div>
                            <div class="col-auto">
                                <div class="product-price-tag">
                                    <a href="{{ route('produk.show', $product->id) }}">
                                        <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end product info-->
                </div> <!-- end card-box-->
            </div>
            @endforeach
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
                    <a href="{{ route('proyek.show', 1) }}" class="text-dark">
                        <img src="{{ url('/') }}/frontend/assets/images/proyek/proyek-1.png" alt="" class="img-fluid mx-auto d-block">
                        <div class="p-3 text-center">
                            <h5 class="mb-0">{{ strtoupper('rumah menggunakan 2kw dari sistem tenaga surya grid di Sri Lanka') }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            {{-- @foreach ($proyeks as $proyek)

            @endforeach --}}
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</section>
<!-- features end -->


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
                    <p class="text-white">Please fill out the following form and we will get back to you shortly</p>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row mb-4">
            <div class="col-lg-4">
                <div class="contact-content text-center mt-4">
                    <div class="contact-icon mb-2">
                        <i class="mdi mdi-email-outline text-white h2"></i>
                    </div>
                    <div class="contact-details text-white">
                        <h5 class="text-white">E-mail</h5>
                        <p class="text-white">example@abc.com</p>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="contact-content text-center mt-4">
                    <div class="contact-icon mb-2">
                        <i class="mdi mdi-cellphone-iphone text-white h2"></i>
                    </div>
                    <div class="contact-details">
                        <h5 class="text-white">Phone</h5>
                        <p class="text-white">012-345-6789</p>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="contact-content text-center mt-4">
                    <div class="contact-icon mb-2">
                        <i class="mdi mdi-map-marker text-white h2"></i>
                    </div>
                    <div class="contact-details">
                        <h5 class="text-white">Address</h5>
                        <p class="text-white">4413 Redbud Drive, New York</p>
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

@endsection
