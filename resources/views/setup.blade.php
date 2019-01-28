@extends('layouts.app')

@section('page-css')
<link href="{{ asset('lib/jquery.steps/css/jquery.steps.css') }}" rel="stylesheet">
<link href="{{ asset('lib/jquery-toggles/css/toggles-full.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="slim-mainpanel">
    <div class="container pd-t-30">
        <div class="dash-headline-two">
            <div>
                <h4 class="tx-inverse mg-b-5">Welcome, {{ Auth::user()->name }}!</h4>
                <p class="mg-b-0">Lets get your account setup to use</p>
            </div>
        </div><!-- container -->

        <div class="section-wrapper mg-t-20">
            {{-- <label class="section-title">Equal Width Step Indicator</label>
            <p class="mg-b-20 mg-sm-b-40">A basic wizard that adds a custom style to make the step indicator equal width.</p> --}}

            <div id="wizard4">
                <h3>Budget</h3>
                <section>
                    <p>Start by creating a budget</p>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-9">
                                <label class="form-control-label">Title: </label>
                                <input id="title" class="form-control" name="title" placeholder="Enter budget title" type="text" required>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-12">

                                        <label class="form-control-label">Make this my default budget: </label>
                                    </div>
                                </div>
                                <div class="row mg-t-10">
                                    <div class="col-md-12">
                                        <div class="toggle-wrapper">
                                            <div class="toggle toggle-light success"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- form-group -->
                    <div class="form-group">
                        <label class="form-control-label">Duration: </label>
                        <div class="row">
                            <div class="col-md-6">
                                <input id="startDate" class="form-control fc-datepicker" name="start_date" placeholder="Select start date" type="text" required>
                            </div>
                            <div class="col-md-6">
                                <input id="endDate" class="form-control fc-datepicker" name="end_date" placeholder="Select end date" type="text" required>
                            </div>
                        </div>
                    </div><!-- form-group -->
                </section>
                <h3>Categories</h3>
                <section>
                    <p>Wonderful transition effects.</p>
                </section>
                <h3>Finish</h3>
                <section>
                    <h2>You are all set. Click the finish button to go to your dashboard.</h2>
                </section>
            </div>
        </div><!-- section-wrapper -->
    </div>
</div><!-- slim-mainpanel -->
@endsection

@section('page-js')
<script src="{{ asset('lib/jquery.steps/js/jquery.steps.js') }}"></script>
<script src="{{ asset('lib/parsleyjs/js/parsley.js') }}"></script>
<script src="{{ asset('lib/jquery-toggles/js/toggles.min.js') }}"></script>
<script src="{{ asset('lib/moment/js/moment.js') }}"></script>
<script src="{{ asset('lib/jquery-ui/js/jquery-ui.js') }}"></script>
@endsection

@section('custom-script')
<script>
    $(function() {
        'use strict'

        $('#wizard4').steps({
            headerTag: 'h3',
            bodyTag: 'section',
            autoFocus: true,
            titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
            cssClass: 'wizard step-equal-width',
            // onStepChanging: function(event, currentIndex, newIndex) {
            //     if (currentIndex < newIndex) {
            //         // Step 1 form validation
            //         if (currentIndex === 0) {
            //             var title = $('#title').parsley();
            //             var startDate = $('#startDate').parsley();
            //             var endDate = $('#endDate').parsley();
            //
            //             if (title.isValid() && startDate.isValid() && endDate.isValid()) {
            //                 return true;
            //             } else {
            //                 title.validate();
            //                 startDate.validate();
            //                 endDate.validate();
            //             }
            //         }
            //
            //         // Step 2 form validation
            //         // if(currentIndex === 1) {
            //         //   var email = $('#email').parsley();
            //         //   if(email.isValid()) {
            //         //     return true;
            //         //   } else { email.validate(); }
            //         // }
            //         // Always allow step back to the previous step even if the current step is not valid.
            //     } else {
            //         return true;
            //     }
            // }
        });

        $('.toggle').toggles({
            on: true,
            height: 26,
            text: {
                on: 'YES', // text for the ON position
                off: 'NO' // and off
            },
        });

        $('.fc-datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
        });
    });
</script>
@endsection
