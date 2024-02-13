@extends('layouts.website')

@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Struktur Organisasi</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!--Start Contact Us
	=========================================== -->


<section class="contact-us" id="struktur">
<div class="container">
        <div class="design area row align-items-center">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-11">
                            <div class="design-content">
                                <div class="section-title two">
                                    <img src="https://dpmptsp.konkepkab.go.id/public/assetsa/img/it-startup/baner.jpg" alt="Design">
                                    <br><br>
                                    <span class="sub-title">Struktur Organisasi</span>
                                    <h2>DPMPTSP</h2>
                                </div>
                                <p>
                                    Susunan Organisasi Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu terdiri dari :
                                </p>
                                <ol type='a' style="list-style-type:lower-alpha">
                                    <li>Kepala Dinas;</li>
                                    <li>Sekretaris;
                                        <ol type='a'>
                                            <li>Sub Bagian Umum Dan Kepegawaian;</li>
                                            <li>Sub Bagian Perencanaan;</li>
                                            <li>Sub Bagian Keuangan;</li>
                                        </ol>
                                    </li>
                                    <li>Bidang Pelayanan Perizinan;
                                        <ol type='a' style="list-style-type:lower-alpha">
                                            <li>Sub bidang Penetapan;</li>
                                            <li>Sub bidang Pengelolaan Adm. Perizinan;</li>
                                        </ol>
                                    </li>
                                    <li>Bidang Penanaman Modal;
                                        <ol type='a' style="list-style-type:lower-alpha">
                                            <li>Sub. Bidang Kerja sama Promosi dan Penanaman Modal;</li>
                                            <li>Sub Bidang Pengembangan Penanaman Modal;</li>
                                        </ol>
                                    </li>
                                    <li>Bidang Data Pengendalian dan Pengawasan;
                                        <ol type='a' style="list-style-type:lower-alpha">
                                            <li>Sub. Bidang data dan Informasi;</li>
                                            <li>Sub Bidang Pengendalian dan Pengawasan.</li>
                                        </ol>
                                    </li>
                                    <li>Bidang Penyuluhan dan Pengaduan;
                                        <ol type='a' style="list-style-type:lower-alpha">
                                            <li>Sub Bidang Penyuluhan;</li>
                                            <li>Sub Bidang Pengaduan.</li>
                                        </ol>
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6">
                <div class="design-img">
                    <img src="assets/img/it-startup/design1.jpg" alt="Design">
                </div>
            </div> -->
        </div>
    </div>
</section>
<!--================================
=            Google Map            =
=================================-->
<div class="google-map">
    <div id="map_canvas" class="map_canvas" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Bingo"></div>
</div>
<!--====  End of Google Map  ====-->

@endsection