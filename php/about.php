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
      <div class="center logofont"><span id="about_bling">Bling</span><span id="about_my"> my </span><span id="about_phone">Phone</span></div>
      <div id="about-text">
        <h2>Berühren Sie die Schrift oberhalb!</h2>
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

    function highlight(el){
      el.addClass('animated pulse').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass('animated pulse')
        highlight_bling();
      });
    }

    function reset_about(){
      $(".temp_image").remove()
      $("#about-text").html("<h2>Berühren Sie die Schrift oberhalb!</h2>")
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

      $('#about_bling').hover(  function() {
          $(this).append('<img src="../img/bling.png" class="temp_image" style="position:absolute;height:1.7em">')
          $(".temp_image").css('top', $(this).offset().top - 10 + "px")
          $(".temp_image").css('left', $(this).offset().left - 35 + "px")
          $("#about-text").html("<h1>Angebot</h1>Neben den neusten Technik-Innovationen, wie dem Apple iPhone 6s, Samsung Galaxy S6, iPad Pro oder den neusten Macbooks, bieten wir Ihnen eine Vielzahl an verschiedenster Accessoires. Egal ob iPhone, Samsung, Sony,… bei uns finden Sie zu allen gängigen Marken Ihr Zubehör. Sei es ein ausgefallenes Case als Schutz für Ihr Smartphone oder als Modeaccessoire. Neben einer außerordentlichen Auswahl an Smartphone-Case, können Sie bei uns auch neueste Trends aus der Audiowelt. Apple Zubehör, wie Lightning-Kabel, original Earpods und verschiedenste Adapter sind in unseren adrei Filialen auch zu finden. Nicht zuletzt  zeichnen wir uns für einen exzellenten Kundensupport durch unsere geschulten Mitarbeiter aus. Besuchen Sie einen unserer Stores im ersten Wiener Gemeindebezirk und überzeugen Sie sich selbst. ")
        }, function() {
          reset_about();
      });
      $('#about_my').hover(  function() {
          $(this).append('<img src="../img/my.png" class="temp_image" style="position:absolute;height:1.5em">')
          $(".temp_image").css('top', $(this).offset().top + 1 + "px")
          $(".temp_image").css('left', $(this).offset().left - 30 + "px")
          $("#about-text").html("<h1>Unternehmens<wbr>geschichte</h1>Unternehemensgeschichte: Gegründet wurde das Unternehmen Bling my Phone von Arian Salehynia im Oktober 2013 in der Führichgasse. Nach nur ein paar Wochen eröffnete er einen weiteren Store der Bling my Phone am berühmten Wiener Stephansplatz. Das Unternehmen etablierte einen Service welcher als Handyrepair.at bekannt wurde. Im April 2014 eröffnete man eine dritte Filiale in der Kupferschmiedgasse. Die Bling my Phone Gmbh hat sich somit als der Smartphone-Experte in der Innen Stadt etabliert.  Anfang 2015 wurde der Service Handyrepair.at zu einer eigenständigen Firma welche mit der Bling my Phone auf jeder Ebene kooperiert. Seit Oktober 2015 wird die Bling my Phone Gmbh von Roland Ableitinger in der Geschäftsführung unterstützt.")
        }, function() {
          reset_about();
      });
      $('#about_phone').hover(  function() {
          $(this).append('<img src="../img/phone.png" class="temp_image" style="position:absolute;height:2em">')
          $(".temp_image").css('top', $('#about_phone').offset().top - 11 + "px")
          $(".temp_image").css('left', $(this).offset().left - 35 + "px")
          $("#about-text").html("<h1>Unternehmens<wbr>geschichte</h1>Unternehemensgeschichte: Gegründet wurde das Unternehmen Bling my Phone von Arian Salehynia im Oktober 2013 in der Führichgasse. Nach nur ein paar Wochen eröffnete er einen weiteren Store der Bling my Phone am berühmten Wiener Stephansplatz. Das Unternehmen etablierte einen Service welcher als Handyrepair.at bekannt wurde. Im April 2014 eröffnete man eine dritte Filiale in der Kupferschmiedgasse. Die Bling my Phone Gmbh hat sich somit als der Smartphone-Experte in der Innen Stadt etabliert.  Anfang 2015 wurde der Service Handyrepair.at zu einer eigenständigen Firma welche mit der Bling my Phone auf jeder Ebene kooperiert. Seit Oktober 2015 wird die Bling my Phone Gmbh von Roland Ableitinger in der Geschäftsführung unterstützt.")
        }, function() {
          reset_about();
      });
    });
  </script>
</body>