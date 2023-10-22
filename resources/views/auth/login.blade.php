<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NusaSpot Owner</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/nusaspot.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('template/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/vertical-layout-light/style.css') }}">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5 rounded">
                            <center class="mb-4">
                                <img src="{{ asset('assets/img/nusaspot.png') }}" width="50px" class="mb-4">
                                <h4>Halo NusaSpot Owner !</h4>
                                <h6 class="fw-light mb-4">Baru di NusaSpot ? <a href="{{ route('register') }}">Registrasi Disini</a></h6>
                                @if (Session::get('success') != '')
                                    <div class='alert alert-success'>
                                        <center><b>{{ Session::get('success') }}</b></center>
                                    </div>
                                @endif
                            </center>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-lg rounded @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" placeholder="Email" required
                                        autofocus>
                                </div>
                                @error('email')
                                    <strong style="color:red">{{ $message }}</strong>
                                @enderror
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-lg mb-2 rounded @error('password') is-invalid @enderror"
                                        name="password" placeholder="Password" required autocomplete="current-password">

                                        <a href="{{ route('password.request') }}">Lupa Password ?</a>
                                </div>
                                @error('password')
                                    <strong>{{ $message }}</strong>
                                @enderror
                                <div class="mt-1">
                                    <button type="submit" class="btn form-control rounded" style="padding-bottom:30px; background-color:#6528F7; color:white">Login</button>
                                </div>
                                <hr>
                                <div style="text-align: center;">
                                    <span>Atau Login Dengan</span>
                                    <br>
                                    <a href="{{ url('login/google') }}">
                                        <img src="{{ asset('assets/img/google.png') }}" alt="Masuk Dengan Google" width="50px" class="mt-2">
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('template/js/off-canvas.js') }}"></script>
    <script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('template/js/template.js') }}"></script>
    <script src="{{ asset('template/js/settings.js') }}"></script>
    <script src="{{ asset('template/js/todolist.js') }}"></script>
</body>

</html>
