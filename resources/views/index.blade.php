@extends('layouts.app_v3')
@section('content')
	<!-- Start Banner Area -->
	<section class="home-banner-area relative">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8 col-md-12">
					<h1 class="wow fadeIn" data-wow-duration="4s">Cara Mudah Temukan<br> Guru Privat Anda</h1>
					<p class="text-white">
						Mau Belajar? #DiKlik Aja!
					</p>

					<div class="input-wrap">
						<form action="" class="form-box d-flex justify-content-between">
							<input type="text" placeholder="Cari Pelajaran" class="form-control" name="username">
							<button type="submit" class="btn search-btn">Cari</button>
						</form>
					</div>
					<h4 class="text-white">Pelajaran Terbaik</h4>

					<div class="courses pt-20">
						<a href="#" data-wow-duration="1s" data-wow-delay=".3s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Matematika</a>
						<a href="#" data-wow-duration="1s" data-wow-delay=".6s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Tematik SD</a>
						<a href="#" data-wow-duration="1s" data-wow-delay=".9s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Fisika</a>
						<a href="#" data-wow-duration="1s" data-wow-delay="1.2s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Kimia</a>
						<a href="#" data-wow-duration="1s" data-wow-delay="1.5s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Ekonomi</a>
						<a href="#" data-wow-duration="1s" data-wow-delay="1.8s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Geografi</a>
						<a href="#" data-wow-duration="1s" data-wow-delay="2.1s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Bahasa Inggris</a>
						<a href="#" data-wow-duration="1s" data-wow-delay="2.4s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Tes Potensi Akademik</a>
					</div>
				</div>
			</div>
		</div>
		<div class="rocket-img">
			<img src="{{asset('img/rocket.png')}}" alt="">
		</div>
	</section>
	<!-- End Banner Area -->


	<!-- Start About Area -->
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 col-md-6 about-left">
					<img class="img-fluid" src="{{asset('img/ill-privat.svg')}}" width="900px" alt="">
				</div>
				<div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
					<h1>
						Belajar Jadi Lebih Mantap <br> dengan Guru Privat
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							Tingkatkan kemampuan akademismu dengan guru privat terbaik di bidangnya
						</p>
					</div>
					<a href="courses.blade.php" class="primary-btn">Telusuri Lebih Lanjut</a>
				</div>
			</div>
			<div class="row align-items-center justify-content-center" style="margin-top: 50px">
				<div class="col-lg-5 col-md-6 about-left">
					<h1>
						Siapa Bilang Tryout<br> yang Bagus Mahal?
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							Dapatkan tryout kualitas tinggi dengan harga terjangkau! Disesuaikan dengan kurikulum resmi pendidikan Indonesia
						</p>
					</div>
					<a href="courses.blade.php" class="primary-btn disable">Telusuri Lebih Lanjut  <h7 style="color: darkred;font-weight: bold">(COMING SOON)</h7></a>
				</div>
				<div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
					<img class="img-fluid" src="{{asset('img/ill-tryout.svg')}}" width="900px" alt="">
				</div>
			</div>
			<div class="row align-items-center justify-content-center"  style="margin-top: 50px">
				<div class="col-lg-5 col-md-6 about-left">
					<img class="img-fluid" src="{{asset('img/ill-video.svg')}}" width="900px" alt="">
				</div>
				<div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
					<h1>
						Belajar Lebih Mudah dengan <br> Video Pembahasan Soal
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							Dengan video pembahasan, siswa jadi lebih mudah mengerti pelajarannya loh! Gak percaya? Cobain aja!
						</p>
					</div>
					<a href="courses.blade.php" class="primary-btn disable">Telusuri Lebih Lanjut  <h7 style="color: darkred;font-weight: bold">(COMING SOON)</h7></a>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->

	<!-- Start Courses Area -->
	<section class="courses-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 about-right">
					<h1>
						This is Why <br> We have Solid Idea
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think
							about setting up your own viewing station. In the life of any aspiring astronomer that it is time to buy that first
							telescope. It’s exciting to think about setting up your own viewing station.
						</p>
					</div>
					<a href="courses.blade.php" class="primary-btn">Explore Courses</a>
				</div>
				<div class="offset-lg-1 col-lg-6">
					<div class="courses-right">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<ul class="courses-list">
									<li>
										<a class="wow fadeInLeft" href="courses.blade.php" data-wow-duration="1s" data-wow-delay=".1s">
											<i class="fa fa-book"></i> Tematik SD
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.blade.php" data-wow-duration="1s" data-wow-delay=".3s">
											<i class="fa fa-book"></i> Ilmu Pengetahuan Alam SMP
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.blade.php" data-wow-duration="1s" data-wow-delay=".5s">
											<i class="fa fa-book"></i> Matematika
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.blade.php" data-wow-duration="1s" data-wow-delay=".7s">
											<i class="fa fa-book"></i> Kimia
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.blade.php" data-wow-duration="1s" data-wow-delay=".9s">
											<i class="fa fa-book"></i> Fisika
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.blade.php" data-wow-duration="1s" data-wow-delay="1.1s">
											<i class="fa fa-book"></i> Biologi
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.blade.php" data-wow-duration="1s" data-wow-delay="1.3s">
											<i class="fa fa-book"></i> Ekonomi
										</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<ul class="courses-list">
									<li>
										<a class="wow fadeInRight" href="courses.blade.php" data-wow-duration="1s" data-wow-delay="1.3s">
											<i class="fa fa-book"></i> Sejarah
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.blade.php" data-wow-duration="1s" data-wow-delay="1.1s">
											<i class="fa fa-book"></i> Geografi
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.blade.php" data-wow-duration="1s" data-wow-delay=".9s">
											<i class="fa fa-book"></i> Sosiologi
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.blade.php" data-wow-duration="1s" data-wow-delay=".7s">
											<i class="fa fa-book"></i> Bahasa Indonesia
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.blade.php" data-wow-duration="1s" data-wow-delay=".5s">
											<i class="fa fa-book"></i> Bahasa Indonesia
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.blade.php" data-wow-duration="1s" data-wow-delay=".3s">
											<i class="fa fa-book"></i> Bahasa Inggris
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.blade.php" data-wow-duration="1s" data-wow-delay=".1s">
											<i class="fa fa-book"></i> Tes Potensi Akademik
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Courses Area -->

	<div class="feature-area" style="background-image: url('{{asset('img/hero-bg.svg')}}');opacity: 0.8">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h1 style="color: white">Daftar Paket Tersedia</h1>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="card position-center feature-item" style="width: 25rem;height: 18rem;margin: 0 auto 20px;display: inline-block; border-radius: 5px">
					<div class="card-body" style="padding: 1px;width: 20rem" >
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
							<h5 class="card-title">Regular Package</h5>
							<h6 class="card-subtitle mb-2 text-muted">Biaya: </h6>
							<p class="card-text">
								<ul>
									<li>
										<p>&#10004; Harga Lebih Murah</p>
									</li>
									<li>
										<p>&#10004; Kami akan Memilihkan Tutor Terbaik</p>
									</li>
									<li>
										<p>&#10004; Belajar Lebih Terstruktur dan Terjadwal</p>
									</li>
								</ul>
							</p>
							<br>
							<a href="/package/regular" class="btn btn-outline-primary" >Daftar</a>
							<a href="#" class="btn btn-outline-secondary" style="display: inline-block">Pelajari Lebih Lanjut</a>
						</div>
					</div>
				</div>
				<div class="card position-center feature-item" style="width: 25rem;height: 18rem;margin: 0 auto 20px;display: inline-block; border-radius: 5px ">
					<div class="card-body" style="padding: 1px;width: 20rem" >
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
							<h5 class="card-title">Premium Package</h5>
							<h6 class="card-subtitle mb-2 text-muted">Biaya: </h6>
							<p class="card-text">
								<ul>
									<li>
										<p>&#10004; Harga Tetap Murah</p>
									</li>
									<li>
										<p>&#10004; Kamu Dapat Memilih Tutor Favoritmu</p>
									</li>
									<li>
										<p>&#10004; Belajar Sesuai Jam dan Keinginganmu</p>
									</li>
								</ul>
							</p>
							<br>
							<a href="/package/premium" class="btn btn-outline-primary" >Daftar</a>
							<a href="#" class="btn btn-outline-secondary" style="display: inline-block">Pelajari Lebih Lanjut</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Start Feature Area -->
	<section class="feature-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h1>Features That Make Us Hero</h1>
						<p>
							If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for
							as low as $.17 each.
						</p>
					</div>
				</div>
			</div>
			<div class="feature-inner row">
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="ti-crown"></i>
						<h4>Tutor Terjammin</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="ti-book"></i>
						<h4>Sistem Belajar</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="ti-desktop"></i>
						<h4>Sistem Monitoring</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="ti-rocket"></i>
						<h4>Mudah dan Cepat</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="ti-files"></i>
						<h4>Sesuai Kurikulum</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="ti-headphone-alt"></i>
						<h4>24x7 Live Support</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Feature Area -->

	<!-- Start Faculty Area -->
	<section class="faculty-area section-gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h1>Prestasi Tutor</h1>
{{--						<p>--}}
{{--							If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for--}}
{{--							as low as $.17 each.--}}
{{--						</p>--}}
					</div>
				</div>
			</div>
			<div class="row justify-content-center d-flex align-items-center">
				<div class="col-lg-3 col-md-6 col-sm-12 single-faculty">
					<div class="thumb d-flex justify-content-center">
						<img class="img-fluid" src="{{asset('img/faculty/f1.jpg')}}" alt="">
					</div>
					<div class="meta-text text-center">
						<h4>David Santos</h4>
						<p class="designation">Physics Tutor</p>
						<div class="info wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
						<div class="align-items-center justify-content-center d-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 single-faculty">
					<div class="thumb d-flex justify-content-center">
						<img class="img-fluid" src="{{asset('img/faculty/f2.jpg')}}" alt="">
					</div>
					<div class="meta-text text-center">
						<h4>Ahmad Jaeluddin</h4>
						<p class="designation">Natural Science Tutor</p>
						<div class="info wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
						<div class="align-items-center justify-content-center d-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 single-faculty">
					<div class="thumb d-flex justify-content-center">
						<img class="img-fluid" src="{{asset('img/faculty/f3.jpg')}}" alt="">
					</div>
					<div class="meta-text text-center">
						<h4>Rachmat Esak</h4>
						<p class="designation">Tematik Tutor</p>
						<div class="info wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
						<div class="align-items-center justify-content-center d-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 single-faculty">
					<div class="thumb d-flex justify-content-center">
						<img class="img-fluid" src="{{asset('img/faculty/f4.jpg')}}" alt="">
					</div>
					<div class="meta-text text-center">
						<h4>Lena Teller</h4>
						<p class="designation">English Tutor</p>
						<div class="info wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
						<div class="align-items-center justify-content-center d-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Faculty Area -->


	<!-- Start Testimonials Area -->
	<section class="testimonials-area section-gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h1>Testimoni Orang Tua</h1>
					</div>
				</div>
			</div>
			<div class="testi-slider owl-carousel" data-slider-id="1">
				<div class="item">
					<div class="testi-item">
						<img src="{{asset('img/quote.png')}}" alt="">
						<h4>Fanny Maulidia</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi-item">
						<img src="{{asset('img/quote.png')}}" alt="">
						<h4>Jeffry Maulida</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
				<div class="owl-thumb-item">
					<div>
						<img class="img-fluid" src="{{asset('img/testimonial/t1.jpg')}}" alt="">
					</div>
					<div class="overlay overlay-grad"></div>
				</div>
				<div class="owl-thumb-item">
					<div>
						<img class="img-fluid" src="{{asset('img/testimonial/t2.jpg')}}" alt="">
					</div>
					<div class="overlay overlay-grad"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonials Area -->
@endsection