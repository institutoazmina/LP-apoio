<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php the_excerpt(); ?>">
    <title><?php echo get_the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/dist/css/style.min.css?v=<?php echo rand();?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/dist/css/main.css?v=<?php echo rand();?>" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefo
    re(j,f);
    })(window,document,'script','dataLayer','GTM-N3ZL6D2');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L2XTJNL5CY"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-L2XTJNL5CY');</script>

    <!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link  href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet"/>

    <?php wp_head(); ?>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3ZL6D2"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
                data-ga
                data-ga-category="lp:apoie"
                data-ga-action="click"
                data-ga-label="topo:eu-apoio-azmina"

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