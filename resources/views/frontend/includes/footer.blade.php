@php
    $recentproduk = App\Models\Product::paginate(5);
    $site = App\Models\Site::first();
@endphp

<footer class="bg-dark footer ">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="pr-lg-4">
                    <div class="mb-4">
                        <img src="{{ url('/') }}/frontend/assets/images/{{ $site->logo }}" alt="" height="30">
                    </div>
                    <p class="text-white-50">{{ $site->nama_situs }} </p>
                    <p class="text-white-50">{{ $site->about_us }}.</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-list">
                    <p class="text-white mb-2 footer-list-title">Produk Terbaru</p>
                    <ul class="list-unstyled">
                        @if ($recentproduk->count() > 0)
                            @foreach ($recentproduk as $produk)
                            <li><a href="{{ route('produk.show', $produk->id) }}"><i class="mdi mdi-chevron-right mr-2"></i>{{ $produk->nama_produk  }}</a></li>
                            @endforeach
                        @else
                            <li>Belum ada produk</li>
                        @endif
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-list">
                    <p class="text-white mb-2 footer-list-title">Alamat</p>
                    <ul class="list-unstyled">
                        @if ($recentproduk->count() > 0)
                        @foreach ($recentproduk as $produk)
                        <li><a href="{{ route('produk.show', $produk->id) }}"><i class="mdi mdi-chevron-right mr-2"></i>{{ $produk->nama_produk  }}</a></li>
                        @endforeach
                    @else
                        <li>Belum ada produk</li>
                    @endif
                    </ul>
                </div>
            </div>


        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="float-left pull-none">
                    <p class="text-white-50">2015 - 2020 © Soraya Web. Design by <a href="https://abdasis.my.id/" target="_blank" class="text-white-50">Abd. Asis</a> </p>
                </div>
                <div class="float-right pull-none">
                    <ul class="list-inline social-links">
                        <li class="list-inline-item text-white-50">
                            Social :
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</footer>

 <!-- Back to top -->
 <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

 <!-- javascript -->
 <script src="{{ url('/') }}/frontend/assets/js/jquery.min.js"></script>
 <script src="{{ url('/') }}/frontend/assets/js/bootstrap.bundle.min.js"></script>
 <script src="{{ url('/') }}/frontend/assets/js/jquery.easing.min.js"></script>
 <script src="{{ url('/') }}/frontend/assets/js/scrollspy.min.js"></script>

 <!-- custom js -->
 <script src="{{ url('/') }}/frontend/assets/js/app.js"></script>
