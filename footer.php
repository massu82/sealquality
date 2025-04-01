  <footer id="footer">
    <div class="container">
      <div class="row socialmedia">
        <div class="text-center">
          <a href="http://facebook.com" target="_blank"><i class="fa fa-facebook-square"></i> Facebook</a></a>
          <a href="http://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i> Twitter</a></a>
          <a href="http://youtube.com" target="_blank"><i class="fa fa-youtube-square"></i> Youtube</a></a>
        </div>
      </div>
    </div>
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo text-center">
          <a href="/"><img style="text-align: center !important; " class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/logo_center.png" alt=""></a>
          <p>Constituyentes No 50, Col. Valle de Oro San Juan del Rio, Queretaro, México. <br>Derechos reservados © 2020 SealQuality <a href="mailto:innova.nextio@gmail.com" target="_blank"> Power by Innova Studio </a></p>
        </div>
      </div>
    </div>

  </footer>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mousescroll.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/smoothscroll.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.maphighlight.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mapa.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcziN3LIc7UGeY6p-Sc4X6AAvftr1qrok&callback=initMap"
    async defer></script>
    <script>
    function initMap() {
        var styles = [
    {
      stylers: [
        { hue: "#fbaf19" },
        { saturation: 10 }
      ]
    },{
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [
        { lightness: 60 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "poi.business",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

      var sendero = {lat: 20.396959, lng: -99.987579};

      var map = new google.maps.Map(document.getElementById('map'), {
        scaleControl: true,
        scrollwheel: false,
        center: {lat: 20.396959, lng: -99.987579},
        zoom: 17
    });

    var infowindow = new google.maps.InfoWindow;
      infowindow.setContent('<span style="font-size: 1.2em; text-align: center !important;"><strong> Seal Quality</strong><br> Constituyentes No 50, Col. Valle de Oro <br> San Juan del Río Querétaro, México. </span>');

        var image = '/wp-content/themes/sealquality/images/iconlogo.png';

    var marker = new google.maps.Marker({
        map: map, 
        position: sendero,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"Haz click en el icono"
    });

    marker.addListener('click', function() {
        infowindow.open(map, marker);
      });
    marker.addListener('click', function() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    });
    }
  </script>

</body>
</html>