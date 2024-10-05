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
                                <section class="blog" id="blog">
                                    <div class="container">


                                        <div class="post">
                                            <!-- single blog post -->
                                            @foreach ($posts as $post)
                                            <article class="col-lg-12 col-md-12">

                                                <div class="post-item">
                                                    <div class="media-wrapper">
                                                        <img loading="lazy" src="{{ $post->gallery->image }}" alt="amazing caves coverimage" class="img-fluid">
                                                    </div>

                                                    <div class="content">
                                                        <h3><a href="{{ route('posts.berita', $post->id)}}">{{ $post->title }}</a></h3>
                                                        <i class="calendar"> {{ date('d-M-Y', strtotime($post->created_at)) }}</i>
                                                        <p> {{!! Str::limit($post->description, 200, '...') !!}}</p>
                                                        <a class="btn btn-main" href="{{ route('posts.berita', $post->id)}}">Read more</a>
                                                    </div>
                                                </div>
                                            </article>
                                            <!-- /single blog post -->
                                            @endforeach
                                            <!-- end single blog post -->
                                        </div> <!-- end row -->
                                        
                                        {{ $posts->links()}}
                                        

                                    </div> <!-- end container -->
                                </section>

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