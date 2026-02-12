<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php include 'includes/style.php'?>
</head>

<body>
    <section class="login-page-wrapper">
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="#" class="ui form cs-validation sign-in-form">
                        <h2 class="title">Sign in</h2>
                        <div class="input-field field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="email" placeholder="Email" />
                        </div>
                        <div class="input-field field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Password">
                            <button type="button" class="btn-like-a psw-show-btn hide-psw"><i
                                    class="fa fa-eye-slash"></i></button>
                        </div>
                        <div class="input-field-col">
                            <div class="d-flex justify-content-between">
                                <div class="field w-auto mb-2">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="field text-right ml-auto">
                                    <label><a href="void:" data-toggle="modal" data-target="#forgot-password-modal"
                                            class="forgot-psw-view-btn float-right">Forgot
                                            password?</a></label>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-success text-center w-100 p-1 mb-2" role="alert">
                            <i class="fas fa-check-circle mr-2"></i> Success Message
                        </div>
                        <div class="alert alert-danger text-center w-100 p-1 mb-2" role="alert">
                            <i class="fas fa-exclamation-circle mr-2"></i>Error Message
                        </div>
                        <button type="submit" class="btn">
                            <i class="fa fa-spinner fa-spin mr-2"></i>Log In
                        </button>
                        <p class="social-text">Or Sign in with social platforms</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </form>
                    <form action="#" class="ui form cs-validation sign-up-form">
                        <h2 class="title">Sign up</h2>
                        <div class="input-field field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="full_name" placeholder="Username" />
                        </div>
                        <div class="input-field field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Email" />
                        </div>
                        <div class="input-field field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Password"
                                class="register-input-change" />
                            <button type="button" class="btn-like-a psw-show-btn hide-psw">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                        <div class="input-field field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password_confirmation" placeholder="Retype Password"
                                class="register-input-change" />
                            <button type="button" class="btn-like-a psw-show-btn hide-psw">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                        <div class="input-field-col mb-1 field">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="terms">
                                <label class="custom-control-label" for="terms">
                                    I agree to the <a href="#" data-toggle="modal" data-target="#terms-modal"
                                        class="text-decoration-underline">terms and
                                        conditions</a>
                                </label>
                            </div>
                        </div>
                        <div class="alert alert-success text-center w-100 p-1 mb-2 mt-2" role="alert">
                            <i class="fas fa-check-circle mr-2"></i>Registration Successful !
                        </div>
                        <button type="submit" class="btn signup mt-2">
                            <i class="fa fa-spinner fa-spin mr-2"></i>Sign Up
                        </button>
                        <p class="social-text">Or Sign up with social platforms</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <div class="img-style mb-3">
                            <div>
                                <img src="img/logo.png" alt="" class="form-logo">
                            </div>
                        </div>
                        <h3 class="text-white">Don't have an account yet?</h3>
                        <p>
                            Register to book appointments, manage your visits and access your medical records.
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            Sign up
                        </button>
                    </div>
                    <img src="img/appointment.png" class="image" alt="" />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <div class="img-style mb-3">
                            <div>
                                <img src="img/logo.png" alt="" class="form-logo">
                            </div>
                        </div>
                        <h3 class="text-white">Already Signed up?
                        </h3>
                        <p>
                            Log in to manage your appointments and healthcare services.
                        </p>
                        <button class="btn transparent" id="sign-in-btn">
                            Sign in
                        </button>
                    </div>
                    <img src="img/appointment.png" class="image" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Scripts -->
    <?php include 'includes/terms-modal.php'?>
    <?php include 'includes/forgot-password-modal.php'?>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/form.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#sign-up-btn").click(function() {
            $(".container").addClass("sign-up-mode");
        });

        $("#sign-in-btn").click(function() {
            $(".container").removeClass("sign-up-mode");
        });
    });
    $('.psw-show-btn').on('click', function() {
        let inputField = $(this).closest('.input-field').find(
            'input');
        let icon = $(this).find('i');

        if ($(this).hasClass('hide-psw')) {
            $(this).removeClass('hide-psw').addClass('show-psw');
            inputField.attr('type', 'text');
            icon.removeClass('fa-eye-slash').addClass('fa-eye');
        } else {
            $(this).removeClass('show-psw').addClass('hide-psw');
            inputField.attr('type', 'password');
            icon.removeClass('fa-eye').addClass('fa-eye-slash');
        }
    });

    $('.ui.form')
        .form({
            inline: true,
            fields: {
                full_name: {
                    identifier: 'full_name',
                    rules: [{
                        type: 'empty',
                        prompt: 'Please enter your full name'
                    }]
                },
                firstname: {
                    identifier: 'firstname',
                    rules: [{
                        type: 'empty',
                        prompt: 'Please enter your first name'
                    }]
                },
                lastname: {
                    identifier: 'lastname',
                    rules: [{
                        type: 'empty',
                        prompt: 'Please enter your last name'
                    }]
                },
                email: {
                    identifier: 'email',
                    rules: [{
                        type: 'empty',
                        prompt: 'Please enter your email'
                    }]
                },

                password: {
                    identifier: 'password',
                    rules: [{
                        type: 'empty',
                        prompt: 'Please enter your password'
                    }]
                },

            }
        });
    </script>

</body>

</html>