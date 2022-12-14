@vite(['assets/img/brand/favicon.ico'])

<!-- TITLE -->
<title> Dashplex - Laravel Bootstrap5 Premium Dashboard Template</title>

<!-- BOOTSTRAP CSS -->
@vite(['assets/plugins/bootstrap/css/bootstrap.min.css'])

<!-- ICONS CSS -->
@vite(['assets/web-fonts/icons.css'])
@vite(['assets/web-fonts/font-awesome/font-awesome.min.css'])
@vite(['assets/web-fonts/plugin.css'])
@vite(['resources/sass/app.scss', 'resources/css/app.css'])


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
                                    <form method="POST" action="{{ route('admin.login') }}">
                                        @csrf
                                        <h2 class="text-start mb-2">Sign In</h2>
                                        <p class="mb-4 text-muted tx-13 ms-0 text-start">Sign in to Create, Discover and
                                            Connect with the Global Community</p>
                                        <div class="panel desc-tabs border-0 p-0">
                                            <div class="tab-menu-heading">
                                                <div class="tabs-menu ">
                                                    <ul class="nav panel-tabs">
                                                        <li class="">
                                                            <a href="#tab01" class="active"
                                                                data-bs-toggle="tab">Email</a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab02" data-bs-toggle="tab">Mobile No</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body tabs-menu-body mt-2">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab01">
                                                        <div class="form-group text-start">
                                                            <label class="tx-medium">Email</label>
                                                            <input class="form-control" placeholder="Enter your email"
                                                                type="email" autocomplete="username" id="email"
                                                                name="email">
                                                        </div>
                                                        <div class="form-group text-start">
                                                            <label class="tx-medium">Password</label>
                                                            <input class="form-control border-end-0"
                                                                placeholder="Enter your password" type="password"
                                                                autocomplete="new-password" data-bs-toggle="password"
                                                                id="password" name="password">
                                                        </div>
                                                        
                                                        <button type="submit" class="btn btn-primary btn-block">
                                                            {{ __('Log in') }}
                                                        </button>
                                                        @if (count($errors) > 0)
                                                            <p class="text-danger">
                                                                @foreach ($errors->all() as $error)
                                                                    {{ $error }}
                                                                    <br>
                                                                @endforeach
                                                            </p>
                                                        @endif

                                                    </div>
                                                    <div class="tab-pane" id="tab02">
                                                        <div id="mobile-num" class="validate-input input-group mb-2">
                                                            <a href="javascript:;"
                                                                class="input-group-text bg-light text-muted">
                                                                <span>+91</span>
                                                            </a>
                                                            <input class="form-control" type="number"
                                                                placeholder="Enter your mobile number">
                                                        </div>
                                                        <div id="login-otp" class="justify-content-around mb-4">
                                                            <input class="form-control text-center me-2" id="txt1"
                                                                maxlength="1">
                                                            <input class="form-control text-center me-2" id="txt2"
                                                                maxlength="1">
                                                            <input class="form-control text-center me-2" id="txt3"
                                                                maxlength="1">
                                                            <input class="form-control text-center" id="txt4"
                                                                maxlength="1">
                                                        </div>
                                                        <span>Note : Login with registered mobile number to generate
                                                            OTP.</span>
                                                        <div class="mt-3 text-start">
                                                            <a href="javascript:;" class="btn btn-primary w-lg"
                                                                id="generate-otp">Proceed</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </form>
                                    <div class="text-start mt-4 ms-0 mb-3">
                                        
                                        <div>Don't have an account? <a href="{{ url('signup') }}">Register Here</a>
                                        </div>
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
                                                class="btn ripple btn-info-transparent rounded-circle"
                                                role="button"><i class="mdi mdi-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 d-none d-lg-block text-center bg-primary details rounded-end-11">
                        <div class="mt-4 pt-4 p-2 pos-relative">
                            <img src="{{ Vite::asset('assets/img/brand/logo-light.png') }}"
                                class="header-brand-img mb-3 mt-3" alt="logo">
                            <div class="clearfix"></div>
                            <img src="{{ Vite::asset('assets/img/pngs/user.png') }}" class="ht-250 mb-0"
                                alt="user">
                            <h2 class="mt-4 text-white tx-normal">Sign In Your Account</h2>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Sign in to Create, Discover and Connect with
                                the Hunting Community</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

    @section('scripts')
        <!-- BOOTSTRAP SHOW PASSWORD JS -->
        <script src="{{ Vite::asset('assets/plugins/bootstrap/js/bootstrap-show-password.min.js') }}"></script>

        <!-- GENERATE-OTP JS -->
        @vite('resources/assets/js/generate-otp.js')
    @endsection
