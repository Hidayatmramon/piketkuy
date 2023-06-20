<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">


    <title>piketkuy.id</title>
    <link href="{{asset('homepage/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('homepage/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/assets/css/animated.css')}}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav d-flex align-items-center justify-content-between">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{asset('homepage/assets/images/logo.png')}}" alt="PiketKuy.id">
                    </a>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** 
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active"></a></li>
                        <li class="scroll-to-section"><a href="#services"></a></li>
                        <li class="scroll-to-section"><a href="#about"></a></li>
                        <li class="scroll-to-section"><a href="#pricing"></a></li>
                       -->

                        <!-- ***** Avatar Start ***** -->
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle transparent-dropdown-toggle" type="button"
                                id="avatarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" alt="Avatar" 
                                    class="avatar rounded-circle" style="width: 30px; height: 30px;">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="avatarDropdown">
                                <li><a class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                            </ul>
                        </div>
                        <!-- ***** Avatar End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

    @yield('home')

    <footer id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>Pelajar Cerdas Adalah Pelajar Yang Mau Membersihkan Ruang Rayonnya. </h4>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>Copyright © PiketKuy.id
                            <br>Design By <a href="https://hidayatmramon.github.io" target="_blank"
                                title="css templates">Hidayatmramon</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="{{asset('homepage/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('homepage/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('homepage/assets/js/animation.js')}}"></script>
    <script src="{{asset('homepage/assets/js/imagesloaded.js')}}"></script>
    <script src="{{asset('homepage/assets/js/popup.js')}}"></script>
    <script src="{{asset('homepage/assets/js/custom.js')}}"></script>
</body>

</html>