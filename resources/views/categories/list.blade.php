@extends('layouts.app')

@section('content')
<div class="slim-mainpanel">
    <div class="container">
        <div class="card card-table mg-t-20 mg-sm-t-30">
            <div class="card-header">
                <h6 class="slim-card-title">{{ $title }}</h6>
            </div><!-- card-header -->
            <div class="col-sm-12">
                <form class="" action="{{ route('save_category') }}" method="post">
                    @csrf
                    <div class="row mg-t-5">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="New category's title" required>
                            </div><!-- form-group -->
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary btn-block">Add</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table mg-b-0 tx-13">
                    <thead>
                        <tr class="tx-10">
                            <th class="pd-y-5">Title</th>
                            <th class="pd-y-5 tx-right">Added</th>
                            <th class="pd-y-5 tx-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($categories->count() > 0)
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->title }}</td>
                            <td class="valign-middle tx-right">{{ $category->created_at->diffForHumans() }}</td>
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
                <div class="pull-right">
                    {{ $categories->links() }}
                </div>
                <div class="">
                    <a href="{{ route('new_category') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Category</a>
                </div>
            </div><!-- card-footer -->
        </div><!-- card -->
    </div><!-- container -->
</div><!-- slim-mainpanel -->
@endsection
