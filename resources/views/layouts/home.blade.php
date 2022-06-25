<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sumedang | Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{ asset('') }}img/logo_sumedang.png" rel="icon">
  <link href="{{ asset('') }}img/logo_sumedang.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('') }}vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ asset('') }}vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('') }}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('') }}vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('') }}vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('') }}vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('') }}vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset('') }}css/style.css" rel="stylesheet">

</head>

<body>

  @include('partials.navbar')
  @include('partials.hero')

  <main id="main">

    @yield('home_content')

  </main>

  @include('partials.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{ asset('') }}vendor/aos/aos.js"></script>
  <script src="{{ asset('') }}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('') }}vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('') }}vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('') }}vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('') }}vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('') }}js/main.js"></script>

</body>

</html>