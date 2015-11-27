<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset=utf-8>
  <meta name=description content="Mobile Accessoires mit Stil">
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
<body onload="moveDown()" style="min-height:500px;">
  <div class="animsition">
    <?php include ("php/header.php"); ?>
    <div class="row main">
      <div id="jssor_1">
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="" data-autocenter="0">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <div data-u="slides" class="slides1">
            <div class="slides_wrapper">
              <img u="image" class="phone_image" src="img/case_hand1.png" onmousemove='changeImage(0,1)'/>
              <img u="image" class="phone_image" src="img/case_hand2.png" onmousemove="changeImage(1,2)" style="display: none;" />
              <img u="image" class="phone_image" src="img/case_hand3.png" onmousemove="changeImage(2,3)" style="display: none;"/>
              <img u="image" class="phone_image" src="img/case_hand4.png" onmousemove="changeImage(3,4)" style="display: none;"/>
              <img u="image" class="phone_image" src="img/case_hand5.png" onmousemove="changeImage(4,0)" style="display: none;"/>
              <div u="caption" t="transition_name1" id="caption1_1">
                <h1 class="center"><span>F</span><span>ü</span><span>r</span> <span>j</span><span>e</span><span>d</span><span>e</span><span>n</span> <span>G</span><span>e</span><span>s</span><span>c</span><span>h</span><span>m</span><span>a</span><span>c</span><span>k</span></h1>
              </div>
            </div>
            <div>
              <img u="image" src="img/slider/support.png" class="slide-img"/>
              <div u="caption" t="transition_name2" id="caption1_2">
                <div id="support-heading">Apple Support</div>
                <span>Probleme mit Ihrem iPhone, iPad oder Macbook?
                  Kein Problem! – Besuchen Sie unseren Store in der
                  Jasomirgottstraße und lassen Sie sich von uns helfen!</span>
              </div>
            </div>
            <div>
              <img u="image" src="img/slider/ipad.png" class="slide-img"/>
              <div u="caption" t="transition_name2" id="caption1_2">
                <h1>Apple Watch</h1>
                <h2>iPad Air, iPad Mini, iPad Pro</h2>
                <span class="available">Bei uns erhältlich!</span>
              </div>
            </div>
            <div>
              <img u="image" src="img/slider/watch.png" class="slide-img"/>
              <div u="caption" t="transition_name2" id="caption1_2">
                <h1>Apple Watch</h1>
                <h2>Alle Modelle & Konfigurationen</h2>
                <span class="available">Bei uns erhältlich!</span>
              </div>
            </div>
            <div>
              <img u="image" src="img/slider/apple-tv.png" class="slide-img"/>
              <div u="caption" t="transition_name2" id="caption1_2">
                <h1>Apple TV</h1>
                <h2>4. Generation</h2>
                <span class="available">Bei uns erhältlich!</span>
              </div>
            </div>
            <div>
              <img u="image" src="img/slider/6s.png" class="slide-img"/>
              <div u="caption" t="transition_name2" id="caption1_2">
                <h1>Iphone 6s</h1>
                <h2>Alle Farben und alle Größen</h2>
                <span class="available">Bei uns erhältlich!</span>
              </div>
            </div>
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
  var until = new Date().getTime()
  function changeImage(index2remove, index2show){
    if( until + 500  < new Date().getTime() ){
      until = new Date().getTime()
      $($(".phone_image")[index2remove]).hide();
      $($(".phone_image")[index2show]).copyCSS($($(".phone_image")[index2remove]))
      $($(".phone_image")[index2show]).show();
    }
  }

  var el_string = '#bling-b'
  var count = 1
  function highlightBling(){
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
          moveUp();
      }
    }
  }

  function moveDown(){
    $(".logo").addClass("move")
    window.setTimeout(highlightBling,1000);
  }

  function moveUp(){
    $(".logo").removeClass("move")
    show_content();
  }

  function show_content(){
    $(".top-bar").animate({opacity: 1.0}, 3000);
    $("#jssor_1").animate({opacity: 1.0}, 3000);
  }

  function highlight(el){
    el.addClass('animated pulse').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass('animated pulse')
      highlightBling();
    });
  }
  </script>

    <script>

        jQuery(document).ready(function ($) {
            $(".animsition").animsition({
              inClass: 'fade-in',
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
              $FillMode: 5,
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
                var bodyWidth = document.body.clientWidth;
                var bodyHeight = document.body.clientHeight;
                console.log("scale")
                if (bodyWidth) {
                  var sliderWidth = bodyWidth - 20 ;
                  var sliderHeight = bodyHeight - 200 ;
                  jssor_1_slider.$ScaleHeight(sliderHeight);
                  console.log(jssor_1_slider.$GetScaleHeight())
                  if ( jssor_1_slider.$GetScaleWidth() > bodyWidth ){
                    jssor_1_slider.$ScaleWidth(sliderWidth);
                  }
                } else {
                  window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });

        $.fn.copyCSS = function (source) {
            var dom = $(source).get(0);
            var dest = {};
            var style, prop;
            if (window.getComputedStyle) {
                var camelize = function (a, b) {
                        return b.toUpperCase();
                };
                if (style = window.getComputedStyle(dom, null)) {
                    var camel, val;
                    if (style.length) {
                        for (var i = 0, l = style.length; i < l; i++) {
                            prop = style[i];
                            camel = prop.replace(/\-([a-z])/, camelize);
                            val = style.getPropertyValue(prop);
                            dest[camel] = val;
                        }
                    } else {
                        for (prop in style) {
                            camel = prop.replace(/\-([a-z])/, camelize);
                            val = style.getPropertyValue(prop) || style[prop];
                            dest[camel] = val;
                        }
                    }
                    return this.css(dest);
                }
            }
            if (style = dom.currentStyle) {
                for (prop in style) {
                    dest[prop] = style[prop];
                }
                return this.css(dest);
            }
            if (style = dom.style) {
                for (prop in style) {
                    if (typeof style[prop] != 'function') {
                        dest[prop] = style[prop];
                    }
                }
            }
            return this.css(dest);
        };
    </script>
</body>