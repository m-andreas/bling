<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset=utf-8>
  <meta name=description content="Reparatur von Apple und Smartphones">
  <meta name=author content="handyrepair.at">
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


  <title>Bling my Phone - Für jeden Geschmack!</title>
  <link rel="shortcut icon" type="image/x-icon" href="../css/images/favicon.ico" />
</head>
<body onload="show_content()">
  <div class="animsition">
    <?php include ("header.php"); ?>
    <div class="row main">
      <div class="small-11 medium-5 large-6 column accessoir" style="height:300px" id="carbon">
        <img src="../img/carbon_case.png" class="image_left" style="height:280px;" id="carbon-img"/>
        <h2>Carbon Case</h2>
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
      </div>
      <div class="small-11 medium-5 large-3 column">
        <row>
          <div class="small-12 column accessoir" style="height:142.5px">
            <img src="../img/power_bank.png" class="image_left" style="width:100px;" id="powerbank-img"/>
            <h2>Power Banks</h2>
            Lorem Ipsum
            Lorem Ipsum
            Lorem Ipsum
          </div>
        </row>
        <row>
          <div class="small-12 column accessoir" style="height:142.5px">
            <img src="../img/flip_cases.png" class="image_left" style="width:50px;" id="flip-case-img"/>
            <h2>Div. Flip Cases</h2>
          </div>
        </row>
      </div>
      <div class="small-11 medium-5 large-2 column accessoir">
        <img src="../img/tempered_glass.png" class="image_left" style="width:128px;" id="tempered-glass-img"/>
        <h2>Tempered Glass</h2>
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
      </div>
      <div class="small-12 column">
        <div class="small-11 medium-4 large-2 column accessoir">
          <img src="../img/kfz_kabel.png" class="image_left" style="width:60px;" id="kfz-kabel-img"/>
          <h2>KFZ - Ladekabel</h2>
        </div>
        <div class="small-11 medium-4 large-2 column accessoir">
          <img src="../img/iphone_cases.png" class="image_left" style="width:60px;" id="iphone-cases-img"/>
          <h2>IPhone Cases</h2>
        </div>
        <div class="small-11 medium-4 large-2 column accessoir">
          <img src="../img/sim_karten.png" class="image_left" style="width:60px;" id="sim-karten-img"/>
          <h2>Sim Karten</h2>
        </div>
        <div class="small-11 medium-4 large-2 column accessoir">
          <img src="../img/apple_accesoires.png" class="image_left" style="width:60px;" id="apple-accesoires-img"/>
          <h2>Apple Accesoires</h2>
          Lorem Ipsum
          Lorem Ipsum
          Lorem Ipsum
          Lorem Ipsum
          Lorem Ipsum
        </div>
        <div class="small-11 medium-4 large-2 column accessoir">
          <img src="../img/selfie_sticks.png" class="image_left" style="width:128px;" id="selfie-sticks-img"/>
          <h2>Selfie Sticks</h2>
        </div>
        <div class="small-11 medium-4 large-1 column accessoir">
          <img src="../img/luxus_cases.png" class="image_left" style="width:128px;" id="luxus-cases-img"/>
          <h2>Luxus Cases</h2>
        </div>
      </div>
      <div class="row">
        <img src="../img/outlook.jpg" width="100%" height="150"
          class="reel"
          id="image"
          data-image="../img/outlook-reel.jpg"
          data-stitched="1652"
          data-orientable="true">
          </div>
    </div>
  </div>
  <script src="../js/vendor/jquery.js"></script>
  <script src="../js/foundation.min.js"></script>
  <script src="../js/animsition.js"></script>
  <script src='../js/jquery.reel-min.js' type='text/javascript'></script>
  <script type='text/javascript' src='../js/jquery.easing.min.js'></script>
  <script type='text/javascript' src='../js/jquery.circulate.js'></script>

  <script>
    $(document).foundation();

    function show_content(){
      $(".top-bar").animate({opacity: 1.0}, 1000);
      $(".main").animate({opacity: 1.0}, 1000);
    }

    jQuery(document).ready(function ($) {
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
      $("#carbon-img").css("position", "absolute")
      $("#carbon-img").css("left", "100%")
      $("#tempered-glass-img").css("position", "absolute")
      $("#tempered-glass-img").css("right", "200%")
      $("#flip-case-img").css("position", "absolute")
      $("#kfz-kabel-img").css("position", "absolute")
      $("#kfz-kabel-img").css("left", "300%")
      $("#kfz-kabel-img").css("bottom", "100%")
      $("#iphone-cases-img").css("position", "absolute")
      $("#iphone-cases-img").css("left", "200%")
      $("#iphone-cases-img").css("bottom", "100%")
      $("#selfie-sticks-img").css("position", "absolute")
      $("#selfie-sticks-img").css("position", "absolute")
      $("#sim-karten-img").css("position", "absolute")
      $("#sim-karten-img").css("position", "absolute")
      $("#apple-accesoires-img").css("position", "absolute")
      $("#apple-accesoires-img").css("position", "absolute")
      $("#powerbank-img").css("position", "absolute")
      $("#powerbank-img").css("position", "absolute")


      $("#carbon-img").circulate({
          loop: true,
          width: 350,
          height: 300
      });

      $("#flip-case-img").circulate({
          loop: true,
          width: 150,
          height: 100,
          speed: 700,
          sizeAdjustment: 50
      });

      $("#tempered-glass-img").circulate({
          loop: true,
          width: 150,
          height: 100,
          speed: 500,
          sizeAdjustment: 50
      });

      $("#kfz-kabel-img").circulate({
          loop: true,
          width: 150,
          height: 100,
          speed: 500,
          sizeAdjustment: 50
      });

      $("#iphone-cases-img").circulate({
          loop: true,
          width: 150,
          height: 100,
          speed: 300,
          sizeAdjustment: 50
      });

      $("#selfie-sticks-img").circulate({
          loop: true,
          width: 150,
          height: 100,
          speed: 600,
          sizeAdjustment: 50
      });

      $("#sim-karten-img").circulate({
          loop: true,
          width: 150,
          height: 100,
          speed: 600,
          sizeAdjustment: 50
      });

      $("#apple-accesoires-img").circulate({
          loop: true,
          width: 150,
          height: 100,
          speed: 400,
          sizeAdjustment: 50
      });


      $("#powerbank-img").circulate({
          loop: true,
          width: 150,
          height: 100,
          speed: 500,
          sizeAdjustment: 50
      });

      $("#luxus-cases-img").circulate({
          loop: true,
          width: 150,
          height: 100,
          speed: 800,
          sizeAdjustment: 50
      });

      setTimeout(function(){
        $("#powerbank-img").circulate("Stop");
        $("#carbon-img").circulate("Stop");
        $("#apple-accesoires-img").circulate("Stop");
        $("#sim-karten-img").circulate("Stop");
        $("#iphone-cases-img").circulate("Stop");
        $("#kfz-kabel-img").circulate("Stop");
        $("#tempered-glass-img").circulate("Stop");
        $("#flip-case-img").circulate("Stop");
        $("#selfie-sticks-img").circulate("Stop");
        $("#luxus-cases-img").circulate("Stop");
      }, 2000 );
            //$("#carbon").circulate("Stop");
      setTimeout(function(){
        $("#carbon-img").css("position", "relative")
        $("#flip-case-img").css("position", "relative")
        $("#tempered-glass-img").css("position", "relative")
        $("#kfz-kabel-img").css("position", "relative")
        $("#iphone-cases-img").css("position", "relative")
        $("#selfie-sticks-img").css("position", "relative")
        $("#sim-karten-img").css("position", "relative")
        $("#apple-accesoires-img").css("position", "relative")
        $("#powerbank-img").css("position", "relative")
        $("#carbon-img").animate({"left": 0}, 1000);
        $("#kfz-kabel-img").animate({"left": 0}, 1200);
        $("#kfz-kabel-img").animate({"bottom": 0}, 1200);
        $("#iphone-cases-img").animate({"left": 0}, 1200);
        $("#iphone-cases-img").animate({"bottom": 0}, 1200);
      }, 3000 );
    });


      $(function(){ // when DOM ready
return;
        $('#image').reel({
          stitched:    1652,
          orientable:  true,
          annotations: {
            moro_rock: { x: 795, y: 60, link: { 'class': 'external near', text: 'Moro Rock', href: 'http://commons.wikimedia.org/wiki/File:Panorama_360_view_from_Moro_Rock_-_Giant_Sequoia_National_Park_-_California_USA_(2002).jpg' } },
            ash_peaks_ridge: { x: 1250, y: 40, node: { text: 'Ash Peaks Ridge' } },
            milk_ranch_peak: { x: 970, y: 30, link: { 'class': 'external', text: 'Milk Ranch Peak', href: 'http://travelingluck.com/North%20America/United%20States/California/_5372983_Milk%20Ranch%20Peak.html' } }
          }
        });

      });
  </script>
</body>