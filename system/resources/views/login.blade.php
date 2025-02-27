<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SD Muhammadiyah 3 Ptk</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/app.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/pages/auth.css">
    <link href="{{$profil->logo_sekolah}}" rel="shortcut icon"/>
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                        
                    <a href="#"><img src="{{$profil->logo_sekolah}}" alt="Logo" class="mb-3" width="250px"></a>
                
                    <h4 >Masuk.</h4>
                    <p class=" mb-3">Silahkan masuk untuk mengelola data sekolah</p>

                    <form action="" method="post">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="email" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Masuk</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>

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