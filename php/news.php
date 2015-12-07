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
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.5&appId=625252110950989";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <div class="animsition">
    <?php include ("header.php"); ?>
    <div class="row main">
      <div id="news-wrapper">
        <div class="fb-page" data-href="https://www.facebook.com/blingmy" data-width="500" data-height="800" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/blingmy"><a href="https://www.facebook.com/blingmy">Bling my Phone</a></blockquote></div></div>
      </div>
    </div>
  </div>
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