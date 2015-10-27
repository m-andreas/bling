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
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/animsition.css">
  <script src="js/vendor/modernizr.js"></script>
  <script type="text/javascript" src="js/jssor.slider.mini.js"></script>

  <title>Bling my Phone - Für jeden Geschmack!</title>
  <link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
</head>
<body onload="move_down()">
  <div class="animsition">
    <?php include ("php/header.php"); ?>
    <div class="row main">
      <div class="small-12 column">
        <div id="jssor_1" style="position: relative; bottom: 0px; left: 0px; width: 1000px; height: 500px;">
          <div data-u="slides" style=" position: absolute; overflow: hidden; left: 0px; top: 0px;width: 1000px; height: 500px;">
              <div>
                <img u="image" class="phone_image" src="img/phone_in_hand.png"  onclick="change_image(this)" />
                <div u="caption" t="transition_name1" style="position: absolute; top: 30px; left: 0px; width: 1000px;height: 100px;">
                  <h1 class="center">Für jeden Geschmack</h1>
                </div>
              </div>
              <div>
                <img u="image" src="img/watch.png" />
                <div u="caption" t="transition_name2" style="position: absolute; bottom: 100px; left: 30px; width: 1000px;height: 100px;">
                  <h1>Apple Watch</h1>
                  <h2>jetzt erhältlich!</h2>
                </div>
              </div>
          </div>
          <!-- Bullet Navigator -->
          <div data-u="navigator" class="jssorb05" style="bottom:16px;right:6px;" data-autocenter="1">
              <!-- bullet navigator item prototype -->
              <div data-u="prototype" style="width:16px;height:16px;"></div>
          </div>
          <!-- Arrow Navigator -->
        </div>
      </div>
    </div>
  </div>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/animsition.js"></script>
  <script>
    $(document).foundation();
  </script>
  <script>
  String.prototype.filename=function(extension){
      var s= this.replace(/\\/g, '/');
      s= s.substring(s.lastIndexOf('/')+ 1);
      return extension? s.replace(/[?#].+$/, ''): s.split('.')[0];
  }

  function change_image(el){
    console.log($(el).attr('src').filename());
  }

  var el_string = '#bling-b'
  var count = 1
  function highlight_bling(){
    if (el_string != '' ){
      highlight($(el_string));
      switch(el_string) {
        case '#bling-b':
          el_string = '#bling-l'
          break;
        case '#bling-l':
          el_string = '#bling-i'
          break;
        case '#bling-i':
          el_string = '#bling-n1'
          break;
        case '#bling-n1':
          el_string = '#bling-g'
          break;
        case '#bling-g':
          el_string = '#bling-m'
          break;
        case '#bling-m':
          el_string = '#bling-y'
          break;
        case '#bling-y':
          el_string = '#bling-p'
          break;
        case '#bling-p':
          el_string = '#bling-h'
          break;
        case '#bling-h':
          el_string = '#bling-o'
          break;
        case '#bling-o':
          el_string = '#bling-n2'
          break;
        case '#bling-n2':
          el_string = '#bling-e'
          break;
        default:
          el_string = ''
          move_up();
      }
    }
  }

  function move_down(){
    $(".logo").addClass("move")
    window.setTimeout(highlight_bling,1000);
  }

  function move_up(){
    $(".logo").removeClass("move")
    show_content();
  }

  function show_content(){
    $(".top-bar").animate({opacity: 1.0}, 3000);
    $(".main").animate({opacity: 1.0}, 3000);
  }

  function highlight(el){
    el.addClass('animated pulse').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass('animated pulse')
      highlight_bling();
    });
  }
  </script>

    <script>

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

            var jssor_1_options = {
              $FillMode: 1,
              $AutoPlay: true,
              $Idle: 5000,
              $SlideDuration: 1000,
              $PauseOnHover: 1,
              $SlideEasing: $Jease$.$OutQuint,
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
</body>