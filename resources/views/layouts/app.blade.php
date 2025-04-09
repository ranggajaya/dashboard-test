<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Griffon Aviation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Griffon Aviation Services">
  <meta name="keywords" content="aviation, aircraft, services">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

  <!-- AOS & WOW -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  @include('layouts.navbar')
  <main>
    @yield('content')
  </main>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>
    AOS.init(); new WOW().init();
  </script>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.getElementById('mainNavbar');
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
      } else {
        navbar.classList.remove('navbar-scrolled');
      }
    });
  });
</script>
</body>
</html>
