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
            <div class="product-wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-box product-box shadow">
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

                    <div class="col-md-4">
                        <div class="card-box product-box shadow-sm">
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
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <nav aria-label="..." class="mx-auto m-0">
                        <ul class="pagination justify-content-center">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
