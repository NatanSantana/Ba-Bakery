<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<script src="<?php echo get_stylesheet_directory_uri(); ?>script.js"></script>

<!-- Header Wordpress -->
<?php wp_head(); ?>
</head>
<!-- Final Header Wordpress -->

<body>
    <header id="home"> <!-- Parte destinada ao navbar -->
      <nav>
        <div class="creme d-flex justify-content-around">
            <ul class="nav ml-3 d-flex align-items-center" style="font-family: 'Noto Sans', sans-serif;">
            <li class="nav-item">
              <a class="nav-link text-body text-uppercase font-weight-bold" href="#about"><?php the_field('quem_somos'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-body text-uppercase font-weight-bold" href="#"><?php the_field('equipe'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-body text-uppercase font-weight-bold" href="#contact"><?php the_field('contato'); ?></a>
            </li>
          </ul>
          <div class="square d-flex justify-content-center"> <!--Quadrado da logo-->
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo 232.svg" alt="Logo da empresa contendo um rolo de massa seguido de um coração acima, o nome Ba Bakery abaixo e que é um estúdio de bolo/confeitaria.">
        </div>
        <div class="d-flex align-items-center mr-5">
          <a class="socials_market flex-row mr-4 d-inline" href="https://www.facebook.com/" style="height:10px";><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/XMLID_834_.svg" alt="Logo do facebook"></a>
          <a class="socials_market flex-row mr-4 d-inline" href="https://www.instagram.com/" style="height:10px";><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagram-logo.svg" alt="Logo do instagram"></a>
          <a class="socials_market flex-row mr-4 d-inline" href="https://twitter.com/home" style="height:10px";><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.svg" alt="Logo do Twitter"></a>
          <a class="socials_market flex-row mr-1 ml-5 d-inline" href="#" style="height:10px";><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Caminho 227.svg" alt="Carrinho de compras"></a>
          <a href="#"><span class="badge badgeMarket align-items-center text-white pt-2">02</span></a>
        
        </div>
        </div>
      </nav>
      <div class="headerOut"></div>
    </header>

    <!-- Navbar Final -->
