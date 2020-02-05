<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="<?=cnf_description?>">
  <meta name="keywords" content="<?=cnf_keywords?>">
  <title><?=cnf_title?></title>

  <!-- Favicons-->
  <link rel="icon" href="<?=baseURL_lib?>images/favicon/<?=favicon_png?>" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?=baseURL_lib?>images/favicon/<?=favicon_png?>">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="<?=baseURL_lib?>images/favicon/<?=favicon_png?>">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="<?=baseURL_lib?>css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?=baseURL_lib?>css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->

  <link href="<?=baseURL_lib?>css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?=baseURL_lib?>js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?=baseURL_lib?>js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

  <link href="<?=baseURL_lib?>fontawesome-5.12/css/all.css" rel="stylesheet"> <!--load all styles -->


</head>

<body class=" grey lighten-2">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
       <div class="progress">
     <div class="indeterminate"></div>
 </div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?=baseURL_lib?>images/<?=logo_png?>" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text"><?=cnf_NombreSys?></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" autocomplete="on">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix "></i>
            <input id="password" type="password" autocomplete="on">
            <label for="password" class="">Password</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">

            <a id="btn_Entrar" shref="<?=baseURL?>public/index.php/login/valida"  class="btn waves-effect waves-light   col s12   grey darken-1"><i class="fas fa-arrow-circle-right"></i> Entrar</a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small "><a href="<?=baseURL?>public/index.php/user/nuevo">Register Now!</a></p>
          </div>

        </div>

      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <!--<script type="text/javascript" src="<?=baseURL_lib?>js/plugins/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="<?=baseURL_lib?>jquery-3.4.1/jquery.min.js"></script>-->
  <script type="text/javascript" src="<?=baseURL_lib?>jquery-3.4.1/jquery.min.js"></script>
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
