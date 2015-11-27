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
      <div class="small-11 medium-5 large-6 column accessoir animated" style="height:300px" id="carbon">
        <img src="../img/carbon_case.png" class="image_left" style="height:280px;" id="carbon-img"/>
        <h2>Carbon Case</h2>
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
      </div>
      <div class="small-11 medium-5 large-3 column accessoir no-bg">
        <row>
          <div class="small-12 column accessoir" style="height:142px" id="power-bank">
            <img src="../img/power_bank.png" class="image_left" style="width:100px;" id="powerbank-img"/>
            <h2>Power Banks</h2>
            Lorem Ipsum
            Lorem Ipsum
            Lorem Ipsum
          </div>
        </row>
        <row>
          <div class="small-12 column accessoir animated" style="height:142px" id="flip-case">
            <img src="../img/flip_cases.png" class="image_left" style="width:50px;" id="flip-case-img"/>
            <h2>Div. Flip Cases</h2>
          </div>
        </row>
      </div>
      <div class="small-11 medium-5 large-2 column accessoir" id="tempered-glass" style="height:300px">
        <img src="../img/tempered_glass.png" class="image_left" style="width:128px;" id="tempered-glass-img"/>
        <h2>Tempered Glass</h2>
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
        Lorem Ipsum
      </div>
      <div class="small-12 column">
        <div class="small-11 medium-4 large-2 column accessoir animated" id="kfz-kabel" style="width:140px;">
          <img src="../img/kfz_kabel.png" class="image_left" style="width:60px;" id="kfz-kabel-img"/>
          <h2>KFZ - Ladekabel</h2>
        </div>
        <div class="small-11 medium-4 large-2 column accessoir" id="iphone-cases">
          <img src="../img/iphone_cases.png" class="image_left" style="width:60px;" id="iphone-cases-img"/>
          <h2>IPhone Cases</h2>
        </div>
        <div class="small-11 medium-4 large-2 column accessoir" id="sim-karten" style="width:110px;">
          <img src="../img/sim_karten.png" class="image_left" style="width:60px;" id="sim-karten-img"/>
          <h2>Sim Karten</h2>
        </div>
        <div class="small-11 medium-4 large-2 column accessoir animated" id="apple-accesoires" style="width:180px;">
          <img src="../img/apple_accesoires.png" class="image_left" style="width:60px;" id="apple-accesoires-img"/>
          <h2>Apple Accesoires</h2>
          Lorem Ipsum
          Lorem Ipsum
          Lorem Ipsum
          Lorem Ipsum
          Lorem Ipsum
        </div>
        <div class="small-11 medium-4 large-2 column accessoir" id="selfie-sticks">
          <img src="../img/selfie_sticks.png" class="image_left" style="width:128px;" id="selfie-sticks-img"/>
          <h2>Selfie Sticks</h2>
        </div>
        <div class="small-11 medium-4 large-1 column accessoir animated" id="luxus-cases">
          <img src="../img/luxus_cases.png" class="image_left" style="width:128px;" id="luxus-cases-img"/>
          <h2>Luxus Cases</h2>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/vendor/jquery.js"></script>
  <script src="../js/foundation.min.js"></script>
  <script src="../js/animsition.js"></script>
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

      setTimeout(function(){
        $("#carbon").addClass('fade-in-left' );
        $("#tempered-glass").animate({opacity: 1},2000, "linear");
        $("#sim-karten").animate({opacity: 1},2000, "linear");

      },1000)
      setTimeout(function(){
        $("#flip-case").addClass('rollIn' );
        $("#kfz-kabel").addClass('fade-in-left' );
      },500)
      setTimeout(function(){
        $("#power-bank").animate({opacity: 1},2000, "linear");
        $("#selfie-sticks").animate({opacity: 1},1500, "linear");
        $("#iphone-cases").animate({opacity: 1},1000, "linear");
      },2000)
      setTimeout(function(){
        $("#luxus-cases").addClass('rollIn' );
        $("#apple-accesoires").addClass('lightSpeedIn' );
      },1500)
    });
  </script>
</body>