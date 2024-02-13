@extends('layouts.website')

@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Moto & Tujuan OPD</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Moto & Tujuan OPD</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!--Start Contact Us
	=========================================== -->
<section class="contact-us" id="contact">
    <div class="container">

        <!-- Contact Form -->
        <div class="contact-form col-md-12 ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-11">
                        <div class="design-content">
                            <div class="section-title two">
                                <img src="https://dpmptsp.konkepkab.go.id/public/assetsa/img/it-startup/baner.jpg" alt="Design">
                                <br><br>
                                <span class="sub-title">Moto & Tujuan OPD</span>
                                <h2>DPMPTSP</h2>
                            </div>
                            <p>
                            <h3>Visi</h3>
                            "Menjadi lembaga yang mampu mewujudkan penanaman modal yang berdaya saing menuju Riau sebagai daerah tujuan investasi"
                            </p>
                            <h3>Misi</h3>
                            <ul>
                                <li>
                                    <i class="flaticon-checkmark"></i>
                                    <h6> Mewujudkan iklim penanaman modal yang kondusif</h6>
                                </li>
                                <li>
                                    <i class="flaticon-checkmark"></i>
                                    <h6> Meningkatkan daya tarik penanaman modal</h6>
                                </li>
                                <li>
                                    <i class="flaticon-checkmark"></i>
                                    <h6> Mewujudkan pelayanan terpadu satu pintu yang prima</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                <div class="design-img">
                    <img src="assets/img/it-startup/design1.jpg" alt="Design">
                </div>
            </div> -->
                </div>
            </div>
        </div>
        <!-- ./End Contact Form -->

    </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->

<!--================================
=            Google Map            =
=================================-->
<div class="google-map">
    <div id="map_canvas" class="map_canvas" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Bingo"></div>
</div>
<!--====  End of Google Map  ====-->

@endsection