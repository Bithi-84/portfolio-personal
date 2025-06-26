<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 @include('includes.style')
</head>

<body class="index-page">

  @include('includes.header')

  <main>
    @yield('content')
  </main>

  
 @include('includes.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

 @include('includes.script')
</body>

</html>