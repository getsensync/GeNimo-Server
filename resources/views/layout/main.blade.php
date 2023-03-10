<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin GeNimo</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/app.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/dataTables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/dataTables/responsive.bootstrap4.min.css">
    <link rel="shortcut icon" href="{{ asset('/') }}assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <!-- sidebar -->

        @include('layout.sidebar')

        <!-- endsidebar -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>@yield('judul')</h3>
            </div>
            @yield('konten')

            <!-- footer -->
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; Sensync</p>
                    </div>
                    <!-- <div class="float-end">
                                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                            href="http://ahmadsaugi.com">A. Saugi</a></p>
                                </div> -->
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('/') }}assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('/') }}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="{{ asset('/') }}assets/js/pages/dashboard.js"></script>

    <script src="{{ asset('/') }}assets/js/main.js"></script>
</body>

</html>
