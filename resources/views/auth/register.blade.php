<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams LMS</title>

    <link rel="shortcut icon" type="image/x-icon" href="https://dreamslms.dreamguystech.com/html/assets/img/favicon.svg">

    <link rel="stylesheet" href="https://dreamslms.dreamguystech.com/html/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://dreamslms.dreamguystech.com/html/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://dreamslms.dreamguystech.com/html/assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="https://dreamslms.dreamguystech.com/html/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://dreamslms.dreamguystech.com/html/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://dreamslms.dreamguystech.com/html/assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="https://dreamslms.dreamguystech.com/html/assets/css/style.css">
</head>

<body>

    <div class="main-wrapper log-wrap">
        <div class="row">

            <div class="col-md-6 login-bg">
                <div class="owl-carousel login-slide owl-theme">
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="https://dreamslms.dreamguystech.com/html/assets/img/login-img.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>DreamsLMS Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="https://dreamslms.dreamguystech.com/html/assets/img/login-img.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>DreamsLMS Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="https://dreamslms.dreamguystech.com/html/assets/img/login-img.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>DreamsLMS Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 login-wrap-bg">

                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="img-logo">
                            <img src="https://dreamslms.dreamguystech.com/html/assets/img/logo.svg" class="img-fluid" alt="Logo">
                            <div class="back-home">
                                <a href="/">Back to Home</a>
                            </div>
                        </div>
                        <h1>Sign up</h1>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your Full Name">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email address">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Repeat Password</label>
                                <div class="pass-group" id="passwordInput">
                                    <input type="password" name="password_confirmation" class="form-control pass-input"
                                        placeholder="Repeat Password">
                                    <span class="toggle-password feather-eye"></span>
                                    <span class="pass-checked"><i class="feather-check"></i></span>
                                </div>
                                <div class="password-strength" id="passwordStrength">
                                    <span id="poor"></span>
                                    <span id="weak"></span>
                                    <span id="strong"></span>
                                    <span id="heavy"></span>
                                </div>
                                <div id="passwordInfo"></div>
                            </div>
                            <div class="form-check remember-me">
                                <label class="form-check-label mb-0">
                                    <input class="form-check-input" type="checkbox" name="remember"> I agree to the <a
                                        href="#">Terms of Service</a> and <a
                                        href="#">Privacy Policy.</a>
                                </label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-start" type="submit">Create Account</button>
                            </div>
                        </form>
                    </div>
                    <div class="google-bg text-center">
                        <span><a href="#">Or sign in with</a></span>
                        <div class="sign-google">
                            <ul>
                                <li><a href="#"><img src="https://dreamslms.dreamguystech.com/html/assets/img/net-icon-01.png" class="img-fluid"
                                            alt="Logo"> Sign In using Google</a></li>
                                <li><a href="#"><img src="https://dreamslms.dreamguystech.com/html/assets/img/net-icon-02.png" class="img-fluid"
                                            alt="Logo">Sign In using Facebook</a></li>
                            </ul>
                        </div>
                        <p class="mb-0">Already have an account? <a href="/login">Sign in</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="https://dreamslms.dreamguystech.com/html/assets/js/jquery-3.6.0.min.js"></script>

    <script src="https://dreamslms.dreamguystech.com/html/assets/js/bootstrap.bundle.min.js"></script>

    <script src="https://dreamslms.dreamguystech.com/html/assets/js/owl.carousel.min.js"></script>

    <script src="{{ asset('landing') }}/validation.js"></script>

    <script src="https://dreamslms.dreamguystech.com/html/assets/js/script.js"></script>
</body>

</html>
