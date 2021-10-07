$(document).ready(function() { 
  // Activate Carousel
  // jQuery('.carousel').carousel();

  $('#slider-tipo-dist').slick({
    infinite: false,
    dots: true,
    arrows: false,
    mobileFirst: true,
    customPaging: function(slider, i) {
      return '<span class="dot"></span>';
    },
    responsive: [
      {
        breakpoint: 767,
        slidesToShow: 3,
      },
      {
        breakpoint: 1023,
        settings: "unslick"
      }
    ]
  })

  $('#slider-reportagens').slick({
    infinite: false,
    dots: true,
    arrows: false,
    mobileFirst: true,
    slidesToShow: 1,
    customPaging: function(slider, i) {
      return '<span class="dot"></span>';
    },
    responsive: [
      {
        breakpoint: 767,
        slidesToShow: 3,
      },
      {
        breakpoint: 1023,
        settings: "unslick"
      }
    ]
  })
  /** This section is only needed once per page if manually copying **/
  if (typeof MauticSDKLoaded == 'undefined') {
    var MauticSDKLoaded = true;

    var head = document.getElementsByTagName('head')[0];

    var script = document.createElement('script');

    script.type = 'text/javascript';

    script.src = 'https://mautic.azmina.com.br/media/js/mautic-form.js';

    script.onload = function () {
      MauticSDK.onLoad();
    };

    head.appendChild(script);

    window.MauticDomain = 'https://mautic.azmina.com.br';

    window.MauticLang   = {
      'submittingMessage': "Enviando..."
    }
    var MauticLang = {
      submittingMessage: 'Enviando...'
    };
  }
});

/** window.onload = function() {
  jQuery('[data-toggle="tooltip"]').tooltip({ html: true, placement: 'bottom' });
}; **/