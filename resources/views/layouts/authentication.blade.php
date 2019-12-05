<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-signin-client_id" content="162698303290-0dliv8rtslgpu2u3lvmrqloot2i30u8i.apps.googleusercontent.com">
    <title>KlikBelajar</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<header style="padding-top: 30px;">
    <center>
        <div id="logo">
            <a href="/"><img src="{{asset('img/klikbelajar-blue.png')}}" width="300px" alt="" title="" /></a>
        </div>
    </center>
</header>

@yield('content')

<footer class="footer-area section-gap">
    <div class="container" style="background-color: transparent;box-shadow: none">
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
            <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
<!-- JS -->
<script src="{{asset('js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    }
</script>
</body>
</html>