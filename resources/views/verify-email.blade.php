<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Kharcha | {{ $title }}</title>

    <!-- Vendor css -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('css/slim.css') }}">

  </head>
  <body>

    <div class="page-error-wrapper">
      <div>
        <h1 class="error-title">Email not Verified</h1>
        <h5 class="tx-sm-24 tx-normal">Oopps. Your email is not verified yet. Please check you email and click verification link.</h5>
        <p class="mg-b-50">If you haven't receive the verification email or the link is not working, please click below.</p>
        <p class="mg-b-50"><a href="{{ route('verification.resend') }}" class="btn btn-primary">Resent Verification Link</a></p>
      </div>

    </div><!-- page-error-wrapper -->

    <script src="{{ asset('lib/jquery/js/jquery.js') }}"></script>
    <script src="{{ asset('lib/popper.js/js/popper.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.js') }}"></script>

    <script src="{{ asset('js/slim.js') }}"></script>

  </body>
</html>
