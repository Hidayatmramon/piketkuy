<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/style.css')}}">


    <title>PiketKuy.id</title>
  </head>
  <body>
    <div style="text-align:right;transform:scale(0.7);transform-origin:top right;">
      <div class="logo-smk" >
          <img src="{{asset('login/images/wikrama.svg')}}">
      </div>
  </div>
      <div class="container" style="margin-top:-50px;">
          <div class="row">
              <div class="col-md-6" style="transform:scale(0.8);transform-origin:top;">
                  <h1 class="mb-4">Selamat Datang Di Piket<span class="colored-text">Kuy.id</span></h1>
                  <img style="margin-top:-60px;"src="{{asset('login/images/bersih.svg')}}" alt="Image" class="img-fluid">
              </div>
              <div class="row justify-content-center">
            <!--Input-->
            @yield('login')
        <!--INPUT-->
    <div class="wave bottom">
      <img src="{{asset('login/images/wave.svg')}}" alt="Image" class="img-fluid">
  </div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>


