<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('img/klikbelajar.ico')}}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>KlikBelajar</title>

    <!--
            Google Font
            ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body>

<!-- Start Header Area -->
    <header id="header">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="/"><img src="{{asset('img/logo-klikbelajar.svg')}}" width="150px" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="/">Home</a></li>
                        <li><a href="about.blade.php">Tentang Kami</a></li>
                        <li><a href="courses.blade.php">Pelajaran</a></li>
                        <li><a href="">Tutor Kami</a>
                            {{--						<li class="menu-has-children"><a href="">Our Tutor</a>--}}
                            {{--							<ul>--}}
                            {{--								<li><a href="elements.blade.php">Elements</a></li>--}}
                            {{--							</ul>--}}
                        </li>
                        <li><a href="">Tryout</a>
                            {{--						<li class="menu-has-children"><a href="">Tryout</a>--}}
                            {{--							<ul>--}}
                            {{--								<li><a href="blog-home.blade.php">Blog Home</a></li>--}}
                            {{--								<li><a href="blog-single.blade.php">Blog Details</a></li>--}}
                            {{--							</ul>--}}
                        </li>
                        <li><a href="contact.blade.php">Kontak</a></li>
                        @guest
                            <li><a href="{{route('login')}}">Login Admin</a></li>
                        @else
                            @if(Auth::user()->isAdmin)
                                <li class="dropdown"><a>{{Auth::user()->name}}</a>
                                    <ul>
                                        <li><a href="/register">Daftar Tutor</a></li>
                                        <li><a href="{{route('logout')}}" style="font-weight: 300;color: red"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">Keluar</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
    {{--                        @else--}}
    {{--                            <li class="dropdown"><a href="{/profile">{{Auth::user()->name}}</a>--}}
    {{--                                <ul>--}}
    {{--                                    <li><a href="/profile">Profile</a></li>--}}
    {{--                                    <li><a href="{{route('logout')}}" style="font-weight: 300;color: red"--}}
    {{--                                           onclick="event.preventDefault();--}}
    {{--                                                         document.getElementById('logout-form').submit();">Keluar</a>--}}
    {{--                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
    {{--                                            {{ csrf_field() }}--}}
    {{--                                        </form>--}}
    {{--                                    </li>--}}
    {{--                                </ul>--}}
    {{--                            </li>--}}
                            @endif
                        @endguest
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header>
@yield('content')
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>IPA</h4>
                    <ul>
                        <li><a href="#">Matematika</a></li>
                        <li><a href="#">Fisika</a></li>
                        <li><a href="#">Kimia</a></li>
                        <li><a href="#">Biologi</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>IPS</h4>
                    <ul>
                        <li><a href="#">Sosiologi</a></li>
                        <li><a href="#">Sejarah</a></li>
                        <li><a href="#">Ekonomi</a></li>
                        <li><a href="#">Geografi</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>JENJANG</h4>
                    <ul>
                        <li><a href="#">SD</a></li>
                        <li><a href="#">SMP</a></li>
                        <li><a href="#">SMA</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>OTHERS</h4>
                    <ul>
                        <li><a href="#">Tryout Online</a></li>
                        <li><a href="#">Report Siswa</a></li>
                        <li><a href="#">Video Pembahasan</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Remind Me</h4>
                    <p>Kami akan mengirimi Anda info-info menarik</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Alamat Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                   required="" type="email">
                            <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a >KlikBelajar</a></p>
                <div class="col-lg-4 col-md-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="https://instagram.com/klikbelajar"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
<!-- End Footer Area -->

<!-- ####################### Start Scroll to Top Area ####################### -->
    <div id="back-top">
        <a title="Go to Top" href="#"></a>
    </div>
<!-- ####################### End Scroll to Top Area ####################### -->
</body>

<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{asset('js/easing.min.js')}}"></script>
<script src="{{asset('js/hoverIntent.js')}}"></script>
<script src="{{asset('js/superfish.min.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/owl-carousel-thumb.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/parallax.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/mail-script.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</html>