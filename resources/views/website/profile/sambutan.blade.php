@extends('layouts.website')

@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Sambutan Kepala Dinas</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sambutan Kepala Dinas</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!--Start Contact Us
	=========================================== -->
<section class="contact-us" id="contact">
<div class="container">
        <div class="row align-items-center">
            <div class="col-lg-11">
                <div class="design-content">
                    <div class="section-title two">
                        <img src="https://dpmptsp.konkepkab.go.id/public/assetsa/img/it-startup/baner.jpg" alt="Design">
                        <br><br>
                        <span class="sub-title">Sambutan Kepala Dinas</span>
                    </div>
                    <p>
                    <h5>Assalamualaikum Wr. Wb.</h5>
                    Selamat datang di Website Resmi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Konawe Kepulauan.

                    Website ini dimaksudkan sebagai sarana publikasi untuk memberikan Informasi dan gambaran terhadap pelayanan publik pada Dinas Penanaman Modal dan Pelayananan Terpadu Satu Pintu Kabupaten Konawe Kepulauan.

                    Diharapkan melalui website ini kiranya masyarakat dapat mengetahui seluruh informasi tentang Kebijakan Pemerintah Kabupaten Konawe Kepulauan dalam urusan penanaman modal dan pelayanan perizinan dan non perizinan di wilayah Kabupaten Konawe Kepulauan.

                    Kritik dan saran yang ada sangat kami harapkan guna penyempurnaan Website ini dimasa datang. Semoga keberadaan Website ini dapat memberikan manfaat bagi kita semua.
                    <br> <br>
                    Wassalam.
                    <h5>Dr. H. EKA PAKSI, S.Sos.,M.Si</h5>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> <!-- end section -->

<!--================================
=            Google Map            =
=================================-->
<div class="google-map">
    <div id="map_canvas" class="map_canvas" data-latitude="40.712776" data-longitude="-74.005974"
        data-marker="images/marker.png" data-marker-name="Bingo"></div>
</div>
<!--====  End of Google Map  ====-->

@endsection