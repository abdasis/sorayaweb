@extends('frontend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row section-breadcrumb mt-100">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb pl-2">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="{{ route('proyek.index') }}">Daftar Project</li>
                </ol>
            </nav>
        </div>
        <div class="project-wrapper">
            <div class="row">
                <div class="col-md-3">
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
                <div class="col-md-3">
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
                <div class="col-md-3">
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
                <div class="col-md-3">
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
                <div class="col-md-3">
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
                <div class="col-md-3">
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
@endsection
