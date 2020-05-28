@extends('backend.layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Calendar</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Calendar</h4>
                </div>
            </div>
        </div>
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                    @if (Session::has('status'))
                        <div class="alert alert-success">{{ Session::get('status') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            Tambah Produk
                        </div>
                        <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_produk">Nama Produk</label>
                                    <input type="text" name="nama_produk" id="nama_produk" class="form-control shadow-none @error('nama_produk') is-invalid @enderror" value="{{ old('nama_produk') }}" placeholder="Masukan Nama Product" required>
                                    @if ($errors->first('nama_produk'))
                                        <small class="text-danger">{{ $errors->first('nama_produk') }}</small>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="diskripsi_produk">Diskripsi Produk</label>
                                    <textarea id="summernote" class="form-class" name="deskripsi_produk">{{ old('deskripsi_produk') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="merk">Merk</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-award"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Masukan Merk" name="merk_produk" aria-describedby="basic-addon1" value="{{ old('merk_produk') }}" required>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="merk">Nomor</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-list-ol"></i></span>
                                        </div>
                                        <input required value="{{ old('nomor_produk') }}" type="text" class="form-control" name="nomor_produk" placeholder="Masukan Nomor Produk">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tipe">Tipe</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-layer-group"></i></span>
                                        </div>
                                        <input value="{{ old('tipe_produk') }}" required type="text" class="form-control" name="tipe_produk" data-role="tagsinput" placeholder="Masukan Type">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tipe">Max Power</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-bolt"></i></span>
                                        </div>
                                        <input required  value="{{ old('max_power') }}" type="text" class="form-control" name="max_power" placeholder="Masukan Max Power">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tipe">Certificate</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class=" fas fa-certificate"></i></span>
                                        </div>
                                        <input required value="{{ old('certificate') }}" type="text" class="form-control" name="certificate" placeholder="Masukan Certificate">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tipe">Payment</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-money-check-alt"></i></span>
                                        </div>
                                        <input required value="{{ old('payment') }}" type="text" class="form-control" name="payment" placeholder="Masukan Certificate">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tipe">Warrant</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-undo-alt"></i></span>
                                        </div>
                                        <input required value="{{ old('warrant') }}" type="text" class="form-control" name="warrant" placeholder="Masukan Certificate">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Option
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputState">Status</label>
                                <select name="status" id="inputState" class="form-control">
                                    <option value="">Choose</option>
                                    <option {{ old('status') == 'Draft' ? 'selected' : '' }}>Draft</option>
                                    <option {{ old('status') == 'Publish' ? 'selected' : '' }}>Publish</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="inputState">Kategori</label>
                                <select name="kategori" id="inputState" class="form-control">
                                    <option value="">Choose</option>
                                    <option>Kategori Satu</option>
                                    <option>Kategori Dua</option>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-save mr-1"></i> Simpan Produk</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


@section('js')
<script src="{{ url('/') }}/backend/assets/summernote/summernote-bs4.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            height: 300
        });
    });
</script>
@endsection

@section('css')
<link rel="stylesheet" href="{{ url('/') }}/backend/assets/summernote/summernote-bs4.css">
@endsection
