@extends('layouts.website')

@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Laporan</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Laporan</li>
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
            <div class="title text-center">
                <h2>Sistem Lapor</h2>
                <p>Bapak/Ibu yang terhormat, sampaikan keluhan anda tentang perizinan. Kami akan sangat senang apabila
                    pengaduan tersebut disertai dengan bukti otentik. Jangan lupa lengkapi data anda agar kami dapat
                    merespon dengan baik.</p>
                <div class="border"></div>
            </div>
            @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <form id="contact-form" method="post" role="form" action="{{ route('laporan.store') }}">
                @csrf
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class='bx bx-user'></i>
                            </label>
                            <input type="text" name="nama" value="" id="nama" class="form-control"
                                placeholder="Masukkan Nama anda *">
                        </div>
                    </div>
                    <!-- end nama -->

                    <!-- jenis kelamin -->
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <select name="jenisKelamin" id="jenisKelamin" class="form-control form-control-lg mb-6"
                                aria-label=".form-control-lg example">
                                
                                <option disabled selected>Jenis Kelamin</option>
                                <option @selected( old('jenisKelamin')==1 ) value="1">Perempuan</option>
                                <option @selected( old('jenisKelamin')==0 ) value="0">Laki-laki</option>
                            </select>
                            <div class="invalid-feedback">
                                Jenis kelamin harus diIsi.
                            </div>
                        </div>
                    </div>
                    <!-- end jenis kelamin -->

                    <!-- alamat rumah -->
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>
                                <i class='bx bx-comment-detail'></i>
                            </label>
                            <textarea cols="30" rows="5" name="alamat_rumah" class="form-control "
                                id="validationCustom01" placeholder="Alamat Rumah *"></textarea>
                        </div>
                    </div>
                    <!-- end alamat rumah -->

                    <!-- pekerjaan -->
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>
                                <i class='bx bx-home'></i>
                            </label>
                            <input type="text" value="" name="pekerjaan" id="pekerjaan" class="form-control "
                                placeholder="Masukkan Pekerjaan Anda *">
                        </div>
                    </div>
                    <!-- end pekerjaan -->

                    <!-- alamat kantor -->
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>
                                <i class='bx bx-home'></i>
                            </label>
                            <textarea cols="30" rows="5" name="alamat_kantor" class="form-control "
                                id="validationCustom01" placeholder="Alamat Kantor *"></textarea>
                        </div>
                    </div>
                    <!-- end alamat kantor -->

                    <!-- email -->
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class='bx bx-mail-send'></i>
                            </label>
                            <input type="text" name="email" value="" id="email" class="form-control"
                                placeholder="Masukkan Email Anda *">
                        </div>
                    </div>
                    <!-- end email -->

                    <!-- ktp -->
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class='bx bx-id-card'></i>
                            </label>
                            <input type="number" name="ktp" value="" id="ktp" class="form-control"
                                placeholder="Masukkan No.KTP Anda *">
                        </div>
                    </div>
                    <!-- end ktp -->

                    <!-- nomor telp -->
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class='bx bx-phone-call'></i>
                            </label>
                            <input type="number" value="" name="phone_number" id="phone_number"
                                placeholder="Masukkan Nomor Hp/Wa" class="form-control ">
                        </div>
                    </div>
                    <!-- end nomor telp -->

                    <!-- jenis aduan -->
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <select name="jenis_Lapor_id" class="form-control form-control-lg mb-3">
                                <option disabled selected>Jenis Aduan Masyarakat</option>
                                @if (count($laporans) > 0)
                                @foreach ($laporans as $laporan)
                                <option @selected( old('laporan')==$laporan->id ) value="{{ $laporan->id }}">{{
                                    $laporan->name }}</option>
                                @endforeach
                                @endif
                            </select>
                            <div class="invalid-feedback">
                                Jenis Aduan harus diIsi.
                            </div>
                        </div>
                    </div>
                    <!-- end jenis aduan -->

                    <!-- subjek -->
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>
                                <i class='bx bxs-edit'></i>
                            </label>
                            <input type="text" value="" name="subjek" id="subjek" class="form-control "
                                placeholder="Ketik Judul Laporan Anda *" required>
                        </div>
                    </div>
                    <!-- end subjek -->

                    <!-- isi aduan -->
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>
                                <i class='bx bx-comment-detail'></i>
                            </label>
                            <textarea name="isian" class="form-control" id="isian" cols="30" rows="9"
                                placeholder="Ketik Isi Laporan Anda *" required></textarea>
                        </div>
                    </div>
                    <!-- end isi aduan -->

                    <!-- tanggal -->
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class='bx bxs-calendar'></i>
                            </label>
                            <input type="date" name="tanggal_kejadian" value="" id="tanggal_kejadian"
                                class="form-control" placeholder="000-00-00" id="mdate" required>
                        </div>
                    </div>
                    <!-- end tanggal -->

                    <!-- lokasi (data baru) -->
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class='bx bxs-map'></i>
                            </label>
                            <input type="text" value="" name="lokasi" id="lokasi" class="form-control "
                                placeholder="Ketik Lokasi Kejadian *" required>
                        </div>
                    </div>
                    <!-- end lokasi -->

                    <!-- tujuan pengaduan -->
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>
                                <i class='bx bx-comment-detail'></i>
                            </label>
                            <input type="text" value="" name="tujuan_pengaduan" id="tujuan_pengaduan"
                                class="form-control " placeholder="Ketik Tujuan Pengaduan *" required>
                        </div>
                    </div>
                    <!-- end tujuan pengaduan -->

                </div>
                <div id="cf-submit">
                    <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit" required>
                </div>

            </form>
        </div>
        <!-- ./End Contact Form -->

    </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->

<!--================================
=            Google Map            =
=================================-->
<!-- <div class="google-map">
    <div id="map_canvas" class="map_canvas" data-latitude="40.712776" data-longitude="-74.005974"
        data-marker="images/marker.png" data-marker-name="Bingo"></div>
</div> -->
<!--====  End of Google Map  ====-->

@endsection