@extends('layouts.app')

@section('content')
<div class="slim-mainpanel">
    <div class="container">
        <div class="card card-table mg-t-20 mg-sm-t-30">
            <div class="card-header">
                <h6 class="slim-card-title">{{ $title }}</h6>
            </div><!-- card-header -->
            <div class="table-responsive">
                <table class="table mg-b-0 tx-13">
                    <thead>
                        <tr class="tx-10">
                            <th class="wd-10p pd-y-5 tx-center">#</th>
                            <th class="pd-y-5">Title</th>
                            <th class="pd-y-5 tx-right">Added</th>
                            <th class="pd-y-5 tx-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($categories->count() > 0)
                        @foreach ($categories as $category)
                        <tr>
                            <td class="tx-center"></td>
                            <td>{{ $category->title }}</td>
                            <td class="valign-middle tx-right">{{ $category->created_at }}</td>
                            <td class="valign-middle tx-center">
                                <a href="#" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="4">No category defined yet. <a href="{{ route('add_default_categories') }}">Click here</a> to add default categories. </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div><!-- table-responsive -->
            <div class="card-footer tx-12 pd-y-15 bg-transparent">
                <a href="#"><i class="fa fa-angle-down mg-r-5"></i>View All Products</a>
            </div><!-- card-footer -->
        </div><!-- card -->
    </div><!-- container -->
</div><!-- slim-mainpanel -->
@endsection
