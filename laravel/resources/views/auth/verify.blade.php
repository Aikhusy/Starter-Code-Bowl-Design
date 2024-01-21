@extends('layouts.custom')

@section('title','Verify')
    
@section('content')
<div class="row">
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
      <div class="login-brand">
        <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
      </div>

      <div class="card card-primary">
        <div class="card-header"><h4>Check Your Email to verify</h4></div>

        <div class="card-body">
          @if (session('status') == 'verification-link-sent')
              <div class="mb-4 font-medium text-sm text-green-600">
                  A email verification link has been emailed to you!
              </div>
          @else
              <div class="mb-4 font-medium text-sm text-green-600">
                  Email verification link has been emailed to you!
              </div>
          @endif

          <form method="POST" action="{{route('verification.send')}}">
            @csrf

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block">
                Resend
              </button>
            </div>

          </form>
        </div>
      </div>
      <div class="simple-footer">
        Copyright &copy; Stisla 2018
      </div>
    </div>
  </div>

@endsection