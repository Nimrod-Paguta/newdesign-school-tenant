<!DOCTYPE html>
<html lang="en">

<head>


<style>

    /* Sidebar */

/* Brand Logo */
.sidebar-brand {
    color: #fff;
    font-weight: bold;
    text-align: center;
    padding: 15px 0;
}

/* Brand Logo Icon */
.sidebar-brand-icon {
    font-size: 1.5rem;
}

/* Brand Logo Text */
.sidebar-brand-text {
    font-size: 1.1rem;
}

/* Sidebar Links */
.nav-item {
    padding: 0;
}

.nav-link {
    padding: 10px 20px;
    color: #fff;
    font-size: 0.9rem;
    transition: all 0.3s;
}

.nav-link:hover {
    background-color: #3c5dc9;
}

/* Divider */
.sidebar-divider {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    margin-top: 20px;
    margin-bottom: 20px;
}

/* Active Link */
.nav-item.active .nav-link {
    background-color: #3c5dc9 !important;
}

/* Active Link Text */
.nav-item.active .nav-link span {
    font-weight: bold;
}

    
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Other Utilities</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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

<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<link href="{{ asset('tenant/css/sidebar.css') }}" rel="stylesheet">
<link href="{{ asset('tenant/css/sb-admin-2.min.css') }}" rel="stylesheet">
<link href="{{ asset('tenant/css/noanimation.css') }}" rel="stylesheet">



    

</head>
                @php
                $userId = auth()->id(); // Get the authenticated user's ID
                $user = App\Models\User::find($userId); // Find the user by ID
                $custom = App\Models\Custom::first();
                @endphp
<body id="page-top">

    <!-- Page Wrapper -->
<div id="wrapper">

 <!-- Sidebar -->
<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: {{ $custom ? $custom->color : 'blue' }};">

@role('department')
        <!-- Sidebar - Brand -->
        <label for="logo-upload" class="sidebar-brand d-flex align-items-center justify-content-center" style="padding-top: 110px; padding-bottom: 110px; display: flex; cursor: pointer;">
        <div class="sidebar-brand-icon" style="border-radius: 50%; overflow: hidden;">
                <!-- Use PHP to dynamically change the logo based on the authenticated user's ID -->
               
                @if($user->logo)
                <img id="sidebar-logo" style="width: 250px; height: 185px;" src="{{ url($user->logo) }}" alt="User Logo">
            @else
                <img id="sidebar-logo" style="width: 250px; height: 185px;" src="{{ url('upload/logos/uploadlogo.jpg') }}" alt="Default Logo">
            @endif
                </div>
    </label>
    @endrole


    @role('admin')
    <!-- Sidebar - Brand -->
    <label  for="logo-upload" class="sidebar-brand d-flex align-items-center justify-content-center" style="padding-top: 110px; padding-bottom: 110px; display: flex; cursor: pointer;">
        <div class="sidebar-brand-icon" style="border-radius: 50%; overflow: hidden;">
            <!-- Use JavaScript to dynamically change the logo -->
            @php
                $user = App\Models\User::find(1); // Assuming your User model is in the App\Models namespace
            @endphp
            @if($user->logo)
                <img id="sidebar-logo" style="width: 250px; height: 185px;" src="{{ url($user->logo) }}" alt="User Logo">
            @else
                <img id="sidebar-logo" style="width: 250px; height: 185px;" src="{{ url('upload/logos/uploadlogo.jpg') }}" alt="Default Logo">
            @endif
        </div>
    </label>
  


@endrole



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Instructors</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('update.logo', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label for="logo">Upload Logo:</label>
                        <input id="logo" class="form-control" type="file" name="logo" value="{{ old('logo') }}" required autofocus />
                        <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                    </div>

                    <button type="submit" class="btn btn-primary">Update Logo</button>
                </form>
            </div>
        </div>
    </div>
</div>



@php
    $showColorForm = !is_null($custom);
@endphp

@if($showColorForm)
<div class="modal fade" id="colorsidebar" tabindex="-1" role="dialog" aria-labelledby="colorsidebarLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="colorsidebarLabel">Add Instructors</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('custom.update', ['custom' => $custom->id]) }}" class="sidebar-color-form">
                    @csrf
                    @method('PUT')

                    <label for="color">Select Sidebar Color:</label>
                    <select id="color" name="color" class="form-control">
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="black">Black</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endif


<div class="modal fade" id="storecolorsidebar" tabindex="-1" role="dialog" aria-labelledby="storecolorsidebarLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="storecolorsidebarLabel">Add Instructors</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
          
            <form action="{{ route('custom.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                <label for="color">Select Sidebar Color:</label>
                <select id="color" name="color" class="form-control">
                    <option value="red">Red</option>
                    <option value="green">Green</option>
                    <option value="black">Black</option>
                </select>
                <button type="submit" class="btn btn-primary mt-3">Save</button>
            </form>


            </div>
        </div>
    </div>
</div>














 



<!-- 
<img id="sidebar-logo" style="width: 250px; height: 200px;" src="{{ url('upload/logos/1714831219.png') }}" alt="New Logo">
 -->

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    @role('admin')

    <!-- Nav Item - Users -->
    <li class="nav-item">
        <a class="nav-link" href="/users">
            <i class="fas fa-fw fa-user"></i>
            <span>Department Management</span>
        </a>
    </li>

    @endrole


    <!-- Nav Item - Teachers -->
    <li class="nav-item">
        <a class="nav-link" href="/teacher">
            <i class="fas fa-fw fa-chalkboard-teacher"></i>
            <span>Teachers</span>
        </a>
    </li>

    <!-- Nav Item - Students -->
    <li class="nav-item">
        <a class="nav-link" href="/students">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Students</span>
        </a>
    </li>


    <!-- Nav Item - Announcement -->
    <li class="nav-item">
        <a class="nav-link" href="/announcement">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Announcement</span>
        </a>
    </li>

    @if($custom)
    <!-- Nav Item - Announcement -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#colorsidebar">
                    <i class="fas fa-fw fa-cog"></i> <!-- Use an appropriate setting icon -->
                    <span>Change Side-bar Color</span>
                </a>
            </li>
        @endif


        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-fw fa-cog"></i> <!-- Use an appropriate setting icon -->
                <span>Change Logo</span>
            </a>
        </li>


        @if(!$custom)
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#storecolorsidebar">
                    <i class="fas fa-fw fa-cog"></i> <!-- Use an appropriate setting icon -->
                    <span>Change Side-bar Color</span>
                </a>
            </li>
        @endif




    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>


<!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                 

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                       
 <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    <!-- <script src="tenant/vendor/jquery/jquery.min.js"></script>
    <script src="tenant/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <!-- Core plugin JavaScript-->
    <!-- <script src="tenant/vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Custom scripts for all pages-->
    <!-- <script src="tenant/js/sb-admin-2.min.js"></script> -->


    
    <!-- Bootstrap core JavaScript-->
    <!-- <script src="tenant/vendor/jquery/jquery.min.js"></script> -->
    <script src="tenant/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="tenant/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="tenant/js/sb-admin-2.min.js"></script>

</body>

</html>