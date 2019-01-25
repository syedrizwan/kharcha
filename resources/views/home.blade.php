@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-2">
          <div class="card">
              <div class="card-body">
                <a href="{{ route('category') }}" class="btn btn-primary btn-block">Categories</a>
              </div>
          </div>
        </div>
          <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  @auth
                    @if (Auth::user()->email_verified_at == null)
                      <div class="alert alert-danger" role="alert">
                          Your email is not verified. Please check your email and click the email verification link.
                      </div>
                    @endif
                  @endauth
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (!$categories_available)
                    <div class="alert alert-danger" role="alert">
                        No Categories defined. <a href="{{ route('add_default_categories') }}">Click here</a> to add default categories.
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
