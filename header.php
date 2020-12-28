<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="<?php bloginfo('template_url'); ?> /css/bootstrap.min.css">
     <!-- Style -->
     <link rel="stylesheet" href="<?php bloginfo('template_url'); ?> /style.css">

     <style>
        .suscribir{
            background: url("<?php bloginfo('template_url'); ?>/assets/bg.png");
            background-size: cover ;
            background-position: center;
            height: 400px ;
        }
    </style>


    <title>Personeria Municipal de Piedecuesta</title>
  </head>
  <body>
   
   <!-- NavBar -->
   <div class="container-fluid fixed-top" >

        <!-- Image and text -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- <div class="container-fluid"> -->
                <div class="container">
                    <a class="navbar-brand" href="#">
                      <img src="assets/logo.png" alt="" width="150" height="50">
                    </a>
                  </div>
            <!-- <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                  <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Quienes Somos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Transparencia</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Publicaciones</a>
                  </li>
                </ul> -->
               
               <!-- </div> -->
           <!-- </div> -->

            <?php wp_nav_menu(array(
                'theme_location' => 'superior',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarText',
                'items_wrap' => ' <ul class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>',
                'menu_class' => 'nav-item'
            ) ); ?>
          </nav>

   </div>


   <!--- Fin Navbar -->
