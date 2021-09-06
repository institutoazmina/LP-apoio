<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/dist/css/style.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/dist/css/main.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php $bgDesk = get_field('banner-imagem-de-fundo-desk'); ?>
    <?php $bgMobile = get_field('banner-imagem-de-fundo-mobile'); ?>
    <style scoped>
      header {
        background-image: url(<?php echo esc_url($bgDesk['url']); ?>);
        object-fit: cover;
        height: 25rem;
        align-items: flex-end;
        background-size: cover;
      }
      @media only screen and (max-width: 600px) {
        header {
          background-image: url(<?php echo esc_url($bgMobile['url']); ?>);
          background-repeat: no-repeat;
          object-fit: cover !important;
        }
      }
    </style>
    <header class="wrapper w-100 d-flex flex-row">
      <!-- <div class="woman"></div> -->
      <div class="header-main">
        <div class="image">
          <?php 
            $image = get_field('imagem-banner');
            if( !empty( $image ) ): ?>
              <img
                src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>"
                class="img img-responsive w-100"
              />
          <?php endif; ?>
          <div class="only-mobile">
            <button class="btn" type="button">
              <a
                target="_blank"
                href="<?php the_field("link-botao-eu-apoio")?>"
                >Eu apoio AzMina</a
              >
            </button>
          </div>
        </div>
      </div>
    </header>
    <section class="wrapper intro banner">
      <div class="only-desk">
        <button class="btn" type="button">
          <a
            target="_blank"
            href="https://www.catarse.me/azmina?ref=&utm_source=web_27abr_apoiehome"
            >Eu apoio AzMina</a
          >
        </button>
      </div>
      <h2 class="intro-text"><?php the_field("banner_texto_inferior")?></h2>
    </section>