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
    <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="stylesheet">
    @yield('page-css')

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{asset('css/slim.css')}}">


</head>

<body class="dashboard-4">
    <div class="slim-header">
        <div class="container">
            <div class="slim-header-left">
                <h2 class="slim-logo"><a href="{{ asset('home') }}">kharcha<span>.</span></a></h2>
                @if (Auth::User()->budgets()->count() > 0)
                <div class="">
                    {{-- <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button> --}}
                </div><!-- search-box -->
                @endif
            </div><!-- slim-header-left -->
            <div class="slim-header-right">
                {{-- <div class="dropdown dropdown-a">
            <a href="#" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-ios-bolt-outline"></i>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Activity Logs</h6>
                <div>
                  <a href="#">Filter List</a>
                  <a href="#">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-activity-list">
                <div class="activity-label">Today, December 13, 2017</div>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">10:15am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">Purchased christmas sale cloud storage</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">9:48am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-danger"></span></div>
                    <div class="col-8">Login failure</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">7:29am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-warning"></span></div>
                    <div class="col-8">(D:) Storage almost full</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">3:21am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">1 item sold <strong>Christmas bundle</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-label">Yesterday, December 12, 2017</div>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">6:57am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">Earn new badge <strong>Elite Author</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
              </div><!-- dropdown-activity-list -->
              <div class="dropdown-list-footer">
                <a href="page-activity.html"><i class="fa fa-angle-down"></i> Show All Activities</a>
              </div>
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown --> --}}
                {{-- <div class="dropdown dropdown-b">
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
          </div><!-- dropdown --> --}}
                <div class="dropdown dropdown-c">
                    <a href="#" class="logged-user" data-toggle="dropdown">
                        <img src="{{ asset(Auth::user()->profile_picture) }}" alt="">
                        <span>{{ Auth::user()->name }}</span>
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

    @if (Auth::user()->categories()->count() > 0 && Auth::user()->budgets()->count() > 0)
    @include('layouts.nav-bar')
    @endif
    <div class="slim-mainpanel">
        <div class="container pd-t-10">
            @if (Auth::user()->email_verified_at == null)
            <div class="alert alert-danger" role="alert">
                Your email is not verified. Please check your email and click the email verification link. <a href="{{ route('verification.resend') }}">Click here to request another verification link</a>
            </div>
            @endif
    </div>
    </div>
    @yield('content')

    <div class="slim-footer">
        {{-- <div class="container">
        <p>Copyright 2019 &copy; All Rights Reserved.</p>
        <p>Designed by: <a href="#">ThemePixels</a></p>
      </div><!-- container --> --}}
    </div><!-- slim-footer -->

    <script src="{{ asset('lib/jquery/js/jquery.js') }}"></script>
    <script src="{{ asset('lib/popper.js/js/popper.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('lib/jquery.cookie/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('lib/select2/js/select2.full.min.js') }}"></script>
    @yield('page-js')

    <script src="{{ asset('js/slim.js') }}"></script>
    @yield('custom-script')
    {{-- <script>
        $(function(){
      'use strict';

      // $('.select2').select2({
      //   minimumResultsForSearch: Infinity
      // });
    });
    </script> --}}
</body>

</html>
