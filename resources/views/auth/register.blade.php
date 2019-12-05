@extends('layouts.authentication')
@section('content')
    <div class="main" style="margin-top: -160px">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Daftar</h2>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form method="post" class="register-form" id="register-form" enctype="multipart/form-data" action="/register">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Nama"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-my-location"></i></label>
                                <input type="text" name="birthday" id="address" placeholder="Address"/>
                            </div>
                            <div class="form-group">
                                <label for="country"><i class="zmdi zmdi-flag"></i></label>
                                <input type="text" name="country" id="country" placeholder="Country"/>
                            </div>
                            <div class="form-group">
                                <label for="province"><i class="zmdi zmdi-flag"></i></label>
                                <input type="text" name="province" id="province" placeholder="Province"/>
                            </div>
                            <div class="form-group">
                                <label for="postalCode"><i class="zmdi zmdi-flag"></i></label>
                                <input type="text" name="postalCode" id="postalCode" placeholder="postalCode"/>
                            </div>
                            <div class="form-group">
                                <label for="idCard"><i class="zmdi zmdi-file"></i></label>
                                <input type="file" name="idCard" id="idCard" placeholder="idCard"/>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>--}}
{{--                                <input type="password" name="pass" id="pass" placeholder="Password" required/>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>--}}
{{--                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>--}}
{{--                                <span id='message' style="padding-top: 5px;font-weight: 500"></span>--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term"/>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Saya Setuju dengan Seluruh Kebijakan di <a href="#" class="term-service">Terms of Services</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Daftar"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('img/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a class="signup-image-link">Sudah punya Akun?</a><a href="{{route('login')}}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('#pass, #re_pass').on('keyup', function () {
            if ($('#pass').val() == $('#re_pass').val()) {
                $('#message').html('Password Sesuai').css('color', 'green');
            } else
                $('#message').html('Password Tidak Sesuai').css('color', 'red');
        });
    </script>
@endsection