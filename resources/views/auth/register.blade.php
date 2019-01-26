<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Money management application.">
    <meta name="author" content="SyedRizwan">

    <title>Kharcha | Login</title>

    <!-- Vendor css -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('css/slim.css') }}">

</head>

<body>
    <div class="d-md-flex flex-row-reverse">
        <div class="signin-right">
            <div class="signin-box signup">
                <h3 class="signin-title-primary">Get Started!</h3>
                <h5 class="signin-title-secondary lh-4">It's free to signup and only takes a minute.</h5>
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first() }}
                </div>
                @endif
                <form method="POST" action="{{ route('register') }}" data-parsley-validate>
                    @csrf
                    <div class="row row-xs mg-b-10">
                        <div class="col-sm">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                        </div>
                    </div>
                    <div class="row row-xs mg-b-10">
                        <div class="col-sm">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                        </div>
                    </div><!-- row -->

                    <div class="row row-xs mg-b-10">
                        <div class="col-sm">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                        </div>
                    </div>
                    <div class="row row-xs mg-b-10">
                        <div class="col-sm">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                        </div>
                    </div><!-- row -->

                    <button class="btn btn-primary btn-block btn-signin">Sign Up</button>

                    <p class="mg-t-40 mg-b-0">Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
                </form>
            </div><!-- signin-box -->
        </div><!-- signin-right -->
        <div class="signin-left">
            <div class="signin-box">
                <h2 class="slim-logo"><a href="index-2.html">kharcha<span>.</span></a></h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p>Browse our site and see for yourself why you need kharcha.</p>

                <p><a href="{{ route('root') }}" class="btn btn-outline-secondary pd-x-25">Learn More</a></p>

                <p class="tx-12">&copy; Copyright 2019. All Rights Reserved.</p>
            </div>
        </div><!-- signin-left -->
    </div><!-- d-flex -->

    <script src="{{ asset('lib/jquery/js/jquery.js') }}"></script>
    <script src="{{ asset('lib/popper.js/js/popper.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('lib/parsleyjs/js/parsley.js') }}"></script>

    <script src="{{ asset('js/slim.js') }}"></script>

    <script>
        $(function(){
        'use strict';

        $('form').parsley();
      });
    </script>

</body>

</html>
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection --}}
