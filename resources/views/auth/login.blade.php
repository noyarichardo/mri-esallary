<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8"/>
        <title>MRI Sallary System</title>
        <meta name="description" content="Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups" />
        <meta name="keywords" content="Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups" />
        <meta name="generator" content="DANGO System" />
        <meta name="robots" content="index, follow" />

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('images/logo/favicon.ico')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- ICON -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!--Style-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/theme/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/theme/skin.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/theme/responsive.css')}}">

    </head>
    <body class="main-body">

        <div class="bg-login page main-signin-wrapper">
            <main class="form-signin">

                <div class="row signpages text-center">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="row row-sm">
                                <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                                    <div class="pos-absolute wrap_logo">
                                        <img src="{{(asset('images/logo/logo.png'))}}" class="logo_login" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                                    <div class="container-fluid">
                                        <div class="row row-sm">
                                            <div class="card-body mt-2 mb-2">
                                                @if ($errors->has('email'))
                                                    <div class="alert alert-danger" role="alert">
                                                        <button class="btn-close" data-bs-dismiss="alert"></button>
                                                        <span>
                                                    {{ $errors->first('email') }}</span>
                                                    </div>
                                                @endif
                                                <form method="POST" action="{{ route('postLogin') }}">
                                                    @csrf
                                                    <h5 class="text-left mb-2">Sign In to Your Account</h5>
                                                    <p class="mb-4 text-muted tx-13 ml-0 text-left">Welcome back! Please signin to continue.</p>
                                                    <div class="form-group text-left">
                                                        <label>Email / Username</label>
                                                        <input type="text" name="email" class="form-control" id="floatingInput" placeholder="Enter your email / username">
                                                    </div>
                                                    <div class="form-group text-left">
                                                        <label>Password</label>
                                                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Enter your password">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary w-100">Sign In</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </main>
        </div>

    </body>
</html>
