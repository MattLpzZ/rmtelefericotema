<?php 
/**
 * The main template file.
 *
 * @link https://github.com/MattLpzZ/website-turistico
 *
 * @package Rm Graphic & Desing - MattLpzZ
 * @subpackage RmTelefericoTema
 * @since RmTelefericoTema 1.3
 */

get_header();?>

<section id="water-slider">
    <div class="containerpg">
        <h3><?php echo get_theme_mod('water_slider_text', '“Una Experiencia de Altura”'); ?></h3>
    </div>
</section>

<section id="sc123">
	<div class="wrp56">
		<div class="cnt78">
			<h1>spring collection</h1>
			<p class="dsc34">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			<a href="#">discover now</a>
		</div>
		<div class="med98">
			<div class="bg23">
				<img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412556/E-commerce%20landing%20page/summer-collection/cold-fashion-man-women_3x.jpg" alt="sc-image" />
			</div>
		</div>
	</div>
</section>

	
<div id="unique-container-text">
  único
  <div id="unique-flip-container">
    <div><div>En el Caribe</div></div>
    <div><div>Teleférico Turístico</div></div>
    <div><div>En Puerto Plata</div></div>
  </div>
  ¡Visítanos Ya!
</div>


<section class="welcome-section" id="welcome-section">
    <div class="container">
        <h2>
            <?php echo get_theme_mod('welcome_title', 'Descubre la Magia del Teleférico de Puerto Plata: Una Aventura Inolvidable'); ?>
        </h2>
        <p>
            <?php echo get_theme_mod('welcome_paragraph', 'Aplica por el descuento de temporada mostrando tu documento de identidad o residencia.'); ?>
        </p>
    </div>
</section>

<section id="gallery-section">
    <div class="containerpg">
        <div class="gallery-wrapper">
            <div class="center-line"></div>

            <div class="gallery-row gallery-row-1">
                <div class="gallery-item">
                    <i class="icon fas fa-map-marker-alt"></i>
                    <div class="details">
                        <span class="title">
                            <?php echo get_theme_mod('gallery_title_1', 'Llegada a las Instalaciones del Teleférico'); ?>
                        </span>
                    </div>
                    <p>
                        <?php echo get_theme_mod('gallery_paragraph_1', 'Inicia tu día con emoción. Al llegar a nuestras modernas instalaciones, serás recibido por nuestro personal amable y atento. Sumérgete en la atmósfera vibrante y prepárate para una jornada llena de aventuras.'); ?>
                    </p>
                </div>
            </div>

            <div class="gallery-row gallery-row-2">
                <div class="gallery-item">
                    <i class="icon fas fa-globe"></i>
                    <div class="details">
                        <span class="title">
                            <?php echo get_theme_mod('gallery_title_2', 'Adquiere tus Tickets'); ?>
                        </span>
                    </div>
                    <p>
                        <?php echo get_theme_mod('gallery_paragraph_2', 'Dirígete a nuestro centro de boletos y adquiere tus tickets para ti y tus acompañantes. Nuestro personal estará encantado de guiarte en el proceso y responder cualquier pregunta que puedas tener. ¡Prepárate para embarcarte en una experiencia única!'); ?>
                    </p>
                </div>
            </div>

            <div class="gallery-row gallery-row-1">
                <div class="gallery-item">
                    <i class="icon fas fa-star"></i>
                    <div class="details">
                        <span class="title">
                            <?php echo get_theme_mod('gallery_title_3', 'Sumérgete en la Música Típica'); ?>
                        </span>
                    </div>
                    <p>
                        <?php echo get_theme_mod('gallery_paragraph_3', 'Antes de abordar el teleférico, déjate llevar por los ritmos envolventes de la música típica local. Nuestro escenario musical crea un ambiente festivo, añadiendo un toque especial a tu día.'); ?>
                    </p>
                </div>
            </div>

            <div class="gallery-row gallery-row-2">
                <div class="gallery-item">
                    <i class="icon fas fa-star"></i>
                    <div class="details">
                        <span class="title">
                            <?php echo get_theme_mod('gallery_title_4', 'Aborda el Funicular hacia la Cima'); ?>
                        </span>
                    </div>
                    <p>
                        <?php echo get_theme_mod('gallery_paragraph_4', 'Es hora de elevarse hacia las alturas. Sube a bordo de nuestro moderno funicular y disfruta de vistas panorámicas impresionantes mientras te desplazas hacia la cima de la montaña. Aprovecha para tomar fotografías y disfrutar del paisaje que se despliega ante tus ojos.'); ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="galery-slider">
  <div class="image-slider">
    <section class="slider__content">
        <button type="button" class="slider-control--button prev-button">
            <svg width="16" height="16" fill="currentColor" class="icon arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
            </svg>
        </button>
        <main class="image-display">
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <?php $image_url = get_theme_mod('slider_image_' . $i); ?>
                <?php if ($image_url) : ?>
                    <div class="slider-image" style="background-image: url('<?php echo esc_url($image_url); ?>');">
                        <a href="<?php echo esc_url(get_theme_mod('slider_image_link_' . $i, '#')); ?>" class="slider-link"></a>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </main>
        <button type="button" class="slider-control--button next-button">
            <svg width="16" height="16" fill="currentColor" class="icon arrow-right-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
            </svg>
        </button>
    </section>
    <nav class="slider-navigation">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <?php $thumbnail_url = get_theme_mod('slider_image_' . $i); ?>
            <button class="nav-button" aria-selected="false">
                <img class="thumbnail" src="<?php echo esc_url($thumbnail_url); ?>" alt="TPP IMG <?php echo $i; ?>" />
            </button>
        <?php endfor; ?>
    </nav>
  </div>
</section>

<section class="container-bannerfin">
  <h1>Ver Calendario de Cruceros</h1>
  <a href="<?php echo esc_url( get_theme_mod('bannerfin_url', 'https://tupagina.com') ); ?>" target="_blank">
    <button data-hover="Gracias!">
      <div>Ver!</div>
    </button>
  </a>
</section>




<?php get_footer();?>