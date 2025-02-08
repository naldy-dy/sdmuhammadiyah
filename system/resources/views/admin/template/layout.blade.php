<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Muhammadiyah</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{url('public')}}/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{url('public')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/app.css">
    <link rel="shortcut icon" href="{{url('public')}}/assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="{{url('public')}}/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                   @include('admin.template.sidebar')
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>SD Muhammadiyah Pontianak</h3>
            </div>
            <div class="page-content">
               @yield('content')
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>{{date('Y')}} &copy; N-Project</p>
                    </div>
                    <div class="float-end">
                        <p>Develope By <span class="text-danger"></span> <a
                                href="http://ahmadsaugi.com">Kayong Developer</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{url('public')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{url('public')}}/assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{url('public')}}/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="{{url('public')}}/assets/js/pages/dashboard.js"></script>

    <script src="{{url('public')}}/assets/js/main.js"></script>
</body>

</html>