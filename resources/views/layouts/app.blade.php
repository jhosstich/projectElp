
<!--
=========================================================
 Paper Kit 2 - v2.2.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-kit-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-kit-2/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/img/logo/spacecare_logo_leter.png">
  <link rel="icon" type="image/png" href="/img/logo/spacecare_logo_leter.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Space Care
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- CSS Files -->
  <link href="./assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VQEX13ZBYB"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-VQEX13ZBYB');
  </script>
  
  <!-- Styles -->
  <link href="./css/app.css" rel="stylesheet">

  @yield('head')
</head>

<body class="index-page sidebar-collapse">
  
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" >
          Space Care
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
         
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="https://github.com/jhosstich/spacecare" target="_blank">
              <i class="fab fa-github"></i>
              <p class="d-lg-none">GitHub</p>
            </a>
          </li>     
          <li class="nav-item">
            <a class="nav-link" data-placement="bottom" href="{{route('cookies')}}" target="_blank">
              <p >Política de cookies</p>
            </a>
          </li>    
        </ul>
      </div>
    </div>
  </nav>

  <!-- End Navbar -->
    <main>
      @yield('content')
    </main>
    <div class="container-fluid cookies" id="cookies" style="display: none;">
            <div class="col-12 mx-auto">
                <p><button id="btn-cookies" class="btn btn-primary pull-right"><i class="fa fa-times"></i> Aceptar y cerrar este mensaje</button> </p>
                <p> Al continuar navegando o al hacer clic en "Aceptar", usted acepta el almacenamiento de cookies
                en su dispositivo para mejorar su experiencia en el sitio y para propósitos analíticos.
                Para aprender más sobre cómo usamos las cookies, por favor vea nuestra <a href="{{route('cookies')}}"> política de cookies</a>.
                </p>
            </div>
      </div>

    <footer class="footer footer-black py-3 footer-white ">
      <div class="container">
        <div class="row">
              <div class="col-md-2 col-4 ">
                <img height="150"  src="/img/logo/spacecare_logo_white.png">
              </div>
              <div class=" py-3 col-md-6 col-8 ">
                <p><strong>Sobre Nosotros...</strong> <br> Este es un proyecto realizado por estudiantes de la Facultad de Informática de la Universidad 
                  Complutense de Madrid con el objetivo de difundir esta problemática y concienciar a las personas que lean este pequeño proyecto.</p>
              </div>
              <div class="col-md-4 col-12 text-center">
                  <p>
                    Pablo Fernández Jara <br>
                    Javier Romero <br>
                    Jhoselin Oscco <br>
                    Jaime Palazón <br>
                    Adrián Salvador Crespo <br>
                    Christian Balbas Sánchez<br>
                  </p>  

                <img class="mt-4 d-block" style="display:inline-block; margin:auto; vertical-align:middle;"src="/img/spacecare_cc.jpg" alt="Space care cc">

                <span class="copyright">
                  ©
                  <script>
                    document.write(new Date().getFullYear())
                  </script>, made with <i class="fa fa-heart heart"></i> by <a href="https://www.creative-tim.com/product/paper-kit-2"> Creative Tim </a><br>
                </span>
              </div>
        </div>
      </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="./assets/js/plugins/moment.min.js"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>

    <script>
      // aquí guardamos la variable de que se ha aceptado el uso de cookies así no mostraremos el mensaje de nuevo
      $("#btn-cookies").click(function(e) {
          localStorage.acceptCookies = 'true';
          $('.cookies').hide();
      });

      // Esto se ejecuta cuando la web está cargada
      $(document).ready(function () {
          // Esto comprueba la localStorage si ya tiene la variable guardada */
          if(localStorage.acceptCookies == 'true') {
              $('.cookies').hide();
          } else {
              $('.cookies').show();
          }
      });
  </script>
    @yield('script')
</body>

</html>
