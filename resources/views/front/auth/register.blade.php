@extends('layouts.custom-app')

@section('styles')
@endsection

@section('content')

@section('switcher-icon')
    <div class="page main-signin-wrapper">
    @endsection

    <!-- ROW -->
    <div class="row signpages text-center">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="row row-sm">
                    <div class="col-lg-6 col-xl-6 col-xs-12 col-sm-12 login_form rounded-start-11">
                        <div class="container-fluid">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <div class="mobilelogo">
                                        <img src="{{ Vite::asset('assets/img/brand/logo.png') }}"
                                            class=" d-lg-none header-brand-img text-start float-start mb-4 dark-logo"
                                            alt="logo">
                                        <img src="{{ Vite::asset('assets/img/brand/logo-light.png') }}"
                                            class=" d-lg-none header-brand-img text-start float-start mb-4 light-logo"
                                            alt="logo">
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="text-start mb-2">Sign Up for Free</h2>
                                    <p class="mb-4 text-muted tx-13 ms-0 text-start">It's Free to Sign up and only takes
                                        a minute.</p>

                                    <form method="POST" action="{{ route('registerr') }}">
                                        @csrf
                                        <div class="form-group text-start">
                                            <label class="tx-medium">Name</label>
                                            <input class="form-control" id="name" placeholder="Enter your Name"
                                                type="text" name="name" :value="old('name')">
                                        </div>
                                        <div class="form-group text-start">
                                            <label class="tx-medium">Email</label>
                                            <input class="form-control" placeholder="Enter your email" id="email"
                                                type="email" name="email" :value="old('email')"
                                                autocomplete="username">
                                        </div>
                                        <div class="form-group text-start">
                                            <label class="tx-medium">Password</label>
                                            <input class="form-control border-end-0" placeholder="Enter your password"
                                                autocomplete="new-password" type="password" id="password"
                                                name="password" data-bs-toggle="password">
                                        </div>
                                        <div class="form-group text-start">
                                            <label class="tx-medium">Confirm your password</label>
                                            <input class="form-control border-end-0" id="password_confirmation"
                                                class="block mt-1 w-full" type="password" name="password_confirmation"
                                                required data-bs-toggle="password">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Register') }}
                                        </button>
										@if(count($errors) > 0 )
										<p class="text-danger">
                                        @foreach ($errors->all() as $error)
										
										
                                            {{ $error }}
										<br>
                                        @endforeach
										</p>
										@endif
									
                                    </form>
                                    <div class="text-start mt-4 ms-0 mb-3">
                                        <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Sign
                                                In</a></p>
                                    </div>
                                    <div class="signin-or-title">
                                        <h5 class="fs-12 mb-1 title tx-normal">or</h5>
                                    </div>
                                    <div class="pb-1 pt-4">
                                        <div class="text-center socialicons">
                                            <a href="https://myaccount.google.com/" target="_blank"
                                                class="btn ripple btn-danger-transparent rounded-circle"
                                                role="button"><i class="mdi mdi-google"></i></a>
                                            <a href="https://www.facebook.com/" target="_blank"
                                                class="btn ripple btn-primary-transparent rounded-circle"
                                                role="button"><i class="mdi mdi-facebook"></i></a>
                                            <a href="https://twitter.com/" target="_blank"
                                                class="btn ripple btn-info-transparent rounded-circle" role="button"><i
                                                    class="mdi mdi-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 d-none d-lg-block text-center bg-primary details rounded-end-11">
                        <div class="mt-4 pt-5 p-2 pos-relative">
                            <img src="{{ Vite::asset('assets/img/brand/logo-light.png') }}"
                                class="header-brand-img mb-3 mt-3" alt="logo">
                            <div class="clearfix"></div>
                            <img src="{{ Vite::asset('assets/img/pngs/user.png') }}" class="ht-250 mb-0" alt="user">
                            <h2 class="mt-4 text-white tx-normal">Create Your Account</h2>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">It's Free to Sign up and only takes a
                                minute</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END ROW -->
@endsection

@section('scripts')
    <!-- BOOTSTRAP SHOW PASSWORD JS -->
    <script src="{{ Vite::asset('assets/plugins/bootstrap/js/bootstrap-show-password.min.js') }}"></script>
@endsection
