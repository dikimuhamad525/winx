<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sumedang | {{ ucwords(request()->segment(1)) }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('') }}img/logo_sumedang.png" rel="icon">
    <link href="{{ asset('') }}img/logo_sumedang.png" rel="apple-touch-icon">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('') }}admin-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}admin-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('') }}admin-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('') }}admin-assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('') }}admin-assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('') }}admin-assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('') }}admin-assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="{{ asset('') }}admin-assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    @stack('css')

</head>

<body>

    @include('partials.admin.navbar')
    @include('partials.admin.sidebar')

    <main id="main" class="main">

        @yield('dashboard-content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="{{ asset('') }}admin-assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('') }}admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}admin-assets/vendor/chart.js/chart.min.js"></script>
    <script src="{{ asset('') }}admin-assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('') }}admin-assets/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('') }}admin-assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('') }}admin-assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('') }}admin-assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('') }}admin-assets/js/main.js"></script>
    @stack('js')

</body>

</html>
