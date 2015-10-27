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
  <script type="text/javascript" src="../js/jssor.slider.mini.js"></script>

  <title>Bling my Phone - Für jeden Geschmack!</title>
  <link rel="shortcut icon" type="image/x-icon" href="../css/images/favicon.ico" />
</head>
<body onload="show_content()">
  <div class="animsition">
    <?php include ("header.php"); ?>
    <div class="row main">
      <div class="small-11 medium-5 large-6 column accessoir">
        <img src="../img/carbon_case.png" class="image_left" style="width:128px;"/>
        <h2>Carbon Case</h2>
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
      </div>
      <div class="small-11 medium-5 large-3 column">
        <row>
          <div class="small-12 column accessoir">
            <img src="../img/power_bank.png" class="image_left" style="width:100px;"/>
            <h2>Power Banks</h2>
            Lorem Ipsum
            Lorem Ipsum
            Lorem Ipsum
            Lorem Ipsum
            Lorem Ipsum
          </div>
        </row>
        <row>
          <div class="small-12 column accessoir">
            <img src="../img/flip_cases.png" class="image_left" style="width:50px;"/>
            <h2>Div. Flip Cases</h2>
          </div>
        </row>
      </div>
      <div class="small-11 medium-5 large-2 column accessoir">
        <img src="../img/tempered_glass.png" class="image_left" style="width:128px;"/>
        <h2>Tempered Glass</h2>
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
      </div>
      <div class="small-12 column">
        <div class="small-11 medium-4 large-2 column accessoir">
          <img src="../img/kfz_kabel.png" class="image_left" style="width:60px;"/>
          <h2>KFZ - Ladekabel</h2>
        </div>
        <div class="small-11 medium-4 large-2 column accessoir">
          <img src="../img/iphone_cases.png" class="image_left" style="width:60px;"/>
          <h2>IPhone Cases</h2>
        </div>
        <div class="small-11 medium-4 large-2 column accessoir">
          <img src="../img/sim_karten.png" class="image_left" style="width:60px;"/>
          <h2>Sim Karten</h2>
        </div>
        <div class="small-11 medium-4 large-2 column accessoir">
          <img src="../img/apple_accesoires.png" class="image_left" style="width:60px;"/>
          <h2>Apple Accesoires</h2>
          Lorem Ipsum
          Lorem Ipsum
          Lorem Ipsum
          Lorem Ipsum
          Lorem Ipsum
        </div>
        <div class="small-11 medium-4 large-2 column accessoir">
          <img src="../img/selfie_sticks.png" class="image_left" style="width:128px;"/>
          <h2>Selfie Sticks</h2>
        </div>
        <div class="small-11 medium-4 large-1 column accessoir">
          <img src="../img/luxus_cases.png" class="image_left" style="width:128px;"/>
          <h2>Luxus Cases</h2>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/vendor/jquery.js"></script>
  <script src="../js/foundation.min.js"></script>
  <script src="../js/animsition.js"></script>
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
    });
  </script>
</body>