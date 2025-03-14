@extends('layouts.website')

@section('content')



<div class="hero-slider">
    <div class="slider-item th-fullpage hero-area"
        style="background-image: url({{ asset('assets/website/images/slider/slider-bg-1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP)
                     <br>
                     Kabupaten Konawe Kepulauan</h1>
                    <!-- <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"> <br>  <br> ipsa aliquam velit.</p> -->
                    <!-- <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main"
                        href="service.html">Explore Us</a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item th-fullpage hero-area"
        style="background-image: url({{ asset('assets/website/images/slider/slider-bg-2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Sampaikan Pertanyaan, Keluhan atau Saran Anda di Sini <br>
                    </h1>
                    <!-- <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Create just what you need
                        for your Perfect Website. Choose from a wide range
                        <br> of Elements & simply put them on our Canvas.
                    </p> -->
                    <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                        href="{{ route('laporan.index') }}">Lapor</a>
                </div>
            </div>
        </div>
    </div>
    
</div>


<!--
Start About Section
==================================== -->
<section class="service-2 section">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6">
                <!-- section title -->
                <div class="title text-center">
                    <h2>Pelayanan Kami</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Voluptates, earum. </p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 text-center d-none d-md-block">
                <img loading="lazy" src="{{ asset('assets/website/images/about/member.jpg') }}"
                    class="img-fluid inline-block" alt="">
            </div>
            <div class="col-md-8">
                <div class="row text-center">
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item">
                            <i class="tf-ion-ios-alarm-outline"></i>
                            <h4>Perizinan</h4>
                            <p>Formulir Informasi Publik dan Formulir Layanan Perizinan</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item">
                            <i class="tf-ion-ios-briefcase-outline"></i>
                            <h4>Pengaduan</h4>
                            <p>Sampaikan Pertanyaan, Keluhan atau Saran Anda di Sini .</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item">
                            <i class="tf-ion-ios-email-outline"></i>
                            <h4>Mail Support</h4>
                            <p>Jika Anda memiliki pertanyaan, kritik dan saran terhadap kami, silakan hubungi kami, kami akan senang mendengar dari Anda.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item">
                            <i class="tf-ion-ios-locked-outline"></i>
                            <h4>Berita</h4>
                            <p>Cek berita terbaru DPMPTSP Konkep</p>
                        </div>
                    </div><!-- END COL -->
                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->

<!--
Start About Section
==================================== -->
<section class="about-2 section" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-lg-6">
                <div class="title text-center">
                    <h2>Tahapan Perizinan Berusaha Melalui Sistem OSS RBA</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam reprehenderit accusamus
                        labore iusto,
                        aut, eum itaque illo totam tempora eius.</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->
        </div>

        <div class="row">

            <div class="col-md-8 mb-4 mb-md-0">
                <img loading="lazy" src="{{ asset('assets/website/images/about/about-2.jpg') }}" class="img-fluid"
                    alt="">
            </div>
            <div class="col-md-4 row align-items-center" >
                <ul class="checklist">
                    <li>Pelayanan Informasi</li>
                    <li>Validasi</li>
                    <li>Smart Engine</li>
                    <li>Output</li>
                    <li> Subsistem Pengawasan</li>
                </ul>
                
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 text-center">
                <h2>Sistem Lapor</h2>
                <p>Layanan Aspirasi dan Pengaduan Masyarakat secara Online</p>
                <a href="{{ route('laporan.index') }}" class="btn btn-main">Kirim Aduan</a>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Counter Section
==================================== -->
<section class="counter-wrapper section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 text-center">
                <div class="title">
                    <h2>Layanan Informasi Publik</h2>
                    <p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum
                        iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a
                        risus luctus dignissim.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- first count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-alarm-outline"></i>
                    <div>
                        <span class="counter" data-count="150">0</span>
                    </div>
                    <h3>Izin Usaha</h3>
                </div>
            </div>
            <!-- end first count item -->

            <!-- second count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-analytics-outline"></i>
                    <div>
                        <span class="counter" data-count="130">0</span>
                    </div>
                    <h3>Izin Sekolah</h3>
                </div>
            </div>
            <!-- end second count item -->

            <!-- third count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-compose-outline"></i>
                    <div>
                        <span class="counter" data-count="99">0</span>
                    </div>
                    <h3>Izin Rumah sakit</h3>

                </div>
            </div>
            <!-- end third count item -->

            <!-- fourth count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item kill-border">
                    <i class="tf-ion-ios-bolt-outline"></i>
                    <div>
                        <span class="counter" data-count="250">0</span>
                    </div>
                    <h3>Izin Damkar</h3>
                </div>
            </div>
            <!-- end fourth count item -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->

<!-- Start Testimonial
=========================================== -->

<!-- Start Testimonial
=========================================== -->
		
<section class="testimonial section" id="testimonial">
		<div class="container">
			<div class="row">				
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img loading="lazy" src="{{ asset('assets/website/images/client-logo/clients-1.png') }}" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>H. ASGAR, SE</h3>
								<span>Sekretaris Dinas</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
				
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img loading="lazy" src="{{ asset('assets/website/images/client-logo/clients-2.png') }}" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>Nusrin, S.Sos., MM</h3>
								<span>Kepala Bidang Tenaga Kerja</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img loading="lazy" src="{{ asset('assets/website/images/client-logo/clients-3.png') }}" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>ASRUL SANI KADIR, S.Pd, M.Si</h3>
								<span>Kabid. Perizinan</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->

                        <!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img loading="lazy" src="{{ asset('assets/website/images/client-logo/clients-4.png') }}" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>HAMIDA, SH.,MM</h3>
								<span>Kepala Bidang Transimigrasi</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->


<!--
Start Blog Section
=========================================== -->
<section class="blog" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-xl-6 col-lg-8">
                <div class="title text-center ">
                    <h2> Latest <span class="color">News</span></h2>
                    <div class="border"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit
                        libero inventore nam.</p>
                </div>
            </div>
            <!-- /section title -->
        </div>

        <div class="row">
            <!-- single blog post -->
            @foreach ($posts as $post)
            <article class="col-lg-4 col-md-6">
            
                <div class="post-item">
                    <div class="media-wrapper">
                        <img loading="lazy" src="{{ $post->gallery->image }}" alt="amazing caves coverimage"   width="420" height="300">
                    </div>

                    <div class="content">
                        <h3><a href="{{ route('posts.berita', $post->id)}}">{{ $post->title }}</a></h3>
                        <i class="calendar"> {{ date('d-M-Y', strtotime($post->created_at)) }}</i>
                        <p> {{!! Str::limit($post->description, 100, '...') !!}}</p>
                        <a class="btn btn-main" href="{{ route('posts.berita', $post->id)}}">Read more</a>
                    </div>
                </div>
            </article>
            <!-- /single blog post -->
            @endforeach
            <!-- end single blog post -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
@endsection