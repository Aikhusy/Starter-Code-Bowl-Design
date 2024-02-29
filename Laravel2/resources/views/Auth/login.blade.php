@extends('layouts.authSkeleton')

@section('title','Login')

@section('content')
<div class="card-header">
    <h3 class="text-center font-weight-light my-4">Login</h3>
</div>
    <div class="card-body">
    <form action="#" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input name="email" class="form-control @error('email') is-invalid @enderror " id="Email" type="email" placeholder="name@example.com" />
            <label for="Email">Email address</label>

            @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input name="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword" type="password" placeholder="Password" />
            <label for="inputPassword">Password</label>

            @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <a class="small" href="{{route('forgot')}}">Forgot Password?</a>

            <button type="submit" class="btn btn-primary">Login</button>            
        </div>
    </form>
</div>
<div class="card-footer text-center py-3">
<div class="small"><a href="{{route('register')}}">Need an account? Sign up!</a></div>
</div>
@endsection
