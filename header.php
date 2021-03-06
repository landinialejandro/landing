<!DOCTYPE html>
<html lang="es">

<head>
  <script data-ad-client="ca-pub-9986737030473666" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta property="og:title" content="Landini profile site">
  <meta property="og:type" content="website">
  <meta property="og:image" content="http://landini.com.ar/logo.png">
  <meta property="og:url" content="http://www.landini.com.ar/">
  <meta property="og:site_name" content="Landini software develope">
  <meta property="og:description" content="Desarrollo de aplicaciones web optimizadas para dispositivos móviles, más rápido y mucho menos costoso.">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85010303-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-85010303-2');
  </script>

  <title>Landini</title>
  <link id="browser_favicon" rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="dist/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/plugins/ekko-lightbox/ekko-lightbox.css">
  <link rel="stylesheet" href="dist/dist_L/css/main.css">

  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <style>
    #rc-imageselect,
    .g-recaptcha {
      transform: scale(0.77);
      -webkit-transform: scale(0.77);
      transform-origin: 0 0;
      -webkit-transform-origin: 0 0;
    }
  </style>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'es',
        includedLanguages: 'en,es',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        autoDisplay: false
      }, 'google_translate_element');
    }
  </script>
  <!-- Global site tag (gtag.js) - Google Ads: 1064627938 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1064627938"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-1064627938');
  </script>
  <!-- Event snippet for Website traffic conversion page -->
  <script>
    gtag('event', 'conversion', {
      'send_to': 'AW-1064627938/I7VUCPqXrtEBEOLd0_sD'
    });
  </script>

</head>

<body class="hold-transition layout-top-nav">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JHG5VM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="index.php" class="navbar-brand">
          <img src="dist/dist_L/logo/L3.png" class="brand-image" style="opacity: .8">
          <span class="brand-text font-weight-light" style="margin-left: -10px;">andini</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contacto</a>
            </li>
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Productos</a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="products/lat/index.php" class="dropdown-item">Admin Template </a></li>
                <li><a href="products/snippetsGen/index.php" class="dropdown-item">Snippet Generator </a></li>
                <li><a href="products/mpi/index.php" class="dropdown-item">Profile Image </a></li>
                <li><a href="products/tnz/index.php" class="dropdown-item">Tu Negocio web! </a></li>
                <li class="dropdown-divider"></li>
                <li class="dropdown-submenu dropdown-hover">
                  <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">otros proyectos</a>
                  <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                    <li>
                      <a tabindex="-1" href="https://github.com/myappgini/tvedit" class="dropdown-item">
                        <i class="fab fa-github"></i> TV edit
                      </a>
                    </li>
                    <li>
                      <a href="https://github.com/myappgini/snippets" class="dropdown-item">
                        <i class="fab fa-github"></i> Snippets
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown-divider"></li>
                <li><a href="products/erp_sp/index.php" class="dropdown-item">Sistema Plus!</a></li>
              </ul>
            </li>
          </ul>
          <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item">
              <div id="google_translate_element"></div>
            </li>
          </ul>
        </div>
    </nav>
    <div class="content-wrapper">
      <?php
      include('config.php');
      ?>