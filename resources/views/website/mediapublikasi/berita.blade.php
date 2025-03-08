@extends('layouts.website')

@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Berita</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Berita</li>
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
                                <!-- <img src="https://dpmptsp.konkepkab.go.id/public/assetsa/img/it-startup/baner.jpg" alt="Design">
                                <br><br> -->

                                <article class="post">
                                    <div class="post-image mb-5">
                                        <img loading="lazy" class="img-fluid w-100" src="{{ $post->gallery->image }}" alt="post-image">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <h3>{{$post->title}}</h3>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="index.html">{{ date('d-M-Y', strtotime($post->created_at)) }}</a>&nbsp;/
                                            </li>
                                        </ul>
                                        <p>{{ $post->description }}</p>
                                    
                                        <!-- blockquote -->
                                        <!-- <blockquote>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia deserunt mollit anim iest.laborum.
                                            sed perspiciatis unde omnis iste natus error voluptatem accusantium dolore mque laudantium.</blockquote> -->
                                        
                                        <!-- post share -->
                                        <ul class="post-content-share list-inline mb-5">
                                            <li class="list-inline-item">
                                                <a href="https://themefisher.com/">
                                                    <i class="tf-ion-social-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://themefisher.com/">
                                                    <i class="tf-ion-social-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://themefisher.com/">
                                                    <i class="tf-ion-social-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://themefisher.com/">
                                                    <i class="tf-ion-social-skype"></i>
                                                </a>
                                            </li>
                                        </ul>

                                        
                                    </div>
                                </article>
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