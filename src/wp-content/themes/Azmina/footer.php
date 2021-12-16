    <footer>
      <div class="logo"></div>
      <div class="social">
        Social
        <div class="row">
          <a
            class="col-3"
            href="<?php the_field('link_facebook')?>"
            target="_blank"
            data-ga
            data-ga-category="lp:apoie"
            data-ga-action="click"
            data-ga-label="rodape:social:facebook"
          >
            <div class="facebook"></div
          ></a>
          <a
            class="col-3"
            href="<?php the_field('link_twitter')?>"
            target="_blank"
            data-ga
            data-ga-category="lp:apoie"
            data-ga-action="click"
            data-ga-label="rodape:social:twitter"
          >
            <div class="twitter"></div></a
          >
          <a
            class="col-3"
            href="<?php the_field('link_instagram')?>"
            target="_blank"
            data-ga
            data-ga-category="lp:apoie"
            data-ga-action="click"
            data-ga-label="rodape:social:instagram"
          >
            <div class="instagram"></div>
          </a>
          <a
            class="col-3"
            href="<?php the_field('link_youtube')?>"
            target="_blank"
            data-ga
            data-ga-category="lp:apoie"
            data-ga-action="click"
            data-ga-label="rodape:social:youtube"
          >
            <div class="youtube"></div
          ></a>
        </div>
      </div>
      <small>© 2021 Revista AZMina - Todos os Direitos Reservados <a href="https://azmina.com.br/instituto-azmina/o-conteudo-dazmina-e-livre-de-direitos-autorais/" target="_blank">Saiba mais</a></small>
    </footer>

    <?php wp_footer(); ?>

    <script>
      window.dataLayer = window.dataLayer || [];
      window.MauticFormCallback = window.MauticFormCallback || {};

      var allForms = window.document.forms;

      for (var i = 0; i < allForms.length; i++) {
          var form = allForms[i];

          if (form.hasAttribute('data-mautic-form')) {
              var dataMauticForm = form.getAttribute('data-mautic-form');

              MauticFormCallback[dataMauticForm] = {
                  onResponse: function(response) {
                      window.dataLayer.push({
                          'event': 'newsletter-signup'
                      });
                  },
              };
          }
      }
    </script>

    <script src="<?php bloginfo('template_directory'); ?>/assets/dist/js/app.min.js?v=<?php echo rand();?>"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/dist/js/main.min.js?v=<?php echo rand();?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdn.rawgit.com/powerticmkt/mautic-form-masks/508e1c4c/mautic-form-masks.js"></script>
  </body>
</html>
