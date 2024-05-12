<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
      body {
            background-image: url('img/Home2.png'); /* Specify the path to your image */
            background-size: cover; /* Cover the entire background */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-position: center center; /* Center the image */
            font-family: Arial, sans-serif; /* Specify the font family */
            color: #ffffff; /* Text color */
        }
       
        .modal-body {
            padding: 30px;
        }
        .login-logo {
            .login-logo img {
                width: 50px; /* Set the width as needed */
                height: auto; /* Let the height adjust automatically to maintain aspect ratio */
            }

        }
        .login-heading {
            margin-bottom: 20px;
            margin-left: 20px;
            letter-spacing: 20px;
        }
        .login-form {
            margin-bottom: 5px;
        }
        .forgot-password-link,
        .create-account-link {
            margin-top: 10px;
        }

        .primary-button {
            background-color: #4EB8FF; /* Primary color */
            color: #fff; /* Text color */
            padding: 10px 20px; /* Adjust padding as needed */
            border: none;
            border-radius: 5px; /* Rounded corners */
            cursor: pointer;
            font-size: 16px; /* Adjust font size as needed */
            width: 435px;
            margin-top: 15px
        }

        /* Custom styling for alternative buttons */
        .custom-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 410px;
        }
        .clickable-heading {
            color: #808080;
            padding: 25px 40px;
            cursor: pointer;
            font-size: 20px;
            width: 150px;
            float: right;
            display: inline-block;
            margin-bottom: 10px; /* Adjust margin as needed */
            text-decoration: none; /* Remove underline */
        }
        #registerButton {
            transition: color 0.3s ease; /* Smooth transition effect */
        }

        #registerButton:hover {
            color: #4EB8FF; /* Change text color on hover */
        }
        
        
        .clickable-heading-login {
        color: white;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 20px;
        width: 95px;
        float: right;
        display: inline-block;
        margin-bottom: 10px;
        margin-top: 15px;
        margin-right: 20px; 
        text-decoration: none; /* Remove underline */
        background-color: #008CBA; /* Green background color */
        border-radius: 25px 25px 25px 25px; /* Make it circular */
        }

        .clickable-heading-login:hover {
        background-color: #4EB8FF; /* Change background color on hover */
        }

        .close-button {
        color: #DDDDDD;
        padding: 10px;
        cursor: pointer;
        font-size: 30px;
        margin-left: 440px;
        float: right;
        text-decoration: none;
        }

        .close-button:hover {
        text-decoration: none; /* Prevent underline on hover */
        color: #DDDDDD; /* Ensure color remains the same on hover */
        }

        .img-fluid {
            /* Adjust the width and height as needed */
            width: 200px;
            height: auto; /* Maintain aspect ratio */
        }

        .get-started-button {
        background: linear-gradient(to right, #4EB8FF, #598bff); /* Gradient background */
        color: #fff; /* Text color */
        padding: 15px 30px; /* Padding */
        border: none; /* Remove border */
        border-radius: 30px; /* Rounded corners */
        font-size: 18px; /* Font size */
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition effect for transform and box-shadow */
        box-shadow: 0 5px 15px rgba(78, 184, 255, 0.4); /* Shadow effect */
    }

    .get-started-button:hover {
        transform: translateY(-3px); /* Move button slightly up on hover */
        box-shadow: 0 8px 20px rgba(78, 184, 255, 0.6); /* Increase shadow effect on hover */
    }

    </style>
</head>
<body>

<div style="position: fixed; bottom: 150px; left: 145px;">
        <button class="get-started-button">
            Get Started <i class="fas fa-arrow-right"></i>
        </button>
    </div>

    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif
<div style="display: flex; align-items: center; justify-content: space-between;">
    <div style="display: flex; align-items: center;">
        <img src="{{ asset('img/logo2.png') }}" class="img-fluid" alt="Logo" style="width: 120px; height: auto; padding-left:20px; padding-top: 5px;">
        <span style="margin-left: 10px; font-size: 28px; color: #808080; font-weight: bold;">UCMS</span>
    </div>
    <div>
        <h1 class="clickable-heading-login" id="loginButton" style="margin-right: 20px;">Log in</h1>
        <h1 class="clickable-heading" id="registerButton">Register</h1>
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="/" class="close-button">&#10006;</a>
                <div class="modal-body">
                    <div class="text-center login-logo">
                        <img src="{{ asset('img/logo3.png') }}" class="img-fluid" alt="Logo">
                    </div>
                    <div class="text-center login-heading">
                        <h1 class="h2 text-gray-900"><b>UCMS</b></h1>
                    </div>
                    <form class="user login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="form-group">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full form-control form-control-user" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- Password -->
                        <div class="mt-4 form-group">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block mt-1 w-full form-control form-control-user" type="password" name="password" required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        <button class="primary-button">{{ __('Log in') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="/" class="close-button">&#10006;</a>
                <div class="modal-body">
                    <div class="text-center login-logo">
                        <img src="{{ asset('img/logo3.png') }}" class="img-fluid" alt="Logo">
                    </div>
                    <div class="text-center login-heading">
                        <h1 class="h2 text-gray-900"><b>UCMS</b></h1>
                    </div>
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf
                        <!-- Name -->
                        <div class="form-group">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input class="block mt-1 w-full form-control form-control-user" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- Email Address -->
                        <div class="mt-4 form-group">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input class="block mt-1 w-full form-control form-control-user" id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- Password -->
                        <div class="mt-4 form-group">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block mt-1 w-full form-control form-control-user" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <!-- Confirm Password -->
                        <div class="form-group">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" class="block mt-1 w-full form-control form-control-user" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <button class="primary-button">{{ __('Register') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#loginButton").click(function(){
                $("#loginModal").modal('show');
            });

            $("#registerButton").click(function(){
                $("#registerModal").modal('show');
            });
            $(".get-started-button").click(function(){
            $("#registerModal").modal('show');
        });
        });
    </script>
</body>
</html>
