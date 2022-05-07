@extends('layouts.backend.authmaster')
@section('content')
<div class="card">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Sign-In</h4>
                <div class="nk-block-des">
                    <p>Access the {{config('app.name')}} panel using your email and password.</p>
                </div>
            </div>
        </div>
               <!-- Session Status -->
        <div class="mt">
                <x-auth-session-status class="mb-4 text-danger" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
        </div>
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="form-group">
                <div class="form-label-group"><label class="form-label" for="default-01">Email
                        or Username</label></div>
                <div class="form-control-wrap">
                <input type="text" name="email" value="{{ old('email') }}" class="form-control form-control-lg @error('email') is-invalid @enderror" id="default-01" placeholder="Enter your email address or username">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            </div>
            <div class="form-group">
                <div class="form-label-group"><label class="form-label"
                        for="password">Password</label><a class="link link-primary link-sm"
                        href="#">Forgot Password?</a></div>
                <div class="form-control-wrap"><a href="#"
                        class="form-icon form-icon-right passcode-switch lg"
                        data-target="password"><em
                            class="passcode-icon icon-show icon ni ni-eye"></em><em
                            class="passcode-icon icon-hide icon ni ni-eye-off"></em></a><input
                        type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password"
                        placeholder="Enter your password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
            </div>
            <div class="form-group"><button class="btn btn-lg btn-primary btn-block">Sign
                    in</button></div>
        </form>
        <div class="form-note-s2 text-center pt-4"> New on our platform? <a
                href="/demo2/pages/auths/auth-register-v2.html">Create an account</a></div>
        <div class="text-center pt-4 pb-3">
            <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
        </div>
        <ul class="nav justify-center gx-4">
            <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
        </ul>
    </div>
</div>
@endsection
