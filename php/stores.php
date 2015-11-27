<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset=utf-8>
  <meta name=description content="Standorte, stores">
  <meta name=author content="Bling My Phone">
  <meta name=language content="de">
  <meta name=keywords content="Iphone, Apple, Handy, Reparatur, Smartphone, Samsung, LG, HTC, Nokia, Sony, Blackberry, Mobiltelefon">
  <meta name=robots content=index,follow>
  <meta name=audience content=alle>
  <meta name=page-topic content="Handyreparaturservice">
  <meta name=revisit-after CONTENT="7 days">
  <link rel="stylesheet" href="../css/foundation.css" />
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/animsition.css">
  <script src="../js/vendor/modernizr.js"></script>
  <script type="text/javascript" src="../js/jssor.slider.mini.js"></script>

  <!--Google Maps Plugin Start-->
  <script type="text/javascript">
    function loadGoogle(){
        var zoom;
        if( window.innerHeight < 820 ){
            zoom = 15;
        } else {
            zoom = 16;
        }


        var two = new google.maps.LatLng(48.204843,16.370172);
        var three = new google.maps.LatLng(48.209010,16.371781);
        var four = new google.maps.LatLng(48.206866,16.371229);
        //var five = new google.maps.LatLng(48.211141,16.375409);
        var mapCanvas = document.getElementById('map');
        var isDraggable = true;
        var mapOptions = {
            draggable: isDraggable,
            scrollwheel: false,
          center: new google.maps.LatLng(48.206866,16.371229),
          zoom: zoom,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(mapCanvas, mapOptions);

         var marker2 = new google.maps.Marker({
              position: two,
              map: map,
              icon: '../img/pin.png',
              title:'Führichgasse 4'
        });

        var contentString2 = '<p>Bling My Phone</p><br>' +
                '<p class="adresse">Führichgasse 4<br>' +
                '1010 Wien</p><br>' +
                '<p>Öffnungszeiten<br>' +
                'Mo. - Fr.: 10:00 - 19:00<br>' +
                'Sa.: 10:00 - 18:00</p>'

        var infowindow2 = new google.maps.InfoWindow({
            content: contentString2
        });

        google.maps.event.addListener(marker2, 'click', function() {
            infowindow2.open(map,marker2);
        });

        var marker3 = new google.maps.Marker({
              position: three,
              map: map,
              icon: '../img/pin.png',
              title:'Jasomirgottstrasse 1-3'
        });

        var contentString3 = '<p>Bling My Phone</p><br>' +
            '<p class="adresse">Jasomirgott&shy;strasse 1-3<br>' +
            '1010 Wien</p><br>' +
            '<p>Öffnungszeiten<br>' +
            'Mo. - Fr.: 10:00 - 19:00<br>Sa.: 10:00 - 18:00</p>'

        var infowindow3 = new google.maps.InfoWindow({
            content: contentString3
        });

        google.maps.event.addListener(marker3, 'click', function() {
            infowindow3.open(map,marker3);
        });

        marker4 = new google.maps.Marker({
              position: four,
              map: map,
              icon: '../img/pin.png',
              title:'Kupferschmiedgasse 2'
        });

        var contentString4 = '<p>Bling My Phone</p><br>' +
        '<p class="adresse">Kupferschmied&shy;gasse 2<br>' +
        '1010 Wien</p><br>' +
        '<p>Öffnungszeiten<br>' +
        'Mo. - Fr.: 10:00 - 19:00<br>' +
        'Sa.: 10:00 - 18:00</p>'

        var infowindow4 = new google.maps.InfoWindow({
            content: contentString4
        });

        google.maps.event.addListener(marker4, 'click', function() {
            infowindow4.open(map,marker4);
        });

        window.onorientationchange = function() {
            var orientation = window.orientation;
                switch(orientation) {
                    case 0: window.location.reload();
                    break;
                    case 90: window.location.reload();
                    break;
                    case -90: window.location.reload();
                    break; }
        };
        //google.maps.event.addDomListener(window, 'load', initialize);
    }
    </script>
      <!--Google Maps Plugin Ende-->
  <title>Bling my Phone - Für jeden Geschmack!</title>
  <link rel="shortcut icon" type="image/x-icon" href="../css/images/favicon.ico" />
</head>
<body onload="show_content()" onresize="set_map()" style="min-height:700px;">
  <div class="animsition">
    <?php include ("header.php"); ?>
    <div class="row main">
        <div class="small-12 medium-3 column address" id="kupfer">
          <p class="adresse">Kupferschmied&shy;gasse 2<br>
          1010 Wien</p>
          <p>Öffnungszeiten<br>
          Mo. - Fr.: 10:00 - 19:00<br>
          Sa.: 10:00 - 18:00</p>
        </div>
        <div class="small-12 medium-6 column address-spacer">
          &nbsp
          <div class="pano-frame" id="kupfer-pano">
            <img src="../img/KGLeft.png" width="90%" height="150"
              data-speed="0.5"
              class="reel pano"
              id="image3"
              data-steps="60"
              data-step="13"
              data-speed="10"
              data-image="../img/KGPanorama.png"
              data-stitched="460"
              data-orientable="true">
          </div>
          <div class="pano-frame" id="furich-pano">
            <img src="../img/FGLeft.png" width="90%" height="150"
              class="reel pano"
              data-steps="60"
              data-step="13"
              data-speed="0.5"
              data-delay="1"
              id="image2"
              data-image="../img/FGPanorama1.png"
              data-stitched= "602"
              data-orientable="true">
          </div>
          <div class="pano-frame" id="jasomirgott-pano">
            <img src="../img/outlook.jpg" width="90%" height="150"
              class="reel pano"
              id="image3"
              data-image="../img/outlook-reel.jpg"
              data-stitched="1652"
              data-orientable="true">
          </div>
        </div>
        <div class="small-12 medium-3 column address" id="jasomirgott">
          <p class="adresse">Jasomirgott&shy;strasse 1-3<br>
          1010 Wien</p>
          <p>Öffnungszeiten<br>
          Mo. - Fr.: 10:00 - 19:00<br>Sa.: 10:00 - 18:00</p>
        </div>
      </div>
      <div class="row main no-top-mobile">
        <div class="small-12 medium-3 column address no-top-mobile"  id="furich">
            <p class="adresse">Führichgasse 4<br>
            1010 Wien</p>
            <p>Öffnungszeiten<br>
            Mo. - Fr.: 10:00 - 19:00<br>
            Sa.: 10:00 - 18:00</p>
        </div>
        <div class="small-12 medium-6 column no-top-mobile">
        &nbsp
        </div>
        <div class="small-12 medium-3 column address no-top-mobile"  id="map-reset">
          <p class="adresse">Karte<br>
        </div>
        <div id="map"></div>
        <img id="map-hand" src="../img/hand-map.png">
    </div>
  </div>
  <script src="../js/vendor/jquery.js"></script>
  <script src="../js/foundation.min.js"></script>
  <script src="../js/animsition.js"></script>
  <script src='../js/jquery.reel-min.js' type='text/javascript'></script>

  <script>
    $(document).foundation();

    function show_content(){
      $(".top-bar").animate({opacity: 1.0}, 1000);
      $(".main").animate({opacity: 1.0}, 1000);
    }

    function highlight(el){
      el.addClass('animated pulse').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass('animated pulse')
        highlight_bling();
      });
    }

    jQuery(document).ready(function ($) {
      if( $(document).width() < 672 ){
        $("body").height(1200)
      }

      $(".animsition").animsition({
        inClass: 'fade-in-down-lg',
        outClass: 'fade-out-down-lg',
        inDuration: 1500,
        outDuration: 800,
        linkElement: '.animsition-link',
        // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
        loading: true,
        loadingParentElement: 'body', //animsition wrapper element
        loadingClass: 'animsition-loading',
        loadingInner: '', // e.g '<img src="loading.svg" />'
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
        // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
        overlay : false,
        overlayClass : 'animsition-overlay-slide',
        overlayParentElement : 'body',
        transition: function(url){ window.location.href = url; }
      });

      $("#kupfer").mouseover( function(){
        if( $(document).width() > 672 ){
          $("#kupfer-pano").show();
          $("#furich-pano").hide();
          $("#jasomirgott-pano").hide();
          $("#map").hide();
          $("#map-hand").hide();
        } else {
          $("#map-reset").mouseover();
        }
      })

      $("#furich").mouseover( function(){
        if( $(document).width() > 672 ){
          $("#furich-pano").show();
          $("#jasomirgott-pano").hide();
          $("#kupfer-pano").hide();
          $("#map").hide();
          $("#map-hand").hide();
        } else {
          $("#map-reset").mouseover();
        }
      })

      $("#jasomirgott").mouseover( function(){
        if( $(document).width() > 672 ){
          $("#jasomirgott-pano").show();
          $("#furich-pano").hide();
          $("#kupfer-pano").hide();
          $("#map").hide();
          $("#map-hand").hide();
        } else {
          $("#map-reset").mouseover();
        }
      })

      $("#map-reset").mouseover( function(){
        $("#jasomirgott-pano").hide();
        $("#furich-pano").hide();
        $("#kupfer-pano").hide();
        $("#map").show();
        $("#map-hand").show();
      })

      $('#kupfer-pano').reel({
        stitched:    1652,
        orientable:  true
      });
      $('#furich-pano').reel({
        stitched:    1652,
        orientable:  true
      });
      $('#jasomirgott-pano').reel({
        stitched:    1652,
        orientable:  true
      });
    });

    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp' +
      '&signed_in=true&callback=loadGoogle';
    script.async = 'true';
    document.body.appendChild(script);

    function set_map(){

      if ( window.innerHeight >= 870 && window.innerHeight < 1000){
        $("#map").css("width", "260px")
        $("#map").css("height", "470px")
        $("#map").css("top",$("#map-hand").offset().top - 92 + "px" )
        $("#map").css("left", "-73px" )
      } else if ( window.innerHeight >= 1000){
        $("#map").css("width", "310px")
        $("#map").css("height", "550px")
        $("#map").css("top",$("#map-hand").offset().top - 115 + "px" )
        $("#map").css("left", "-85px" )
      } else {
        $("#map").css("width", "182px")
        $("#map").css("height", "325px")
        $("#map").css("top",$("#map-hand").offset().top - 66 + "px" )
        $("#map").css("left", "-52px" )
      }

    }

  </script>

</body>