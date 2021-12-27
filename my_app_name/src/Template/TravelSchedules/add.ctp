<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TravelSchedule $travelSchedule
 */
?>

<head>
    <meta charset="utf-8">
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


    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

    <!-- main-menu Start -->
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
                                            echo $this->Form->button('Admin', array(
                                                'type' => 'button',
                                                'class' => 'book-btn',
                                                'onclick' => 'location.href=\'/admin\';',
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
                                            echo '<a href="./users/profile/' . $this->request->session()->read('Auth.User.id') . '">' . $this->request->session()->read('Auth.User.email') . '</a>';
                                        }
                                        ?>
                                    </li>

                                    <!-- Boton de Login y Logout -->
                                    <li class="smooth-menu">
                                        <?php if (!$this->request->session()->read('Auth.User.id')) {
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
                                    <!-- <img src="" alt=""> -->




                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.main-menu-->
                    </div><!-- /.col-->
                </div><!-- /.row -->
                <div class="home-border"></div><!-- /.home-border-->
            </div><!-- /.container-->
        </div><!-- /.header-area -->

    </header><!-- /.top-area-->

    <section id="home" class="about-us">
        <div class="container">
            <div class="about-us-content">

                <!--/.row-->
            </div>
            <!--/.about-us-content-->
        </div>
        <!--/.container-->

    </section>

    <div class="divisor">
        <span></span>
    </div>


    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Travel Schedules'), ['action' => 'index']) ?></li>
        </ul>
    </nav>
    <div class="formato">
        <?= $this->Form->create($travelSchedule) ?>
        <fieldset>
            <?php
            echo $this->Form->control('Travel_Schedules_Date', ['empty' => true]);
            echo $this->Form->control('Travel_Schedules_Hour', ['empty' => true]);
            echo $this->Form->control('Travel_Schedules_Transport_Code');
            echo $this->Form->control('Travel_Schedules_Code_Route');
            echo $this->Form->control('Travel_Schedules_Registration_Status');
            ?>
        </fieldset>
        <input class="book-btn" type="submit" value="Submit">

        <?= $this->Form->end() ?>
    </div>

    <style>
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
            color: rgba(0, 122, 207, .4);
            text-shadow: 1px 1px 2px white;
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
            height: 150px;
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


        .side-nav a {
            color: white;
            text-shadow: 1px 1px 2px black;
            margin: 5px 5px;
        }
    </style>