@extends('layouts.website')

@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Standar Pelayanan</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Standar Pelayanan</li>
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
                                <!-- <img src="https://dpmptsp.konkepkab.go.id/public/assetsa/img/it-startup/baner.jpg" alt="Design"> -->
                                <br><br>
                                <table id="posts-table" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th> No. </th>
                                            <th> File </th>
                                            <th> date </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($posts as $post)
                                        <tr>
                                            <td> {{ $post->id }} </td>
                                            <td> {{ $post->path }} </td>
                                            <td> {{ $post->created_at }} </td>
                                            <td><a href="{{ route('sp.download', $post->id) }}">download</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>

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
<!-- <div class="google-map">
    <div id="map_canvas" class="map_canvas" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Bingo"></div>
</div> -->
<!--====  End of Google Map  ====-->

@endsection

@section('scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#posts-table').DataTable();
    });
</script>
@endsection