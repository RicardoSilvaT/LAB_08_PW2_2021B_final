<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login Form Design One | Fazt</title>
  <!-- META DATA -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!--font-family-->
  <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
  <title>Travel</title>
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
  <div class="fondo1">
    <div class="fondo2">
    </div>
  </div>


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
                  <li class="smooth-menu"><a href="#home">home</a></li>
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




                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.main-menu-->
          </div><!-- /.col-->
        </div><!-- /.row -->
        <div class="home-border"></div><!-- /.home-border-->
      </div><!-- /.container-->
    </div><!-- /.header-area -->

  </header><!-- /.top-area-->
  <!-- main-menu End -->

  <div class="login-box">
    <h1>Login</h1>
    <?= $this->Form->create() ?>

    <!-- USERNAME INPUT -->
    <label for="username">Email</label>
    <input type="text" name="email" placeholder="Ingrese Email">
    <!-- PASSWORD INPUT -->
    <label for="password">Contraseña</label>
    <input type="password" name="password" placeholder="Ingrese Contraseña">
    <input type="submit" class="book-btn" value="Login">
    <?= $this->Form->end() ?>
  </div>



</body>
<style>


  html,
  body,
  div,
  span,
  object,
  iframe,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p,
  blockquote,
  pre,
  abbr,
  address,
  cite,
  code,
  del,
  dfn,
  em,
  img,
  ins,
  kbd,
  q,
  samp,
  small,
  strong,
  sub,
  sup,
  var,
  b,
  i,
  dl,
  dt,
  dd,
  ol,
  ul,
  li,
  fieldset,
  form,
  label,
  legend,
  table,
  caption,
  tbody,
  tfoot,
  thead,
  tr,
  th,
  td,
  article,
  aside,
  canvas,
  details,
  figcaption,
  figure,
  footer,
  header,
  hgroup,
  menu,
  nav,
  section,
  summary,
  time,
  mark,
  audio,
  video {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
  }
  
  body {
    line-height: 1;
    color: white;
  }

  article,
  aside,
  details,
  figcaption,
  figure,
  footer,
  header,
  hgroup,
  menu,
  nav,
  section {
    display: block;
  }

  nav ul {
    list-style: none;
  }

  blockquote,
  q {
    quotes: none;
  }

  blockquote:before,
  blockquote:after,
  q:before,
  q:after {
    content: '';
    content: none;
  }

  a {
    margin: 0;
    padding: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
  }

  /* change colours to suit your needs */

  ins {
    background-color: #ff9;
    color: #000;
    text-decoration: none;
  }

  /* change colours to suit your needs */

  mark {
    background-color: #ff9;
    color: #000;
    font-style: italic;
    font-weight: bold;
  }

  del {
    text-decoration: line-through;
  }

  abbr[title],
  dfn[title] {
    border-bottom: 1px dotted;
    cursor: help;
  }

  table {
    border-collapse: collapse;
    border-spacing: 0;
  }



  /* change border colour to suit your needs */
  hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #cccccc;
    margin: 1em 0;
    padding: 0;
  }

  input,
  select {
    vertical-align: middle;
  }

  .nom {
    position: absolute;
    right: 10px;
    top: 10px;
    color: white;
  }

  body {
    margin: 0;
    padding: 0;
    /* implement background light blue */
    /* background-image: url("http://3.bp.blogspot.com/-20llUqVo5Co/VUJuYvnDyMI/AAAAAAAAAJU/YpBMhaKa4PA/s1600/kissia.jpg");  */
    /* background-color: rgba(0, 122, 207, .4);  */
    background-size: cover;
    font-family: sans-serif;
    height: 100vh;
  }

  .fondo1 {
    position: absolute;
    /* right: 4%; */
    width: 100vw;
    height: 100vh;
    margin: 0 0;
    padding: 0 0;
    border: 0 0;
    z-index: 0;

    background: url("https://lluviadearticulos.files.wordpress.com/2018/02/tour-a-tarapoto-todo-incluido.jpg");
    background-size: cover;

  }

  .fondo2 {
    /* position: absolute; */
    /* right: 4%; */
    width: 100vw;
    height: 100vh;
    margin: 0 0;
    padding: 0 0;
    z-index: 0;
    border: 0 0;

    background: red;
    background-size: cover;
    background-color: rgba(0, 122, 207, .4);

  }

  .container {
    margin: 0px 0px;
    padding: 0px 0px;
    border: 0px 0px;
  }

  .login-box {
    width: 320px;
    height: 420px;
    background: rgba(250, 250, 256, 0.74);
    color: black;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 70px 30px;

    border-radius: 15px;
    border: 6px solid rgba(77, 78, 84, 0.8);
    box-shadow: 0px 0px 5px white;
  }

  .header-area {
    width: 100%;
    right: 0;
    position: fixed;
    background: rgba(77, 78, 84, 1);
    padding: auto auto;
  }
  .col-sm-2{
    border-left: 10%;
  }

  .login-box .avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
  }

  .login-box h1 {
    margin: 0;
    /* implement text color */
    color: #000;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
  }

  .login-box label {
    margin: 0;
    padding: 0;
    font-weight: bold;
    display: block;
  }

  .login-box input {
    width: 100%;
    margin-bottom: 20px;
  }

  .login-box input[type="text"],
  .login-box input[type="password"] {
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
  }



  .login-box a {
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
  }

  .login-box a:hover {
    color: #fff;
  }

  .login-box input[type="text"], .login-box input[type="password"] {
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
}


</style>

</html>