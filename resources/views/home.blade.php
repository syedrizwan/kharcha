@extends('layouts.app')

@section('content')
<div class="slim-mainpanel">
    <div class="container pd-t-30">
        <div class="dash-headline-two">
            <div>
              {{-- <h4 class="tx-inverse mg-b-5">Welcome, {{ session('user')->name }}!</h4> --}}
                <h4 class="tx-inverse mg-b-5">Welcome, {{ session('user')->name }}!</h4>
                {{-- <p class="mg-b-0">You are viewing {{ session('current_budget_title') }}</p> --}}
            </div>
            <div class="d-h-t-right">
                @if (session('user')->budgets->count() == 1)
                  <button class="btn btn-outline-primary" type="button">
                      {{ session('current_budget_title') }}
                  </button>
                @else
                  <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{ session('current_budget_title') }}
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                      @foreach (session('user')->budgets as $budget)
                        @if ($budget->id == session('current_budget_id'))
                          @continue
                        @endif
                        <a onclick="block_ui()" class="dropdown-item" href="{{ route('budget.setCurrent', $budget->id) }}">{{ $budget->title }}</a>
                      @endforeach
                  </div><!-- dropdown-menu -->
                @endif
            </div>
        </div><!-- dash-headline-two -->

        <div class="nav-statistics-wrapper">
            <nav class="nav">
                <a href="#" class="nav-link active">Overview</a>
                <a href="#" class="nav-link">Employee</a>
                <a href="#" class="nav-link">Products</a>
                <a href="#" class="nav-link">Misc</a>
            </nav>
            <nav class="nav">
                <a href="#" class="nav-link">Today</a>
                <a href="#" class="nav-link active">This Week</a>
                <a href="#" class="nav-link">This Month</a>
            </nav>
        </div><!-- nav-statistics-wrapper -->

        <div class="row row-statistics mg-b-30">
            <div class="col-5">
                <h1 class="tx-inverse tx-56 tx-lato tx-bold">34,100</h1>
                <h6 class="tx-15 tx-inverse tx-bold mg-b-20">Total hours spent (7 days)</h6>
                <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem</p>
                <p class="tx-12">
                    <a href="#">View Details</a>
                    <a href="#">Edit Settings</a>
                </p>
            </div><!-- col-5 -->
            <div class="col-7">
                <canvas id="chartBar1" height="280"></canvas>
            </div><!-- col-7 -->
        </div><!-- row -->

        <hr>

        <div class="report-summary-header">
            <div>
                <h4 class="tx-inverse mg-b-3">Overall Report Summary</h4>
                <p class="mg-b-0"><i class="icon ion-calendar mg-r-3"></i> January 01, 2018 - January 31, 2018</p>
            </div>
            <div>
                <a href="#" class="btn btn-secondary"><i class="icon ion-ios-clock-outline tx-22"></i> Activity Logs</a>
                <a href="#" class="btn btn-secondary"><i class="icon ion-ios-gear-outline tx-24"></i> Edit Settings</a>
            </div>
        </div><!-- d-flex -->

        <div class="row no-gutters dashboard-chart-one">
            <div class="col">
                <div class="card card-total">
                    <div>
                        <h1>420</h1>
                        <p>Total Employee</p>
                    </div>
                    <div>
                        <div class="tx-24 mg-b-10 tx-center op-5">
                            <i class="icon ion-man tx-gray-600"></i>
                            <i class="icon ion-man tx-gray-600"></i>
                            <i class="icon ion-man tx-gray-600"></i>
                            <i class="icon ion-man tx-gray-600"></i>
                            <i class="icon ion-man tx-gray-600"></i>
                            <i class="icon ion-man tx-gray-600"></i>
                            <i class="icon ion-man tx-gray-400"></i>
                            <i class="icon ion-man tx-gray-400"></i>
                            <i class="icon ion-man tx-gray-400"></i>
                            <i class="icon ion-man tx-gray-400"></i>
                        </div>
                        <label>Female (66%)</label>
                        <div class="progress mg-b-10">
                            <div class="progress-bar bg-primary progress-bar-xs wd-65p" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->

                        <label>Male (34%)</label>
                        <div class="progress">
                            <div class="progress-bar bg-danger progress-bar-xs wd-35p" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->
                    </div>
                </div><!-- card -->
            </div><!-- col -->
            <div class="col">
                <div class="card card-total">
                    <div>
                        <h1>55</h1>
                        <p>Total Products</p>
                    </div>
                    <div>
                        <div class="tx-16 mg-b-15 tx-center op-5">
                            <i class="icon ion-cube tx-gray-600"></i>
                            <i class="icon ion-cube tx-gray-600"></i>
                            <i class="icon ion-cube tx-gray-600"></i>
                            <i class="icon ion-cube tx-gray-600"></i>
                            <i class="icon ion-cube tx-gray-600"></i>
                            <i class="icon ion-cube tx-gray-600"></i>
                            <i class="icon ion-cube tx-gray-600"></i>
                            <i class="icon ion-cube tx-gray-600"></i>
                            <i class="icon ion-cube tx-gray-400"></i>
                            <i class="icon ion-cube tx-gray-400"></i>
                        </div>
                        <label>Digital products (85%)</label>
                        <div class="progress mg-b-10">
                            <div class="progress-bar bg-success progress-bar-xs wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->

                        <label>Non-digital products (15%)</label>
                        <div class="progress">
                            <div class="progress-bar bg-warning progress-bar-xs wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->
                    </div>
                </div><!-- card -->
            </div><!-- col -->
            <div class="col">
                <div class="card card-total">
                    <div>
                        <h1>30</h1>
                        <p>Total Franchise</p>
                    </div>
                    <div>
                        <div class="tx-22 mg-b-10 tx-center op-5">
                            <i class="icon ion-location tx-gray-600"></i>
                            <i class="icon ion-location tx-gray-600"></i>
                            <i class="icon ion-location tx-gray-600"></i>
                            <i class="icon ion-location tx-gray-600"></i>
                            <i class="icon ion-location tx-gray-600"></i>
                            <i class="icon ion-location tx-gray-600"></i>
                            <i class="icon ion-location tx-gray-600"></i>
                            <i class="icon ion-location tx-gray-400"></i>
                            <i class="icon ion-location tx-gray-400"></i>
                            <i class="icon ion-location tx-gray-400"></i>
                        </div>
                        <label>Local (75%)</label>
                        <div class="progress mg-b-10">
                            <div class="progress-bar bg-purple progress-bar-xs wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->

                        <label>International (25%)</label>
                        <div class="progress">
                            <div class="progress-bar bg-pink progress-bar-xs wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->
                    </div>
                </div><!-- card -->
            </div><!-- col -->
            <div class="col-4">
                <div class="card card-revenue">
                    <h6>Monthly Revenue</h6>
                    <p>Calculated every 15th of the month</p>
                    <h1>$32,500 <span class="tx-success">1.4% up</span></h1>
                    <div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>
                    <label>Last month: <span>$79,554</span></label>
                </div><!-- card -->
            </div><!-- col-4 -->
        </div><!-- row -->

        <hr>

        <div class="report-summary-header">
            <div>
                <h4 class="tx-inverse mg-b-3">Most Popular Products</h4>
                <p class="mg-b-0"><i class="icon ion-calendar mg-r-3"></i> January 01, 2018 - January 31, 2018</p>
            </div>
            <div>
                <a href="#" class="btn btn-secondary">Top Rated Products</a>
                <a href="#" class="btn btn-secondary">View All Products</a>
            </div>
        </div><!-- d-flex -->

        <div class="row row-sm">
            <div class="col-4">
                <div class="card card-popular-product">
                    <label class="prod-id">Product ID: #PD-1754</label>
                    <h5 class="prod-name"><a href="#">US 360 Home Security IP Camera Night</a></h5>
                    <p class="prod-by">By: <a href="#">ThmPxls Security</a></p>
                    <div class="row">
                        <div class="col-5">
                            <h1>1885</h1>
                            <p>Total Sales</p>
                        </div><!-- col -->
                        <div class="col-7">
                            <h1>$12,056</h1>
                            <p>Earnings</p>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- card -->
            </div><!-- col-4 -->
            <div class="col-4">
                <div class="card card-popular-product">
                    <label class="prod-id">Product ID: #PD-1753</label>
                    <h5 class="prod-name"><a href="#">US KS-5 Junior Lite DVD Karaoke 9500</a></h5>
                    <p class="prod-by">By: <a href="#">ThmPxls Security</a></p>
                    <div class="row">
                        <div class="col-5">
                            <h1>1862</h1>
                            <p>Total Sales</p>
                        </div><!-- col -->
                        <div class="col-7">
                            <h1>$13,113</h1>
                            <p>Earnings</p>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- card -->
            </div><!-- col-4 -->
            <div class="col-4">
                <div class="card card-popular-product">
                    <label class="prod-id">Product ID: #PD-1754</label>
                    <h5 class="prod-name"><a href="#">US 360 Home Security IP Camera Night</a></h5>
                    <p class="prod-by">By: <a href="#">ThmPxls Digital</a></p>
                    <div class="row">
                        <div class="col-5">
                            <h1>1799</h1>
                            <p>Total Sales</p>
                        </div><!-- col -->
                        <div class="col-7">
                            <h1>$11,091</h1>
                            <p>Earnings</p>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- card -->
            </div><!-- col-4 -->
        </div><!-- row -->

    </div><!-- container -->
</div><!-- slim-mainpanel -->
@endsection
@section('page-js')
<script src="{{ asset('lib/d3/js/d3.js') }}"></script>
<script src="{{ asset('lib/rickshaw/js/rickshaw.min.js') }}"></script>
<script src="{{ asset('lib/chart.js/js/Chart.js') }}"></script>

<script src="{{ asset('js/ResizeSensor.js') }}"></script>
@endsection
@section('custom-script')
<script>
    $(function() {
        'use strict'

        var rs3 = new Rickshaw.Graph({
            element: document.querySelector('#rs3'),
            renderer: 'line',
            series: [{
                data: [{
                        x: 0,
                        y: 5
                    },
                    {
                        x: 1,
                        y: 7
                    },
                    {
                        x: 2,
                        y: 10
                    },
                    {
                        x: 3,
                        y: 11
                    },
                    {
                        x: 4,
                        y: 12
                    },
                    {
                        x: 5,
                        y: 10
                    },
                    {
                        x: 6,
                        y: 9
                    },
                    {
                        x: 7,
                        y: 7
                    },
                    {
                        x: 8,
                        y: 6
                    },
                    {
                        x: 9,
                        y: 8
                    },
                    {
                        x: 10,
                        y: 9
                    },
                    {
                        x: 11,
                        y: 10
                    },
                    {
                        x: 12,
                        y: 7
                    },
                    {
                        x: 13,
                        y: 10
                    }
                ],
                color: '#1B84E7',
            }]
        });
        rs3.render();

        // Responsive Mode
        new ResizeSensor($('.slim-mainpanel'), function() {
            rs3.configure({
                width: $('#rs3').width(),
                height: $('#rs3').height()
            });
            rs3.render();
        });


        var ctx1 = document.getElementById('chartBar1').getContext('2d');
        var myChart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 39, 20, 10, 25, 18, 12, 39, 20, 10, 25, 18],
                    backgroundColor: '#27AAC8'
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false,
                    labels: {
                        display: false
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontSize: 10,
                            max: 80
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontSize: 11
                        }
                    }]
                }
            }
        });

    });
</script>
@endsection
