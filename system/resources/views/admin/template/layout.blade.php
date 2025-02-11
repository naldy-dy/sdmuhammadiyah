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
    <link rel="stylesheet" href="{{url('public')}}/assets/vendors/summernote/summernote-lite.min.css">

    <link rel="stylesheet" href="{{url('public')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/app.css">
    <link href="{{$profil->logo_sekolah}}" rel="shortcut icon"/>
    <link rel="stylesheet" href="{{url('public')}}/assets/vendors/fontawesome/all.min.css">
</head>

<body>
    <style>
        .float-right{
            float: right !important;
        }
    </style>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{url('/')}}">SIAKAD</a>
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
                <h3>SD Muhammadiyah 3 Pontianak</h3>
            </div>
            <div class="page-content">
               @yield('content')
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start ">
                        <p>{{date('Y')}} &copy; N-Project</p>
                    </div>
                    <div class="float-end fixed-bottom">
                        <p>Develope By <span class="text-danger"></span> <a
                                href="#">Kayong Developer</a></p>
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
    <script src="{{url('public')}}/assets/vendors/fontawesome/all.min.js"></script>

    <script src="{{url('public')}}/assets/vendors/jquery/jquery.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/summernote/summernote-lite.min.js"></script>
    <script>
        $('.summernote').summernote({
            tabsize: 2,
            height: 120,
        })
        $("#hint").summernote({
            height: 100,
            toolbar: false,
            placeholder: 'type with apple, orange, watermelon and lemon',
            hint: {
                words: ['apple', 'orange', 'watermelon', 'lemon'],
                match: /\b(\w{1,})$/,
                search: function (keyword, callback) {
                    callback($.grep(this.words, function (item) {
                        return item.indexOf(keyword) === 0;
                    }));
                }
            }
        });

    </script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Notifikasi -->
@foreach(['success', 'warning', 'error', 'info'] as $status)
@if (session($status))
<script>
  Swal.fire({
    icon: "{{ $status }}",
    title: "{{ Str::upper($status) }}",
    text: "{{ session($status) }}!",
    showConfirmButton: false,
    timer: 15000
})
</script>
@endif
@endforeach
</body>

</html>