<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content=" ">
  <meta name="keywords" content=" ">
  <title> </title>

  <!-- Favicons-->
  <link rel="icon" href="<?=baseURL_lib?>images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?=baseURL_lib?>images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="<?=baseURL_lib?>images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->

  <link href="<?=baseURL_lib?>css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?=baseURL_lib?>css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="<?=baseURL_lib?>css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?=baseURL_lib?>css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?=baseURL_lib?>js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?=baseURL_lib?>js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Register</h4>
            <p class="center">Join to our community now !</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password">
            <label for="password-again">Password again</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="index.html" class="btn waves-effect waves-light col s12">Register Now</a>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="<?=baseURL?>public/index.php/login">Login</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?=baseURL_lib?>js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?=baseURL_lib?>js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="<?=baseURL_lib?>js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?=baseURL_lib?>js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?=baseURL_lib?>js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="<?=baseURL_lib?>js/custom-script.js"></script>

</body>

</html>
