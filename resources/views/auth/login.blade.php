@extends('layouts.errorPage')

@section('content')


    <!-- start hero section -->
    <section id="home" class="no-padding parallax  md-position-relative wow fadeIn" data-stellar-background-ratio="0.5" style="background-image:url('images/homepage-9-parallax-img5.jpg');" >
        <div class="opacity-medium bg-extra-dark-gray display-none md-display-block"></div>
        <div class="container position-relative full-screen">
            <div class="slider-typography">
                <div class="slider-text-middle-main xs-padding-15px-lr">
                    <div class="slider-text-middle alt-font row">
                        <div class="col-md-8 wow fadeIn center-col">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-5 col-md-offset-1">
                                        <div class="text-white" style="padding: 3.5% 6%;">
                                            <div class="card-header">{{ __('Login') }}</div>

                                            <div class="card-body">
                                                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                                    @csrf

                                                    <div class="form-group row">
                                                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                        <div class="col-md-12">
                                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                            @if ($errors->has('email'))
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                        <div class="col-md-12">
                                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                            @if ($errors->has('password'))
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                            @endif
                                                        </div>
                                                    </div>



                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-12">


                                                                <a class="btn btn-link text-deep-pink " href="{{ route('password.request') }}">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a>


                                                        </div>
                                                        <div class="col-md-12 ">
                                                            <button type="submit" class="btn btn-small btn-rounded btn-transparent-deep-pink inner-link right" style="float:  right;margin-right: 35px;">
                                                                {{ __('Login') }}
                                                            </button>




                                                            <a class="btn btn-link text-deep-pink" href="{{ route('register') }}">
                                                                {{ __('Create Account !') }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end hero section -->

@endsection
