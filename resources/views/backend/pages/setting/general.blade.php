@extends('backend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Setting</a></li>
                            <li class="breadcrumb-item active">General</li>
                        </ol>
                    </div>
                    <h4 class="page-title">General</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if (Session::has('status'))
                    <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif
                <form action="{{ route('admin.setting.store-general') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_situs">Title Website</label>
                        <input type="text" name="nama_situs" placeholder="Masukan Title Website" class="form-control shadow-none" value="{{ $site->nama_situs }}">
                    </div>

                    <div class="form-group">
                        <label for="">Tag line</label>
                        <input type="text" class="form-control shadow-none" name="tagline" placeholder="Masukan Tagline situs" value="{{ $site->tagline }}">
                    </div>

                    <img src="{{ asset('frontend/assets/images/') .'/' . $site->logo }}" class="img-thumbnail" width="80px" alt="{{ $site->logo }}">
                    <div class="form-group">
                        <label>Logo situs</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="logo_situs" type="file" class="custom-file-input" id="inputGroupFile04">
                                <label class="custom-file-label" for="inputGroupFile04">Pilih gambar</label>
                            </div>
                        </div>
                        @if ($errors->first('gambar_slider'))
                            <small class="text-danger">Gambar slider harus diisi</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Tentang Situs</label>
                        <textarea name="aboutus" id="" cols="30" rows="10"  class="form-control shadow-none" placeholder="Masukan about us">{{ $site->about_us }}</textarea>
                        <small class="text-muted">Digunakan untuk halaman about</small>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info shadow-none">Simpan Pengaturan</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
