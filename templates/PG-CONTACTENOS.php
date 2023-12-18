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
    <!-- Book Now Section End -->
    <section id="welcome-text">
                <div class="container">
                    <h2>Descubre la Magia del <span>Teleférico de Puerto Plata</span></h2>
                    <p>Una Aventura Inolvidable</p>
                </div>
            </section>
    <section id="gallery">
        <div class="containerpg">
        
        <div class="wrapper2">
            <div class="center-line">
            
            </div>
            <div class="row row-1">

            
      <section>
        <i class="icon fas fa-map-marker-alt"></i>
        <!--<i class="icon fas fa-home"></i>-->
        <div class="details">
          <span class="title">Llegada a las Instalaciones del Teleférico</span>
        </div>
        <p>Inicia tu día con emoción. Al llegar a nuestras modernas instalaciones, serás recibido por nuestro personal amable y atento. Sumérgete en la atmósfera vibrante y prepárate para una jornada llena de aventuras.</p>
        <div class="bottom">
          <!--<a href="#">Read more</a>-->
        </div>
      </section>
    </div>
    <div class="row row-2">
      <section>
      <i class="icon fas fa-globe"></i>
        
        <div class="details">
          <span class="title">Adquiere tus Tickets</span>
        </div>
        <p>Dirígete a nuestro centro de boletos y adquiere tus tickets para ti y tus acompañantes. Nuestro personal estará encantado de guiarte en el proceso y responder cualquier pregunta que puedas tener. ¡Prepárate para embarcarte en una experiencia única!</p>
        <div class="bottom">
          <!--<a href="#">Read more</a>-->
        </div>
      </section>
    </div>
    <div class="row row-1">
      <section>
      <i class="icon fas fa-star"></i>
        <!--<i class="icon fas fa-rocket"></i>-->
        <div class="details">
          <span class="title">Sumérgete en la Música Típica</span>
        </div>
        <p>Antes de abordar el teleférico, déjate llevar por los ritmos envolventes de la música típica local. Nuestro escenario musical crea un ambiente festivo, añadiendo un toque especial a tu día.</p>
        <div class="bottom">
          <!--<a href="#">Read more</a>-->
        </div>
      </section>
    </div>
    <div class="row row-2">
      <section>
      <i class="icon fas fa-star"></i>
        <div class="details">
          <span class="title">Aborda el Funicular hacia la Cima</span>
        </div>
        <p>Es hora de elevarse hacia las alturas. Sube a bordo de nuestro moderno funicular y disfruta de vistas panorámicas impresionantes mientras te desplazas hacia la cima de la montaña. Aprovecha para tomar fotografías y disfrutar del paisaje que se despliega ante tus ojos.</p>
        <div class="bottom">
          <!--<a href="#">Read more</a>-->
        </div>
      </section>
    </div>
    <div class="row row-1">
      <section>
        <i class="icon fas fa-star"></i>
        <!--<i class="icon fas fa-paper-plane"></i>-->
        <div class="details">
          <span class="title">Explora el Parque Monumento Natural Loma Isabel de Torres</span>
        </div>
        <p>Al llegar a la cima, te encontrarás inmerso en el fascinante Parque Monumento Natural Loma Isabel de Torres. Déjate maravillar por la diversidad de flora y fauna, y explora senderos que te llevarán a lugares mágicos. Descubre monumentos emblemáticos y tómate tu tiempo para absorber la belleza que te rodea.</p>
        <div class="bottom">
          <!--<a href="#">Read more</a>-->
        </div>
      </section>
    </div>
    <div class="row row-2">
      <section>
      <i class="icon fas fa-home"></i>
        
        <div class="details">
          <span class="title">Descenso y Despedida</span>
        </div>
        <p>Después de una jornada llena de descubrimientos, aborda nuevamente el funicular para regresar a la instalación base. Reflexiona sobre las experiencias vividas mientras desciendes, y aprovecha para comprar recuerdos en nuestras tiendas. ¡Tu día con nosotros ha sido inolvidable!</p>
        <div class="bottom">
          <!--<a href="#">Read more</a>-->
        </div>
      </section>
    </div>
  </div>
        </div>
        </section>
        

            <!-- Gallery Section Ends -->

    <!-- Mutiple Slider Section Starts -->
    <section id="water-slider">
        <div class="containerpg">
            <h3>“Una Experiencia de Altura”</h3>
      
        </div>
    </section>
    <!-- Blog Section Starts -->
    <section id="blog">
        
            <main class="main">
            <div class="containerpg2">
            <div class="left-containermm">
                <div class="text-containermm">
                <h1>Disfruta del unico <span>Teleferico Turistico</span> del caribe.</h1>
                <p>
                Explorar Puerto Plata se torna incompleto sin experimentar el teleférico, el único en toda la región caribeña que ha estado operando de manera continua desde 1975. Este emocionante viaje de 10 minutos te transporta a 800 metros sobre el paisaje mágico de Puerto Plata, brindándote vistas panorámicas del mar al norte y las exuberantes llanuras que, al final de la travesía, te conducen a la majestuosa Loma Isabel de Torres. Adéntrate en esta reserva natural y su cautivador jardín botánico, y revive la maravilla del teleférico durante tu descenso. Una experiencia que fusiona la naturaleza con la innovación, garantizando un recuerdo inolvidable.</p>
                </div>
        
                <div class="stats-containerm">
                <ul>
                    <li><span>755+</span> Usuarios Diarios</li>
                    <li><span>22,650+</span> Usuarios Mensuales</li>
                    <li><span>275,575+</span> Usuarios anuales</li>
                </ul>
                </div>
            </div>
        
            <div class="right-containermm">
                <div class="background-image">
                <div class="background-color"></div>
                </div>
            </div>
            </div>
        </main>
    </section>

<?php get_footer();?>