<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kharcha | {{ $title }}</title>

    <!-- vendor css -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/SpinKit/css/spinkit.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet">
    @yield('page-css')

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{asset('css/slim.css')}}">
</head>

<body class="dashboard-4">
    <div class="slim-header">
        <div class="container">
            <div class="slim-header-left">
                <h2 class="slim-logo"><a href="{{ asset('home') }}">kharcha<span>.</span></a></h2>
                <div class="">

                </div><!-- search-box -->
            </div><!-- slim-header-left -->
            <div class="slim-header-right">
                <div class="dropdown dropdown-b">
                    <a href="#" class="header-notification" data-toggle="dropdown">
                        <i class="icon ion-ios-bell-outline"></i>
                        <span class="indicator"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-header">
                            <h6 class="dropdown-menu-title">Notifications</h6>
                            <div>
                                <a href="#">Mark All as Read</a>
                                <a href="#">Settings</a>
                            </div>
                        </div><!-- dropdown-menu-header -->
                        <div class="dropdown-list">
                            <!-- loop starts here -->
                            <a href="#" class="dropdown-link">
                                <div class="media">
                                    <img src="../img/img8.jpg" alt="">
                                    <div class="media-body">
                                        <p><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                                        <span>October 03, 2017 8:45am</span>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <!-- loop ends here -->
                            <a href="#" class="dropdown-link">
                                <div class="media">
                                    <img src="../img/img9.jpg" alt="">
                                    <div class="media-body">
                                        <p><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                                        <span>October 02, 2017 12:44am</span>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <a href="#" class="dropdown-link read">
                                <div class="media">
                                    <img src="../img/img10.jpg" alt="">
                                    <div class="media-body">
                                        <p>20+ new items added are for sale in your <strong>Sale Group</strong></p>
                                        <span>October 01, 2017 10:20pm</span>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <a href="#" class="dropdown-link read">
                                <div class="media">
                                    <img src="../img/img2.jpg" alt="">
                                    <div class="media-body">
                                        <p><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                                        <span>October 01, 2017 6:08pm</span>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <div class="dropdown-list-footer">
                                <a href="page-notifications.html"><i class="fa fa-angle-down"></i> Show All Notifications</a>
                            </div>
                        </div><!-- dropdown-list -->
                    </div><!-- dropdown-menu-right -->
                </div><!-- dropdown -->
                <div class="dropdown dropdown-c">
                    <a href="#" class="logged-user" data-toggle="dropdown">
                        <img src="{{ asset(session('user')->profile_picture) }}" alt="">
                        <span>{{ session('user')->name }}</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <nav class="nav">
                            <a href="page-profile.html" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                            <a href="page-edit-profile.html" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a>
                            <a href="page-activity.html" class="nav-link"><i class="icon ion-ios-bolt"></i> Activity Log</a>
                            <a href="page-settings.html" class="nav-link"><i class="icon ion-ios-gear"></i> Account Settings</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="icon ion-forward"></i> Sign Out
                            </a>
                        </nav>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </div><!-- header-right -->
        </div><!-- container -->
    </div><!-- slim-header -->

    @include('layouts.nav-bar')

    @yield('content')

    <div class="slim-footer bd-0">
        {{-- <div class="container">
        <p>Copyright 2019 &copy; All Rights Reserved.</p>
        <p>Designed by: <a href="#">ThemePixels</a></p>
      </div><!-- container --> --}}
    </div><!-- slim-footer -->

    <div id="emailNotVerifiedMessage" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon icon ion-ios-email-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-danger mg-b-20">Your email is not verified!</h4>
                    <p class="mg-b-10 mg-x-20">You may experience an account lockout if you don't verify your email.</p>
                    <p class="mg-b-20">If you haven't receive the verification email or the link is not working, please click 'Resent Verification Link' below.</p>
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <a href="{{ route('verification.resend') }}" class="btn btn-primary">Resent Verification Link</a>
                    <button type="button" class="btn btn-danger pd-x-25" data-dismiss="modal" aria-label="Close">Continue</button>
                </div>
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->

    <div id="spinner" class="sk-chasing-dots" style="display: none">
      <div class="sk-child sk-dot1"></div>
      <div class="sk-child sk-dot2"></div>
    </div>

    <script src="{{ asset('lib/jquery/js/jquery.js') }}"></script>
    <script src="{{ asset('lib/popper.js/js/popper.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('lib/jquery.cookie/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('lib/block-ui/block-ui.min.js') }}"></script>
    <script src="{{ asset('lib/selectize/js/standalone/selectize.js') }}"></script>
    @yield('page-js')

    <script src="{{ asset('js/slim.js') }}"></script>
    @yield('custom-script')
    <script>
        function block_ui() {
            $.blockUI({
              message: $("#spinner"),
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#fff',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: 1,
                    color: '#fff'
                },
                overlayCSS: {
                  backgroundColor: '#fff',
               }
            });
        }
        $(function() {
            'use strict';
            @if (session('user')->email_verified_at == null)
            $('#emailNotVerifiedMessage').modal('show');
            @endif

            $('select').selectize();
        });
    </script>
</body>

</html>
