@extends('layouts.authentication')
@section('content')
    <div class="main" style="margin-top: -160px">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Daftar Premium Package</h2>
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
                        <form method="post" class="register-form" id="register-form" action="/register/premium">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Nama" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phone" id="phone" placeholder="Phone" required/>
                            </div>
                            <div class="form-group">
                                <label for="idLine"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="idLine" id="idLine" placeholder="idLine" required/>
                            </div>
                            <div class="form-group">
                                <label for="package"><i class="zmdi zmdi-account-box"></i></label>
                                <input type="text" name="package" id="package" value="Premium Package" disabled/>
                            </div>
                            <div class="form-group">
                                <label for="tutor"><i class="zmdi zmdi-account-o"></i></label>
                                <select name="tutor" id="tutor" class="custom-select">
                                    @foreach($tutor as $user)
                                        @if($user!="Admin")
                                            <option value="{{$user->name}}">{{$user->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-my-location"></i></label>
                                <input type="text" name="birthday" id="address" placeholder="Address" required/>
                            </div>
                            <div class="form-group">
                                <label for="country"><i class="zmdi zmdi-flag"></i></label>
                                <input type="text" name="country" id="country" placeholder="Country" required/>
                            </div>
                            <div class="form-group">
                                <label for="province"><i class="zmdi zmdi-flag"></i></label>
                                <input type="text" name="province" id="province" placeholder="Province" required/>
                            </div>
                            <div class="form-group">
                                <label for="postalCode"><i class="zmdi zmdi-flag"></i></label>
                                <input type="text" name="postalCode" id="postalCode" placeholder="postalCode" required/>
                            </div>
                            <div class="form-group">
                                <label for="jamBelajar"><i class="zmdi zmdi-calendar"></i></label>
                                <input type="datetime-local" name="jamBelajar" id="jamBelajar" required/>
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
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Saya Setuju dengan Seluruh Kebijakan di <a href="#" class="term-service">Terms of Services</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Daftar"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('img/signup-image.jpg')}}" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@endsection