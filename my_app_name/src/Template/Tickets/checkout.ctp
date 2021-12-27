<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boleto $boleto
 */

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
?>

<!doctype html>
<html lang="en">

<head>
  <title>Ticket Sale Form</title>

  <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/"> -->



  <!-- Bootstrap core CSS -->



  <!-- Custom styles for this template -->
  <!-- <link href="/css/form-validation.css" rel="stylesheet"> -->

  <meta charset="utf-8">
  <!-- META DATA -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!--font-family-->
  <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

  <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />
  <?php echo $this->Html->css('fontawesome') ?>
  <?php echo $this->Html->css('animate') ?>
  <?php echo $this->Html->css('hover-min') ?>
  <?php echo $this->Html->css('datepicker') ?>
  <?php echo $this->Html->css('owl.carousel') ?>
  <?php echo $this->Html->css('owl.theme.default') ?>
  <?php echo $this->Html->css('jqueryui') ?>
  <?php echo $this->Html->css('bootstrap') ?>
  <?php echo $this->Html->css('bootsnav') ?>
  <?php echo $this->Html->css('style') ?>
  <?php echo $this->Html->css('responsive') ?>
</head>


<body>
  <section id="home" class="about-us">
    <div class="container">
      <div class="about-us-content">

        <!--/.row-->
      </div>
      <!--/.about-us-content-->
    </div>
    <!--/.container-->

  </section>
  <section id="home2" class="about-us2">
    <div class="container2">
      <div class="about-us-conten2t">

        <!--/.row-->
      </div>
      <!--/.about-us-content-->
    </div>
    <!--/.container-->

  </section>

  <header class="top-area">
    <div class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <div class="logo">
              <a href="index.html">
                tour<span>Nest</span>
              </a>
            </div><!-- /.logo-->
          </div><!-- /.col-->
          <div class="col-sm-10">
            <div class="main-menu">

              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <i class="fa fa-bars"></i>
                </button><!-- / button-->
              </div><!-- /.navbar-header-->
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="smooth-menu"><a href="#home">Home</a></li>
                  <li class="smooth-menu"><a href="#gallery">Destinations</a></li>
                  <li class="smooth-menu"><a href="#pack">Tickets </a></li>
                  <!-- <li class="smooth-menu"><a href="#spo">Special Offers</a></li> -->
                  <!-- <li class="smooth-menu"><a href="#subs">subscription</a></li> -->
                  <!-- <li>
											<button class="book-btn">book now
											</button>
										</li>/.project-btn  -->
                  <li class="smooth-menu">
                    <?php
                    if ($this->request->session()->read('Auth.User.role') == 'admin') {
                      echo $this->Form->button('Usuarios', array(
                        'type' => 'button',
                        'class' => 'book-btn',
                        'onclick' => 'location.href=\'/users\';',
                      ));
                    }
                    ?>
                  </li>

                  <!--  Boton de registrar y email de ususario -->
                  <li class="smooth-menu">
                    <?php
                    if (!$this->request->session()->read('Auth.User.id')) {
                      echo $this->Form->button('Registrar', array(
                        'type' => 'button',
                        'class' => 'book-btn',
                        'onclick' => 'location.href=\'/users/add/\';',
                      ));
                    } else {
                      echo '<a href="#">' . $this->request->session()->read('Auth.User.email') . '</a>';
                    }
                    ?>
                  </li>

                  <!-- Boton de Login y Logout -->
                  <li class="smooth-menu">
                    <?php
                    if (!$this->request->session()->read('Auth.User.id')) {
                      echo $this->Form->button('Login', array(
                        'type' => 'button',
                        'class' => 'book-btn',
                        'onclick' => 'location.href=\'/users/login/\';',
                      ));
                    } else {
                      echo $this->Form->button('Logout', array(
                        'type' => 'button',
                        'class' => 'book-btn',
                        'onclick' => 'location.href=\'/users/logout/\';',
                      ));
                    }
                    ?>
                  </li>


                  <li class="smooth-menu">
                    <?php if ($this->request->session()->read('Auth.User.id')) {
                      echo '<img onclick="location.href=\'http://localhost/users/profile/' . $this->request->session()->read('Auth.User.id') . '\'" class="perfil" src="' . ($this->request->session()->read('Auth.User.profile_picture') != null ? '/imagenes/' . $this->request->session()->read('Auth.User.profile_picture') : " https://thumbs.dreamstime.com/b/icono-del-s%C3%B3lido-negro-avatar-perfil-de-usuario-121102166.jpg") . '" alt="" height="40px" width="40px">';
                    } else {
                    }
                    ?>
                    <!-- </a> -->
                  </li>


                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.main-menu-->
          </div><!-- /.col-->
        </div><!-- /.row -->
        <div class="home-border"></div><!-- /.home-border-->
      </div><!-- /.container-->
    </div><!-- /.header-area -->

  </header>







  <div class="divisor">
    <span></span>
  </div>

  <body class="bg-light">

    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2>Ticket Sale Form</h2>
        </div>

        <div class="single-package-item">
          <img src="https://www.peru.travel/Contenido/Destino/Imagen/es/5/1.2/Principal/SouthAmericaPeru2017_1010_180704-5912_AGP_HDR.jpg" alt="package-place">
          <div class="single-package-item-txt">
            <h3>Ica</h3>
            <h3> S/40</h3>
            <div class="packages-para">
              <p>
                <span>
                  <i class="fa fa-angle-right"></i> 7 horas de viaje
                </span>
                <i class="fa fa-angle-right"></i> servicio 5 estrellas
              </p>
              <p>
                <span>
                  <i class="fa fa-angle-right"></i> transporte bus-cama
                </span>
                <i class="fa fa-angle-right"></i> faclidad de transporte de mascotas
              </p>
            </div>
            <!--/.packages-para-->
            <div class="packages-review">
              <p>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <span>447 reviews</span>
              </p>
            </div>
            <!--/.packages-review-->
            <!--/.about-btn-->
          </div>
          <!--/.single-package-item-txt-->
        </div>



        <div class="div-form ">

          <?= $this->Form->create() ?>
          <div class="formulario">
            <div class="columna">
              <label for="firstName" class="form-label">Names</label>
              <input type="text" id="Names" placeholder="" name="Names">
            </div>

            <div class="columna">
              <label for="lastName" class="form-label">Surnames</label>
              <input type="text" id="Surnames" placeholder="" name="Surnames">
            </div>

            <div class="columna">
              <label for="username" class="form-label">DNI</label>
              <input type="text" id="dni" placeholder="Username" name="dni">
            </div>

            <div class="columna">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" placeholder="you@example.com" name="email">
            </div>

            <div class="columna">
              <label for="address" class="form-label">Origin</label>
              <input type="text" id="origin" value="Arequipa" name="origin">

            </div>

            <div class="columna">
              <label for="address2" class="form-label">Destination<span class="text-muted"></span></label>
              <input type="text" id="destination" value="Ica" name="destination">
            </div>


            <button class=" book-btn w-100 btn btn-primary btn-lg" type="submit">Buy</button>
            <?= $this->Form->end() ?>
          </div>
        </div>
      </main>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017–2021 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <?php echo $this->Html->script('dist/js/bootstrap.bundle.min.js') ?>
    <!-- <script src="/assets/dist/js/bootstrap.bundle.min.js"></script> -->
    <?php echo $this->Html->script('form-validation') ?>
    <!-- <script src="/js/form-validation.js"></script> -->
  </body>

  <style>
    input {
      width: 100%;
      height: 45px;
      border: 1px solid black;
      border-radius: 10px;
      padding: 10px;
      font-size: 20px;
    }

    label {
      color: white;
      font-size: 20px;
      text-shadow: 1px 1px 4px black;
    }

    .columna {
      margin: 10px;
      width: 50%;

    }

    .formato {
      margin-top: 5%;
      margin-left: 10%;
      margin-right: 10%;
      margin-bottom: 5%;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 20px;
      border: 2px solid black;
    }


    .time {
      color: black;
      font-size: 14px;
      padding: 0;
      margin: 10px 0;
    }

    .travelSchedules h3,
    .heading {
      color: rgba(77, 78, 84, 1);
      text-shadow: 1px 1px 5px white;
    }

    .travelSchedules h3 {
      font-size: 40px;
    }

    .side-nav a {
      color: white;
      text-shadow: 1px 1px 2px black;
      margin: 5px 5px;
    }

    .heading,
    .side-nav a {
      font-size: 25px;
    }

    .paginator p {
      color: white;
    }

    body {
      background: linear-gradient(0deg, #fff, #00d8ff, #fff);
    }

    .header-area {
      width: 100%;
      right: 0;
      position: fixed;
      background: rgba(77, 78, 84, 1);
      padding: auto auto;
    }

    .divisor {
      height: 100px;
    }

    table,
    th,
    td {
      border: 3px solid rgba(0, 0, 0, 0.2);
      border-radius: 3px;
    }

    th,
    td {
      padding: 10px 10px;
      background-color: white;
    }

    .about-us {
      display: flex;
      justify-content: center;
      align-items: center;

      position: absolute;
      background: url(../../assets/images/home/banner.jpg)no-repeat;
      background-size: cover;
      background-position: center;
      min-height: 500px;

      top: 0;
      left: 0;
      width: 100vw;
      height: 100%;
      z-index: -2;
    }

    .about-us:before {
      position: fixed;
      content: "";
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0, 122, 207, .4);
      z-index: -2;
    }

    /*about-us-content*/
    .about-us-content {
      margin: -175px 0 0 0;
      z-index: -2;
    }

    .about-us h2 {
      color: #fff;
      font-size: 84px;
      text-transform: inherit;
      max-width: 800px;
      font-weight: 600;
      line-height: 1.22;
    }

    .about-us h2 span {
      color: #2bdab5;
      margin-top: -11px;
    }

    .travelSchedules {
      z-index: 1;
    }

    .single-package-item {
      height: 80vh;
      width: 60vh;
      margin: auto auto;
      background-color: rgba(10, 15, 20, 0.4);
      border-radius: 20px;
      margin-bottom: 100px;
    }

    h3,
    span,
    .single-package-item h3 {
      color: white;
    }

    .formulario {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
    }



    .about-us2 {
      position: fixed;
      display: flex;
      justify-content: center;
      align-items: center;

      position: absolute;
      background: url(https://www.peru.travel/Contenido/Destino/Imagen/es/5/1.2/Principal/SouthAmericaPeru2017_1010_180704-5912_AGP_HDR.jpg)no-repeat;
      background-size: cover;
      background-position: center;
      min-height: 500px;

      top: 100vh;
      left: 0;
      width: 100vw;
      height: 100%;
      z-index: -3;
    }

    .about-us2:before {
      position: fixed;
      content: "";
      top: 100vh;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0, 122, 207, .4);
      z-index: -2;
    }

    /*about-us-content*/
    .about-us-content2 {
      margin: -175px 0 0 0;
      z-index: -2;
    }

    .about-us2 h2 {
      color: #fff;
      font-size: 84px;
      text-transform: inherit;
      max-width: 800px;
      font-weight: 600;
      line-height: 1.22;
    }

    .about-us2 h2 span {
      color: #2bdab5;
      /* margin-top: -11px; */
    }
  </style>

</html>