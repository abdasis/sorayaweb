@extends('frontend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row section-breadcrumb mt-100">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb pl-2">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body shadow-sm">
                            <h3 class="header-title">250kw di jaringan sistem tenaga surya di ghana untuk pertanian
                            </h3>
                            <div class="badge badge-info text-white p-1">{{ date('d-m-Y') }}</div>
                            <hr>
                            <div class="card-img-top my-2">
                                <img src="{{ asset('frontend/assets/images/proyek/proyek-1.png') }}" alt="" width="100%" srcset="">
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ea veniam numquam? Aliquam accusantium vero tempora eligendi officiis, similique modi placeat molestias hic impedit quod totam distinctio. Ipsa, beatae. Harum.

                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam dignissimos explicabo at dolor expedita quaerat ex possimus numquam. Commodi amet dolorum, tempora in ad ea laborum excepturi unde earum blanditiis!

                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat et odio fugit sit numquam repudiandae quo ullam. Atque delectus neque quidem quibusdam minus. Reiciendis officia veniam ullam debitis, possimus cumque.

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur animi numquam rerum, maiores, ipsum, quas ad doloribus tenetur deleniti consequuntur eum nihil magnam delectus. Praesentium voluptas fugiat dolore voluptatibus repellat.
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
