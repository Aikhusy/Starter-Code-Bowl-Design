@extends('layouts.authSkeleton')

@section('title','Verify')

@section('content')

<div class="card-header"><h3 class="text-center font-weight-light my-4">Check your email to verify!!</h3></div>
<div class="card-body">
    <form method="POST" class="form" action="#" >
        @csrf
        <div class="mt-4 mb-0">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block">Resend Email</button>
            </div>
        </div>
    </form>
</div>
@endsection
