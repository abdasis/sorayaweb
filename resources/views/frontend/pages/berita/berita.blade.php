@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($berita as $berita)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="{{ $berita-> }}" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
