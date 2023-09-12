<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Darun Najah</title>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <style>
      footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #0b381a;
      }
      @media only screen and (max-device-width: 480px){
        /* in mobile css commands */ 
          footer {
            position: relative;
          }
      }
    </style>
    @yield('css')
  </head>

  <body>
    <div class="content-wrapper bg-soft-primary">
      <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg center-nav transparent position-absolute bg-soft-primary">
          <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
              <a href="#">
                
                <h4 class="widget-title text-black" >DARUN NAJAH</h4>
                {{-- <img class="logo-dark" src="./assets/img/logo.png" srcset="./assets/img/logo@2x.png 2x" alt="" />
                <img class="logo-light" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /> --}}
              </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
              <div class="offcanvas-header d-lg-none">
                <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body ms-lg-auto d-flex flex-column 2-100">
                <ul class="navbar-nav navbar-right ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{route('home')}}" >HOME</a> 
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">PROGRAM ORANG TUA ASUH</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="{{route('latar_belakang')}}">Latar Belakang</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="{{route('tujuan_sasaran')}}">Tujuan dan Sasaran</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="{{route('idealisme_program')}}">Idealisme Program</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="{{route('legalitas_program')}}">Legalitas Pelaksana</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">DONATUR</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="{{route('user_register')}}">Register Donatur Baru</a></li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Donatur</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post.html">Donatur - Transfer</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post2.html">Saldo Kas Perorangan*</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Saldo Kas Umum</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Publish Saldo Kas Periodik*</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Saran dan Masukkan Donatur</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">PRESTASI ANAK</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="{{route('calon_anak_asuh')}}">Calon Anak Asuh</a></li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Donatur</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post.html">Donatur - Transfer</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post2.html">Saldo Kas Perorangan*</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Saldo Kas Umum</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Publish Saldo Kas Periodik*</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Saran dan Masukkan Donatur</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              <!-- /.navbar-nav -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->
      @yield('content')
        {{-- <aside class="left-sidebar">
            @include('layouts.content')
            @yield('content') --}}

  <!-- /.content-wrapper -->
  </div>
  <footer class="text-inverse">
    <div class="container mt-5">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
            <h5 class="widget-title text-white mb-1 text-right">DARUN NAJAH</h4>
            <h6 class="widget-title text-white text-right mb-0">Peduli Pendidikan Anak</h6>
            <hr class="mt-1 mb-1">
            <p style="font-size: 12px">
              Simpang Inalum Km.100<br /> 
              Desa Tanjung Gading Kecamatan Sei Suka<br /> 
              Kabpaten Batubara Sumatera Utara<br /> 
              Kode Pos : 21257
            </p>
            
          </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-9 " style="float: right;">
          <div class="row" style="float: right;">
              <div class="col-lg-6">
                <h4 class="widget-title text-white" style="float: right;">Operasional And Web <br>Sponsored By : </h4>
              </div>
              <div class="col-lg-2" >
                  <figure class="hover-scale rounded cursor-dark"><a href="./assets/img/sponsor.png" data-glightbox="title: Heading; description: Description" data-gallery="post"> <img src="./assets/img/sponsor.png" alt="" /></a></figure>
              </div>
              <div class="col-lg-2" style="float: right;">
                  <figure class="hover-scale rounded cursor-dark"><a href="./assets/img/sponsor.png" data-glightbox="title: Heading; description: Description" data-gallery="post"> <img src="./assets/img/sponsor.png" alt="" /></a></figure>
              </div>
          </div>
        </div>
        <!-- /column -->
      </div> 
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{asset('./assets/js/plugins.js')}}"></script>
  <script src="{{asset('./assets/js/theme.js')}}"></script>
  @yield('js')
</body>

</html>
