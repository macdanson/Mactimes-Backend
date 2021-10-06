<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('img/logo-fav.png') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('lib/material-design-icons/css/material-design-iconic-font.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
</head>

<body class="be-splash-screen">
    <div class="be-wrapper be-login">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading">
                            {{-- <img src="{{ asset('img/logo-xx.png') }}" alt="logo" width="102" height="27"
                                class="logo-img"> --}}
                            {{ config('app.name') }}
                            <span class="splash-description">Please enter your user
                                information.</span>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" name="email" type="email" placeholder="E-Mail Address"
                                        autocomplete="off" class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" name="password" placeholder="Password"
                                        class="form-control @error('password') is-invalid @enderror" required
                                        autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row login-tools">
                                    <div class="col-xs-6 login-remember">
                                        <div class="be-checkbox">
                                            <input type="checkbox" class="form-check-input" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 login-forgot-password">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group login-submit">
                                    <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Sign me
                                        in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="splash-footer"><span>Don't have an account? <a class="nav-link"
                                href="{{ route('register') }}">Register</a></span></div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //initialize the javascript
            App.init();
        });

    </script>
</body>

</html>
