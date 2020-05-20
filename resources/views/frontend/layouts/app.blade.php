<!DOCTYPE html>
<html lang="en">
    @include('frontend.includes.head')

    <body>

        <!--Navbar Start-->
        @include('frontend.includes.navbar')
        <!-- Navbar End -->

        @yield('content')


        <!-- cta start -->
        <section class="section-sm bg-light">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h3 class="mb-0 mo-mb-20">We also customize the theme as per your needs</h3>
                    </div>
                    <div class="col-md-3">
                        <div class="text-md-right">
                            <a href="#" class="btn btn-outline-dark btn-rounded"><i class="mdi mdi-email-outline mr-1"></i> Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- footer start -->
        @include('frontend.includes.footer')
        <!-- footer end -->

    </body>

</html>
