function initVegas() {  
  $('#slider').vegas({
      cover: true,
      overlay: true,
      slides: [
          { src: '../img/slides/1024/audioclick-slide-voce-escuta-mas-nao-entende.jpg', transition: 'fade' },
          { src: '../img/slides/1024/audioclick-slide-proteses-auditivas-com-tecnologia-de-ultima-geracao.jpg', transition: 'swirlLeft2'  },
          { src: '../img/slides/1024/audioclick-slide-atendemos-todas-as-idades.jpg' },
  //        { src: '../img/slides/1024/audioclick-slide-exames-audiologicos.jpg' },
          { src: '../img/slides/1024/audioclick-slide-terapias-fonoaudiologicas.jpg' }
      ],
      walk: function (index, slideSettings) {
        $('.slider-messages').addClass('hidden');
        $('#slider-message-' + (index+1)).removeClass('hidden');
        //console.log("Slide index " + index + " image " + slideSettings.src);
      }
  });
}

function initIsotope(ft) {  
  $("#isotope-container").isotope({
    itemSelector: '.item',
    filter: ft,
    resizable: false,
    masonry: {
      columnWidth: 200
    }
  });
}

var mapstyle = [{
  "featureType": "landscape",
  "stylers": [{
    "saturation": -100
  }, {
    "lightness": 65
  }, {
    "visibility": "on"
  }]
}, {
  "featureType": "poi",
  "stylers": [{
    "saturation": -100
  }, {
    "lightness": 51
  }, {
    "visibility": "simplified"
  }]
}, {
  "featureType": "road.highway",
  "stylers": [{
    "saturation": -100
  }, {
    "visibility": "simplified"
  }]
}, {
  "featureType": "road.arterial",
  "stylers": [{
    "saturation": -100
  }, {
    "lightness": 30
  }, {
    "visibility": "on"
  }]
}, {
  "featureType": "road.local",
  "stylers": [{
    "saturation": -100
  }, {
    "lightness": 40
  }, {
    "visibility": "on"
  }]
}, {
  "featureType": "transit",
  "stylers": [{
    "saturation": -100
  }, {
    "visibility": "simplified"
  }]
}, {
  "featureType": "administrative.province",
  "stylers": [{
    "visibility": "off"
  }]
}, {
  "featureType": "water",
  "elementType": "labels",
  "stylers": [{
    "visibility": "on"
  }, {
    "lightness": -25
  }, {
    "saturation": -100
  }]
}, {
  "featureType": "water",
  "elementType": "geometry",
  "stylers": [{
    "hue": "#ffff00"
  }, {
    "lightness": -25
  }, {
    "saturation": -97
  }]
}];

function initMap() {
  if ($('#mapa').length) {
    var latLng = new google.maps.LatLng(-30.030069, -51.201773);
    var myOptions = {
      zoom: 13,
      center: latLng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: mapstyle,
      scrollwheel: false,
    };
    var map = new google.maps.Map(document.getElementById('mapa'), myOptions);

    var mapMarkerIcon = "http://www.audioclick.com.br/img/pin.png";
    var marker = new google.maps.Marker({
      position: latLng,
      icon: mapMarkerIcon,
      title: 'AudioClick',
      visible: true
    });
    marker.setMap(map);
  }  
}

function prosthesisFilter(el, company) {
  $(".logo-protese").removeClass("borda-selecionada");
  $(el).addClass("borda-selecionada");
  initIsotope(company);
}