<x-user-layout>

<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> 

    <!-- Custom styles for this template-->
    <link href="css/map.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
   

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 padding">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                                <!-- Content Row -->
                <div class="row">

<!-- Total Department Card -->
<div class="col-lg-6 col-md-12 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Department
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        @php
                                            // Count users excluding user with ID 1
                                            $totalDepartments = App\Models\User::where('id', '<>', 1)->count();
                                            echo $totalDepartments;
                                        @endphp
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-building fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                    $teacherCount = \App\Models\Teacher::count();
                @endphp

                <!-- Total Instructor Card -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Instructors
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $teacherCount }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                $studentCount = \App\Models\Students::count();
                @endphp

                <!-- Total Department Card -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Students
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $studentCount }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-building fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                $announcement = \App\Models\Announcement::count();
                @endphp

                <!-- Total Event Card -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Total Events</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$announcement}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                  
                <div class="col-xl-8 col-lg-9">
    <h6 class="m-0 font-weight-bold text-primary">Recently Added Department:</h6>
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="table-responsive tablename" style="max-height: 390px; overflow-y: auto;">
        @php
    // Get the recently added user excluding user with ID 1
    $recentUser = \App\Models\User::whereNotIn('id', [1])->orderBy('created_at', 'desc')->first();
@endphp

@if($recentUser)
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $recentUser->id }}</td>
                <td>{{ $recentUser->name }}</td>
                <td>{{ $recentUser->email }}</td>
                <td>{{ $recentUser->status }}</td>
                <td>{{ $recentUser->role }}</td>
            </tr>
        </tbody>
    </table>
@else
    <p>No users found.</p>
@endif


        </div>
    </div>
</div>


 <!-- Bar Chart -->
 <div class="col-xl-4 col-lg-7">
             <div class="card shadow mb-4" >
                 <canvas id="barChart" style="height: 420px;" ></canvas>
             </div>
         </div>


                </div>

                    <!-- Content Row -->

                    <div class="row">

                
                </div>
                <!-- /.container-fluid -->

            </div>
         
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-pie-demo1.js"></script>
    <script src="js/demo/bar-chart.js"></script> 

    

    <script>
    // Dummy data for the bar graph
    var barChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'HAHAHAHAH',
            backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                ],
            borderWidth: 1,
            data: [65, 59, 80, 81, 56, 55, 40]
        }]
    };

    // Get the canvas element
    var ctx = document.getElementById('barChart').getContext('2d');

    // Create the bar chart
    var barChart = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>



</body>

</html>


</x-user-layout>

