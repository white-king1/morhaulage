@extends('layouts.app')
<br>
<br>
@section('content')
<!-- Mobile Navigation -->
<div class="apbc-mobile-navigation">
    <div class="apbc-mobile-menu-wrapper" style="margin-left:10%;">
        <a href="#" class="apbc-mobile-menu-close"><i class="fas fa-times"></i></a>
        <nav>
            <ul>
                <li><a class="nav-link" href="{{ route('welcome') }}" class="active">Home</a></li>
                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">Signup</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- Mobile Navigation End -->

<div class="container" style=" margin-bottom:10%;">
    <div class="apbc-headline">
        <div class="col-md-4">
            <img class="img-fluid" src="/assets/img/business-4/fgp.png" alt="forgot password" width="100" height="50" >

        </div>
        <center>
            <h6> FOR A QUICK RESET OF YOUR PASSWORD FOLOW THE INSTRUCTIONS BELOW</h6>

        </center>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
