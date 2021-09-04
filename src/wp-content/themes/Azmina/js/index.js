$(document).ready(function() { 
  // Activate Carousel
  jQuery('.carousel').carousel();
  jQuery('[data-toggle="tooltip"]').tooltip({ html: true, placement: 'bottom' });

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

    var MauticDomain = 'https://mautic.azmina.com.br';

    var MauticLang = {
      submittingMessage: 'Enviando...'
    };
  }
});