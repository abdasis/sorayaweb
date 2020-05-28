@extends('frontend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row section-breadcrumb">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb pl-2">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="category-wrapper">
                    <div class="kategori-box">
                        <div class="category-widget bg-white shadow py-2">
                            <div class="container">
                                <h4 class="widget-title">
                                    KATEGORI PRODUK
                                </h4>
                                <div class="inner-category">
                                    <ul class="nav navbar-nav flex-column ml-0 pl-0">
                                        <li class="nav-item">
                                        <a class="nav-link active" href="#">Panel Surya</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="#">Tata Surya</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="#">Solar Inverter</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="#">Dukungan yang meningkat</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="latest-product-widget bg-white shadow py-2 my-2">
                            <div class="container">
                                <h4 class="widget-title">
                                    PRODUK TERBARU
                                </h4>
                            </div>
                        </div>

                        <div class="latest-news-widget bg-white shadow py-2 my-2">
                            <div class="container">
                                <h4 class="widget-title">
                                    Berita Terbaru
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="product-wrapper shadow">
                    <div class="inner-product">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ url('/') }}/frontend/assets/images/products/panel_surya_big.jpg" alt="" class="img-responsive img-fluid">
                                </div>
                                <div class="col-md-6 py-3">
                                    <div class="product-spec">
                                        <h3 class="product-title">
                                            3kw dari sistem tenaga surya grid untuk digunakan di rumah
                                        </h3>
                                        <h5 class="product-subtitle">
                                            panel surya 20kw lebih murah 220v 60hz di grid 20000 watts sistem tenaga surya
                                        </h5>
                                        <hr>
                                        <table class="table table-borderless table-sm">
                                            <tr>
                                                <th>Merek </th>
                                                <td>:</td>
                                                <td>Sunway Solar</td>
                                            </tr>
                                            <tr>
                                                <th>Item No.</th>
                                                <td>:</td>
                                                <td>SW-20KW-ON </td>
                                            </tr>
                                            <tr>
                                                <th>Type</th>
                                                <td>:</td>
                                                <td>On Grid </td>
                                            </tr>
                                            <tr>
                                                <th>Max. Power</th>
                                                <td>:</td>
                                                <td>20KW</td>
                                            </tr>
                                            <tr>
                                                <th>Output Votagey</th>
                                                <td>:</td>
                                                <td>110v 220v</td>
                                            </tr>
                                            <tr>
                                                <th>Certificate</th>
                                                <td>:</td>
                                                <td>CE TUV INMETRO</td>
                                            </tr>
                                            <tr>
                                                <th>Payment</th>
                                                <td>:</td>
                                                <td>T/T L/C </td>
                                            </tr>
                                            <tr>
                                                <th>Warrant</th>
                                                <td>:</td>
                                                <td>25 Year </td>
                                            </tr>
                                        </table>
                                        <a href="#" class="btn btn-success rounded">Hubungi Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container">
                                    <div class="product-discription p-2">
                                        <h4 class="widget-title">
                                            RINCIAN PRODUCT
                                        </h4>
                                        <div class="discription-content">
                                            <p>
                                                Diikat dengan grid, on-grid, utilitas-interaktif, grid intertie dan grid backfeeding adalah semua istilah yang digunakan untuk menggambarkan konsep yang sama - sistem tata surya yang terhubung ke jaringan listrik utilitas.10KW sistem PV lengkap dengan panel surya, inverter. kabel dan sistem pemasangan
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="related-product shadow py-2 my-3">
                    <div class="container">
                        <h4 class="widget-title">
                            Related Product
                        </h4>
                        <div class="row">
                            <div class="col-md-4">
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
                                                    <a href="{{ route('produk.show', ['produk-1']) }}">
                                                        <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> <!-- end row -->
                                    </div> <!-- end product info-->
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card-box product-box shadow-sm">
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

                            <div class="col-md-4">
                                <div class="card-box product-box shadow-sm">
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

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
