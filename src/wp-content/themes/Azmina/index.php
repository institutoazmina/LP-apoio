  <?php 
    /* Template Name: Home */ 
  ?>
  <?php get_header();?>
    <main>
      <section class="wrapper">
        <div class="row section-2 section-2-1">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <h2 class="title"><?php the_field("titulo-nos-somos"); ?></h2>
            <?php the_field("nos-somos-texto-esquerda"); ?>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?php the_field("nos-somos-texto-direita"); ?>
          </div>
        </div>
      </section>


      <section class="wrapper section-3">
        <div class="section-2">
          <h2><?php the_field("titulo-nos-contamos");?></h2>
          <?php the_field("descricao-nos-contamos");?>
        </div>
        <div class="cards wrapper">
          <div class="row" id="slider-tipo-dist">
          <?php
            $args = array(  
              'post_type' => 'tipo-de-contribuicao',
              'post_status' => 'publish',
              'order' => 'ASC',
            );

            $query = new WP_Query( $args );
            if ( $query->have_posts()) :
              while ( $query->have_posts() ) : $query->the_post();?>
              <div class="col col-12 col-sm-12 col-md-3 col-lg-2 bg-white card">
                <div class="content-card">
                  <h3><?php the_title(); ?></h3>
                  <?php the_content();?>
                </div>
                <div class="actions">
                  <div class="row w-100 button-colab">
                    <?php if(get_field("valor-plano-mensal")):?>
                      <a class="text-decoration-none" href="<?php the_field("link-plano-mensal"); ?>" target="_blank" rel="noopener noreferrer"
                        data-ga-category="lp:apoie"
                        data-ga-action="click"
                        data-ga-label="tabela:<?php echo $post->post_name; ?>:mensal"
                      >
                         <div class="col-12 mensal">Mensal</div>
                         <div class="col-12 number">R$ <b><?php the_field("valor-plano-mensal");?></b></div>
                      </a>
                    <?php endif;?>
                    </div>
                    <?php if(get_field("valor-plano-anual")):?>
                      <div class="row w-100 button-colab">
                        <a class="text-decoration-none" href="<?php the_field("link-plano-anual");?>" target="_blank" rel="noopener noreferrer"
                          data-ga-category="lp:apoie"
                          data-ga-action="click"
                          data-ga-label="tabela:<?php echo $post->post_name; ?>:anual"
                        >
                          <div class="col-12 mensal">Anual</div>
                           <div class="col-12 number">R$ <b><?php the_field("valor-plano-anual");?></b></div>
                        </a>
                      </div>
                    <?php endif;?>
                  </div>
                </div>
              <?php 
              endwhile;
              wp_reset_postdata();
            endif;
             ?>
          </div>
        </div>
        <a class="btn" target="_blank" href="<?php the_field("link-apoie-nos-somos")?>"
          data-ga-category="lp:apoie"
          data-ga-action="click"
          data-ga-label="rodape:apoie-agora"
        >
          Apoie agora
        </a>
      </section>

      <?php
      $args = array(  'post_type' => 'reportagens','post_status' => 'publish');
      $query = new WP_Query( $args );
      if ( $query->have_posts()) : ?>
        <section class="wrapper section-4">
          <h2 class="title"><?php the_field("titulo-nos-fazemos");?></h2>
          <?php the_field("descricao-nos-fazemos");?>
          <div id="slider-reportagens" class="d-block d-lg-flex">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-2">
            
                <?php 
                $image = get_field('imagem-reportagem');
                if( !empty( $image ) ): ?>
                  <img
                    src="<?php echo esc_url($image['url']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>"
                    class="img img-responsive w-100"
                  />
                <?php endif; ?>
                  <?php if( have_rows('categoria') ):
                    while( have_rows('categoria') ): the_row();?>
                      <p class="cultura mb-0 mt-3">
                        <a href="<?php the_sub_field("link-da-categoria")?>" target="_blank">
                          <?php the_sub_field("nome-da-categoria"); ?>
                        </a>
                      </p>
                  <?php
                  endwhile;
                  endif;?>
                  <h3 class="text-cultura mt-2">
                    <a href="<?php the_field("link-da-reportagem")?>" target="_blank">
                      <?php the_title(); ?>
                    </a>
                  </h3>
                  <p class="cultura-name">
                    <?php if( have_rows('author') ) : 
                      while ( have_rows('author') ) : the_row();?>
                        <a href="<?php the_sub_field("link-do-autor")?>" target="_blank">
                          <?php the_sub_field("nome-do-autor");?>
                        </a>
                    <?php
                      endwhile;
                      endif;?>
                  </p>
              </div>
            <?php 
              endwhile;
              wp_reset_postdata(); ?>
          </div>
        </section>
      <?php endif;?>

      <hr class="row-section"/>
      
      <section class="wrapper section-5 overflow-hidden">
        <h2 class="title mb-5"><?php the_field("titulo-nossas-apoiadoras") ?></h2>
        <?php
          $args = array(  
            'post_type' => 'apoiadoras',
            'post_status' => 'publish',
          );

          $query = new WP_Query( $args );
          if ( $query->have_posts()) :?>
            <div class="row">
              <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                  <div class="d-flex flex-row">
                    <div class="photo">
                      <?php 
                      $image = get_field('avatar-apoiadora');
                      if( !empty( $image ) ): ?>
                        <img
                          src="<?php echo esc_url($image['url']); ?>"
                          alt="<?php echo esc_attr($image['alt']); ?>"
                          class="img img-responsive w-100"
                        />
                      <?php endif; ?>
                    </div>
                    <div class="description">
                      <div>
                        <?php the_title(); ?>
                      </div>
                      <div class="likes"><?php the_field("dias-apoiadora")?> <?php the_field("curtidas")?> curtida Responder</div>
                    </div>
                  </div>
                  <br /><br />
                </div>
              <?php 
                endwhile;
                wp_reset_postdata(); ?>
            </div>
          <?php 
          endif;
          wp_reset_postdata(); ?>
      </section>
      
      <section class="wrapper newsletter">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-6 col-xl-6">
            <h3 class="title">Inscreva-se em nossa newsletter</h3>
            <p class="text-white">
              Receba por e-mail o melhor conteúdo semanal D'AzMina:
            </p>
          </div>
          <div
            class="col-12 col-md-6 col-lg-6 col-xl-6 mauticform_wrapper"
            id="mauticform_wrapper_footersite"
          >
            <form
              id="mauticform_footersite"
              role="form"
              action="https://mautic.azmina.com.br/form/submit?formId=1"
              autocomplete="false"
              enctype="multipart/form-data"
              method="post"
              data-mautic-form="footersite"
            >
              <div class="mauticform-innerform">
                <div
                  class="mauticform-page-wrapper mauticform-page-1"
                  data-mautic-form-page="1"
                >
                  <div
                    id="mauticform_footersite_nome"
                    class="mauticform-row mauticform-text mauticform-field-1"
                  >
                    <input
                      id="mauticform_input_footersite_nome"
                      class="mauticform-input form-control"
                      name="mauticform[nome]"
                      type="text"
                      value=""
                      placeholder="Nome"
                    />
                  </div>
                  <div
                    id="mauticform_footersite_email"
                    class="mauticform-row mauticform-email mauticform-field-2"
                  >
                    <input
                      id="mauticform_input_footersite_email"
                      class="mauticform-input form-control mt-2"
                      name="mauticform[email]"
                      type="email"
                      value=""
                      placeholder="E-mail"
                    />
                  </div>
                  <div
                    id="mauticform_footersite_submit"
                    class="
                      mauticform-row
                      mauticform-button-wrapper
                      mauticform-field-3
                    "
                  >
                    <button
                      id="mauticform_input_footersite_submit"
                      class="
                        mauticform-button
                        btn btn-default
                        recebagratis
                        mt-3
                      "
                      name="mauticform[submit]"
                      type="submit"
                      value=""
                    >
                      Receba grátis!
                    </button>
                  </div>
                </div>
              </div>
              <p>
                <input
                  id="mauticform_footersite_id"
                  name="mauticform[formId]"
                  type="hidden"
                  value="1"
                />
                <input
                  id="mauticform_footersite_return"
                  name="mauticform[return]"
                  type="hidden"
                  value=""
                />
                <input
                  id="mauticform_footersite_name"
                  name="mauticform[formName]"
                  type="hidden"
                  value="footersite"
                />
              </p>
            </form>
          </div>
        </div>
      </section>
      <section class="wrapper section-6">
        <h3 class="title">
          <?php the_field("titulo-junte-se")?>
        </h3>
        <button class="btn mt-3" type="button">
          <a
            target="_blank"
            href="<?php the_field("link-junte-se")?>"
            data-ga-category="lp:apoie"
            data-ga-action="click"
            data-ga-label="rodape:apoie-agora"
            >Apoie agora</a
          >
        </button>
      </section>
    </main>
    <?php get_footer();?>
