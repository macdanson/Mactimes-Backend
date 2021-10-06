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
    <div class="be-wrapper be-login be-signup">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container sign-up">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading">
                            {{-- <img src="{{ asset('img/logo-xx.png') }}" alt="logo" width="102" height="27"
                                class="logo-img"> --}}
                            {{ config('app.name') }}
                            <span class="splash-description">Please enter your user
                                information.</span>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" value="{{ old('name') }}" name="name" required
                                        autocomplete="name" autofocus placeholder="Full Name"
                                        class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" required placeholder="E-Mail Address"
                                        value="{{ old('email') }}" autocomplete="email"
                                        class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="pass1" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirm password">
                                </div>
                                <div class="form-group xs-pt-10">
                                    <button type="submit" class="btn btn-block btn-primary btn-xl">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="splash-footer">&copy; {{ date('Y') . ' ' . config('app.name', 'Laravel') }}</div>
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
