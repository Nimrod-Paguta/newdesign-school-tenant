<!DOCTYPE html>
<html lang="en">

<head>

<style>
      body {
            background-image: url('img/Home2.png'); /* Specify the path to your image */
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
        }
        .login-form {
            margin-bottom: 10px;
        }

        .primary-button {
            background-color: #4EB8FF; /* Primary color */
            color: #fff; /* Text color */
            padding: 10px 20px; /* Adjust padding as needed */
            border: none;
            border-radius: 5px; /* Rounded corners */
            cursor: pointer;
            font-size: 16px; /* Adjust font size as needed */
            width: 445px;
            margin-left: 10px;
            margin-top: 15px;
            margin-bottom: 10px;
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
     

        .img-fluid {
            /* Adjust the width and height as needed */
            width: 250px;
            display: block; /* Ensure the image is treated as a block element */
            margin: 0 auto;
            height: auto; /* Maintain aspect ratio */
        }

       /* Style for logo */
.sidebar-brand {
    width: 100%;
    padding: 10px; /* Adjust padding as needed */
    text-align: center;
}


        .close-button.close {
        color: #DDDDDD;
        padding: 10px;
        cursor: pointer;
        font-size: 15px;
        margin-left: 440px;
        float: right;
        text-decoration: none;
        }

        .close-button:hover {
        text-decoration: none; 
        color: #DDDDDD; 
        }

        nav.item{
        font-size: 100px;
        }

        .nav-link:hover {
    background-color: #3c5dc9;
}

        

    </style>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UCMS</title>


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="tenant/css/sb-admin-2.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/noanimation.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/map.css') }}" rel="stylesheet"> -->


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex flex-column align-items-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-9">
        <img   src="{{ asset('img/logo3.png') }}" style="max-height: 70px; margin-bottom: 10px">
    </div>
    <div class="ucms-container">
    <h2 class="ucms-text" style="font-size: 2em; letter-spacing: 5px; font-weight: bold">UCMS</h2>
  <hr class="sidebar-divider my-5">

    <!-- <div class="sidebar-brand-text mx-0 text-blue" style="font-size: 2em; letter-spacing: 5px">UCMS</div> -->
</a>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Dashboard -->

<li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/tenants">
                    <i class="fas fa-university" ></i>
                    <span>Colleges</span></a>
            </li>

		 <li class="nav-item">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-users"></i>
                    <span>Tenant Admin</span></a>
            </li>

</div>
</ul>
    

<!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar)
                    <button id="sidebarToggleTop" class="sidebar-toggle">
      <i class="fa fa-bars" style="font-size: 18px;"></i>
    </button> -->



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
            <div>
    <!-- Profile Picture -->
    <img src="{{ asset('img/undraw_profile.svg') }}" alt="{{ Auth::user()->name }}" class="h-8 w-8 rounded-full">
</div>

                <div class="ms-2">{{ Auth::user()->name }}</div>

                <div class="ms-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
                <i class="fas fa-user mr-2"></i>{{ __('Profile') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="fas fa-sign-out-alt mr-2"></i>{{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</div>





                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    {{ $slot }}
                </div>

                  

            </div>


        </div>

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <!-- <script src="tenant/vendor/jquery/jquery.min.js"></script> -->
    <script src="tenant/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="tenant/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="tenant/js/sb-admin-2.min.js"></script>



</body>

</html>