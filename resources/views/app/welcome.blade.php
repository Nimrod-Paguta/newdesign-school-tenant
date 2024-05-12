<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login Page</title>

        <
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html> -->

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
          
            background-size: cover; /* Cover the entire background */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-position: center center; /* Center the image */
            font-family: Arial, sans-serif; /* Specify the font family */
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
            letter-spacing: 10px;
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
            width: 510px;
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
            width: 500px;
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

    .container {
        padding: 40px;
        background-color: #fafafb;
        margin-left: 40px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    
    /* Add additional styles for responsiveness */
    @media (min-width: 576px) {
        .container {
            max-width: 540px; /* Adjust based on your design */
        }
    }
    
    @media (min-width: 768px) {
        .container {
            max-width: 720px; /* Adjust based on your design */
        }
    }
    
    @media (min-width: 992px) {
        .container {
            max-width: 960px; /* Adjust based on your design */
        }
    }
    
    @media (min-width: 1200px) {
        .container {
            max-width: 1140px; /* Adjust based on your design */
        }
    }

    .clipart-container {
        text-align: center;
        margin-top 20px;
    }

    .clipart-img {
        width: 100%;
        height: 100%; /* Adjust the size as needed */
        display: center; /* Ensure the image behaves like a block element */
        margin-top: 20px;
    }

    </style>
</head>

        <!-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                    @endauth
                </div>
            @endif
        </div> -->
    
<body>

<div style="position: fixed; bottom: 200px; left: 150px;">

    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif

<div class="container">
    <div class="row">
        <!-- Login Form -->
        <div class="col-md-6">
            <div class="text-center login-heading">
                <h1 class="h2 text-gray-900"><b>LOGIN</b></h1>
            </div>
            <form class="user login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control form-control-user" type="email" name="email" required autofocus autocomplete="username">
                </div>
                <!-- Password -->
                <div class="mt-4 form-group">
                    <label for="password">Password</label>
                    <input id="password" class="form-control form-control-user" type="password" name="password" required autocomplete="current-password">
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span class="ms-2">Remember me</span>
                    </label>
                </div>
                <!-- Forgot Password -->
                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                </div>
                <!-- Login Button -->
                <div>
                <!-- Login Button -->
<button class="primary-button login-button">Log in</button>

                </div>
            </form>
        </div>
        
        <!-- Clipart or Photo -->
        <div class="col-md-6 clipart-container">
            <img src="img/loginClipart2.png" class="img-fluid clipart-img" alt="Clipart or Photo">
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
        });
    </script>
</body>
</html>

