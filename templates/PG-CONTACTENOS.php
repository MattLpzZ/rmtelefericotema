<?php 

/* Template Name: Template PG Contactenos*/ 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1" />
   
    <!-- Título de pestaña -->
    <title>Teleférico Puerto Plata</title>

    <!-- Ícono de pestaña -->
    <link rel="icon" href="<?php bloginfo('template_url')?>/assets/images/TELEPOP INCORecurso 3.png">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,600;1,300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-landing.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nav.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <!--<div id="arrow">
        <i class="fa fa-arrow-up"></i>
    </div>

    <button id="toggle-btn">
        <i class="fa fa-bars"></i> 
    </button>-->
    
    <header class="hero">
    <nav class="nav container" id="nav">
        <a href="<?php echo home_url(); ?>"><img loading="lazy" class="nav__logo" src="<?php bloginfo( 'template_url' )?>/assets/images/LGTELEFERICO.png"></a>

        <?php
        // Comprobar si el menú "Superior" está registrado
        if (has_nav_menu('Superior')) {
            wp_nav_menu(array(
                'theme_location' => 'Superior',
                'container' => 'nav',
                'container_class' => 'nav-container',
                'container_id' => 'nav-container',
                'items_wrap' => '<ul class="nav__links">%3$s</ul>',
                'menu_class' => 'nav__item',
            ));
        } else {
            // Menú de respaldo o estructura de navegación alternativa
            echo '<nav class="nav-container">';
            echo '<ul class="nav__links">';
            echo '<li class="nav__item"><a href="/">Inicio</a></li>';
            echo '<li class="nav__item"><a href="/sobre-nosotros">Sobre Nosotros</a></li>';
            echo '<li class="nav__item"><a href="/contacto">Contacto</a></li>';
            echo '</ul>';
            echo '</nav>';
        }
        ?>

        <a href="#nav" class="nav__hamburguer">
            <img src="<?php bloginfo( 'template_url' )?>/assets/images/menu.svg" class="nav__icon">
        </a>

        <a href="#" class="nav__close">
            <img src="<?php bloginfo( 'template_url' )?>/assets/images/close.svg" class="nav__icon">
        </a>
    </nav>

</header>

        <section class="containervid">
          
        <div class="header-info-par">
            <h1 class="typewrite" data-period="2000"
                data-type='["<?php echo esc_html(get_theme_mod("custom_h1")); ?>"]'>
            </h1>
            <p><?php echo esc_html(get_theme_mod("custom_paragraph", "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, ea. Mollitia maiores voluptatum vitae suscipit tenetur ut officiis assumenda ipsam.")); ?></p>
            <a href="<?php echo esc_url(get_permalink(get_theme_mod("read_more_page", "#"))); ?>" class="a"><?php esc_html_e('Read More', 'your-text-domain'); ?></a>
        </div>


        <div class="video">
            <video id="video" autoplay loop muted playsinline>
                <source src="<?php echo esc_url(get_theme_mod('video_url', get_template_directory_uri() . '/assets/images/mivideo.mp4')); ?>" type="video/mp4" />
            </video>
        </div>

        </section>
    
    <!-- Second Slides Section -->
    <section id="welcome-text">
        <div class="container">
            <h2>Conoce nuestras tarifas</h2>
            <p>Aplica por el descuento de temporada mostrando tu documento de identidad o residencia.</p>
        </div>
    </section>
    <!-- Cards Precio Section Start-->
    <section id="slides-par">
        <div class="container">

        <div class="wrapper">
    <div class="table basic">
      <div class="price-section">
        <div class="price-area">
          <div class="inner-area">
            <span class="text">$</span>
            <span class="price">00</span>
          </div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">Menores de 4 años</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Acceso al parque</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Viaje de ida y vuelta</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
      </ul>
      <!--<div class="btn"><button>Purchase</button></div>-->
    </div>
    <div class="table premium">
      <!--<div class="ribbon"><span>Recommend</span></div>-->
      <div class="price-section">
        <div class="price-area">
          <div class="inner-area">
            <span class="text">$</span>
            <span class="price">05</span>
          </div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">Jovenes de 5 a 10 años</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Acceso al parque</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Viaje de ida y vuelta</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
      </ul>
     <!-- <div class="btn"><button>Purchase</button></div>-->
    </div>
    <div class="table ultimate">
      <div class="price-section">
        <div class="price-area">
          <div class="inner-area">
            <span class="text">$</span>
            <span class="price">10</span>
          </div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">Adultos mayores de 11 años</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Acceso al parque</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Viaje de ida y vuelta</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
      </ul>
     <!-- <div class="btn"><button>Purchase</button></div>-->
    </div>
  </div>
        </div>
    </section>

    <section id="welcome2-text2">
        <div class="container">
            <p>Valores en dolares.</p>
        </div>
    </section>
    <!-- Slides Section Start-->

    <!-- Book Now Section Start -->
    <section id="book">
      
        <div class="containerpg">

            <div class="book-content-par">

            <div class="container4">
                <div class="content4">

                  <div class="left-side">
                    <div class="address details">
                      <i class="fas fa-map-marker-alt"></i>
                      <div class="topic">Direccion</div>
                      <div class="text-one"><a href="https://maps.app.goo.gl/UxA1xuGF6ihsRAREA" target="black">C. del Teleférico, Puerto Plata</a></div>
                      <!--<div class="text-two">Birendranagar 06</div>-->
                    </div>
                    <div class="phone details">
                      <i class="fas fa-phone-alt"></i>
                      <div class="topic">Phone</div>
                      <div class="text-one"><a href="tel:+18099700501" target="black">+1 (809) 970 0501</a></div>
                       <!--<div class="text-two">+0096 3434 5678</div>-->
                    </div>
                    <div class="email details">
                      <i class="fas fa-envelope"></i>
                      <div class="topic">Email</div>
                      <div class="text-one"><a href="mailto:info@telefericopuertoplata.com" target="black">info@telefericopuertoplata.com</a></div>
                       <!--<div class="text-two">info.codinglab@gmail.com</div>-->
                    </div>
                  </div>
                  <div class="right-side">
                    <div class="topic-text">Envianos un mensaje</div>
                    <p>Por via de nuestros canales, usted y su grupo pueden planificar de manera efectiva su visita al Teleferico de Puerto Plata.</p>
                  <form action="#">
                    <div class="input-box">
                      <input type="text" placeholder="Enter your name">
                    </div>
                    <div class="input-box">
                      <input type="text" placeholder="Enter your email">
                    </div>
                    <div class="input-box message-box">
                      
                    </div>
                    <div class="button">
                      <input type="button" value="Send Now" >
                    </div>
                  </form>
                </div>

                </div>
              </div> 

            </div>

        </div>
    </section>

    <!-- Mutiple Slider Section Starts -->
    <section id="water-slider">
        <div class="containerpg">
            <h3>“Una Experiencia de Altura”</h3>
      
        </div>
    </section>

<?php get_footer();?>