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
                    <form action="" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Masukan Nama Lengkap">
                            </div>
                            <div class="col-md-6">
                                <label for="nama">Alamat Email</label>
                                <input type="text" class="form-control" placeholder="Masukan Alamat Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" placeholder="Masukan Subject Pesan">
                        </div>
                        <div class="form-group">
                            <label for="content">Isi Pesan</label>
                            <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Masukan Isi Pesan"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
