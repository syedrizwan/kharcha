@extends('layouts.app')

@section('content')
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#accountForm"><i class="fa fa-plus"></i> Add Account</a></li>
                {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                {{-- <li class="breadcrumb-item active" aria-current="page">Widgets</li> --}}
            </ol>
            <h6 class="slim-pagetitle">{{ $title }}</h6>
        </div>
        <div class="row">
            @if ($accounts->count() > 0)
            @foreach ($accounts as $account)
            <div class="col-md-10">
                <div class="list-group">
                    <div class="list-group-item pd-y-20">
                        <div class="media">
                            <div class="d-flex mg-r-10 wd-50">
                                {{-- <i class="fa fa-file-text-o tx-primary tx-40 tx"></i> --}}
                                <img src="{{ asset($account->bank->logo) }}" alt="">
                            </div><!-- d-flex -->
                            <div class="media-body">
                                <h6 class="tx-inverse">{{ $account->bank->title }} ({{ $account->type == 0 ? 'Debit' : 'Credit' }})</h6>
                                <p class="mg-b-0">{{ $account->title }}</p>
                            </div><!-- media-body -->
                            <div class="pull-right">
                                <span class="tx-40">{{ session('settings')['currency_symbol'] }}{{ $account->get_balance() }}</span>
                            </div>
                        </div><!-- media -->
                    </div><!-- list-group-item -->
                </div>
            </div>

            {{-- <div class="col-md-3">
                <div class="card card-profile">
                    <div class="card-body">
                        <a href="#"><img src="{{ asset($account->bank->logo) }}" alt=""></a>
            <h4 class="profile-name">{{ $account->bank->title }}</h4>
            <p class="mg-b-20">
                {{ $account->title }}
                @if ($account->account_number != '')
                - x{{ substr($account->account_number, -4) }}
                @endif
            </p>
            <p class="">
                <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
            </p>
            {{-- <a href="#" class="btn btn-outline-primary btn-sm btn-block">Follow</a> 
        </div><!-- card-body -->
    </div>
</div> --}}
@endforeach
@endif
</div>
</div><!-- container -->
</div><!-- slim-mainpanel -->

<div id="accountForm" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
            <form class="" action="index.html" method="post">

                <div class="modal-header pd-y-20 pd-x-25">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body pd-25">
                    <div class="row no-gutters">
                        <div class="form-layout">
                            <div class="row mg-b-25">
                                <div class="col-lg-12">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Which bank are you working with: </label>
                                        <select class="form-control" data-placeholder="Choose bank" name="bank" required>
                                            <option label="Choose bank"></option>
                                            <option value="USA">United States of America</option>
                                            <option value="UK">United Kingdom</option>
                                            <option value="China">China</option>
                                            <option value="Japan">Japan</option>
                                        </select>
                                    </div>
                                </div><!-- col-12 -->
                                <div class="col-lg-12">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">What whould you like to call this account: </label>
                                        <input class="form-control" type="text" name="title" placeholder="Enter account title" required>
                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Your account number (optional): </label>
                                        <input class="form-control" type="text" name="account_number" placeholder="Enter your account number" required>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Your routing number (optional): </label>
                                        <input class="form-control" type="text" name="routing_number" placeholder="Enter your account's routing number" required>
                                    </div>
                                </div><!-- col-4 -->
                            </div><!-- row -->
                        </div><!-- form-layout -->
                    </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary pd-x-25">Save</button>
                    <button type="button" class="btn btn-danger pd-x-25" data-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
            </form>

        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->
@endsection
@section('page-js')
<script src="{{ asset('lib/parsleyjs/js/parsley.js') }}"></script>
@endsection
@section('custom-script')
<script>
    $(function() {
        'use strict';

        $('form').parsley();
    });
</script>
@endsection
