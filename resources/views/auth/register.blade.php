@extends('layouts.authentication.master')
@section('title', 'Sign-up-two')

@section('css')
@endsection



@section('content')
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-xl-7 p-0"><img class="bg-img-cover bg-center" src="{{asset('assets/images/login/1.jpg')}}" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card">
                <div>
                    <div><a class="logo" href="{{ route('index') }}"><img class="img-fluid for-light" src="{{asset('assets/images/logo/login.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt="looginpage"></a></div>
                    <div class="login-main">
                        @if(count($errors) > 0)
                        @foreach( $errors->all() as $message )
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            <span>{{ $message }}</span>
                        </div>
                        @endforeach
                        @endif
                        <form class="theme-form" method="POST" action="{{route('register')}}">
                            @csrf
                            <h4>{{__('Create your account')}}</h4>
                            <p>{{__('Enter your personal details to create account')}}</p>
                            <div class="form-group">
                                <label class="col-form-label">{{__('Your Full Name')}}</label>
                                <input class="form-control" type="text" value="{{old('name')}}" required="" name="name" placeholder="{{__('Full name')}}">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">{{__('Email Address')}}</label>
                                <input class="form-control" type="email" value="{{old('email')}}" name="email" required="" placeholder="test@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <input class="form-control" type="password" value="{{old('password')}}" name="password" required="" placeholder="*********">
                                <div class="show-hide"><span class="show"></span></div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">{{__('Password Confirmation')}}</label>
                                <input class="form-control" type="password" name="password_confirmation" required="" placeholder="*********">
                                <div class="show-hide"><span class="show"></span></div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox" value="{{old('terms')}}" name="terms" >
                                    <label class="text-muted" for="checkbox1">{{__('Agree with')}}<a class="ms-2" href="#">{{__('Privacy Policy')}}</a></label>
                                </div>
                                <button class="btn btn-primary btn-block" type="submit">{{__('Create Account')}}</button>
                            </div>
                            <h6 class="text-muted mt-4 or">{{__('Or signup with')}}</h6>
                            <div class="social mt-4">
                                <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                            </div>
                            <p class="mt-4 mb-0">{{__('Already have an account?')}}<a class="ms-2" href="{{ route('login') }}">Sign in</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection