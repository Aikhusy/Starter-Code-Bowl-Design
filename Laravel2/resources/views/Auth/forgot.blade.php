@extends('layouts.authSkeleton')

@section('title','Forgot')

@section('content')

<div class="card-header"><h3 class="text-center font-weight-light my-4">Insert your email address</h3></div>
<div class="card-body">
    <p class="text-center font-weight-light my-4">We will send link to reset your password via email !!</p>
    <form method="POST" class="form" action="#" >
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
        <div class="mt-4 mb-0">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block">Send Link</button>
            </div>
        </div>
    </form>
</div>
@endsection
