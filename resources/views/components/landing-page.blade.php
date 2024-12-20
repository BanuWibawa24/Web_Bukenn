<!doctype html>
<html lang="en">

  <head>
    <title>Trips &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('template/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/aos.csss') }}">

    {{-- <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css"> --}}

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.html" class="font-weight-bold">
                  <img src="{{ asset("template/images/LOGO.png") }}" alt="Image" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-7  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white  site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="#"><a href="index.html" class="nav-link">Home</a></li>
                  <li><a href="#about" class="nav-link">Tentang</a></li>
                  <li><a href="#facility" class="nav-link">Fasilitas</a></li>
                  <li><a href="#gallery" class="nav-link">Gallery</a></li>
                  <li><a href="#news" class="nav-link">Berita</a></li>
                  <li><a href="#contact" class="nav-link">Kontak</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-2 d-flex ">
              @guest
                <!-- Tampilkan jika pengguna belum login -->
                <a class="btn btn-primary btn-sm" href="/login">Login</a>
                <a class="btn btn-secondary ml-2" href="/register">Register</a>
              @else
                <!-- Tampilkan jika pengguna sudah login -->
                <div class="dropdown">
                  <a href="#" class="dropdown-toggle d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROekIo6BwbWJYeF_BDLr3Y7NmqRqMfiOQm_g&s" alt="User Avatar" class="rounded-circle" width="40" height="40">
                    <span class="ml-1">{{ Auth::user()->name }}</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    @if (Auth::user()->is_admin)
                    <a class="dropdown-item" href="/dashboard/visit">Dashboard</a>
                      
                    @else
                    <a class="dropdown-item" href="/visit">Tiket ku</a>
                      
                    @endif
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  <a href="#"class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                    <form id="logout-form" action="/" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </div>
              @endguest
            </div>

            
          </div>
        </div>

      </header>

   


    {{ $slot }}

    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-3">Social Media</h2>
            <div class="row">
              <div class="col-4 gal_col">
                <a href="#"><img src="images/logo_ig.jpg" alt="Image 1" >
              </div>
              <div class="col-4 gal_col">
                <a href="#"><img src="images/logo_ig.jpg" alt="Image 2" >
              </div>
              <div class="col-4 gal_col">
                <a href="#"><img src="images/logo_ig.jpg" alt="Image 3" >
              </div>
            </div>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#about">Tentang</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Newsletter</h2>
                <p>Tulis kesan kesan disini!</p>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>
    <link rel="stylesheet" href="{{ asset('template/css/aos.csss') }}">

    <script src="{{ asset('template/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('template/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('template/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
    <script src="{{ asset('template/js/aos.js') }}"></script>


    {{-- SNAP MIDTRANS --}}
    {{-- <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function(){
          // SnapToken acquired from previous step
          snap.pay('<?=$snapToken?>', {
            // Optional
            onSuccess: function(result){
              /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onPending: function(result){
              /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onError: function(result){
              /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            }
          });
        };
      </script> --}}



{{-- 
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script> --}}

  </body>

</html>

