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
        <div class="row justify-content-center">
            <div class="col-md-8 my-5">
                <div class="contact-wrapper shadow p-3 rounded">
                    <h3>Anugrah Raya Energy</h3>
                    <hr>
                    <img src="{{ asset('frontend/assets/images/logo-ar.png') }}" alt="" class="img-responsive">
                    <p>
                        Sebuah perusahaan yang ikut berpartisipasi dalam memberikan solusi energi
terbaru yang dikenal dengan Energi Tenaga Surya. Tidak hanya bergerak sebagai
distributor, tetapi juga merupakan perusahaan yang melakukan EPC (Engineering,
Procurement, &amp; Construction).
                    </p>
                    <p>
                        AR Energy memasok Inverter Tenaga Surya (sinus 100%) dengan daya kapasitas
penuh dan menginstal Solar Surya Photovoltaik (PV) serta membantu semakin
banyak orang menemukan manfaat dari sistem panas matahari untuk menghasilkan
energi yang bersih dan ramah lingkungan untuk kebutuhan rumah, kantor dan
industri di Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
