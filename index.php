<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset=utf-8>
  <meta name=description content="Handy Accessoires und Zubehör sowie Neugeräte direkt im 1. Bezirk in Wien. Wir bieten Zubehör füt Iphone, Samsung, LG, HTC und Blackberry.">
  <meta name=author content="Bling my Phone">
  <meta name=language content="de">
  <meta name=keywords content="Iphone, Apple, Handy, Accessoires, Zubehör, Smartphone, Samsung, LG, HTC, Nokia, Sony, Blackberry, Mobiltelefon, kaufen">
  <meta name=robots content=index,follow>
  <meta name=audience content=alle>
  <meta name=page-topic content="Handyverkauf und Zubehör in 1010 Wien">
  <meta name=revisit-after CONTENT="7 days">
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/animsition.css">

  <title>Bling my Phone - Handyverkauf und Zubehör in 1010 Wien.</title>
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
                <div id="support-heading"><h1>Apple Support</h1></div>
                <span>Probleme mit Ihrem iPhone, iPad oder Macbook?
                  Kein Problem! – Besuchen Sie unseren Store in der
                  Jasomirgottstraße und lassen Sie sich von uns helfen!</span>
              </div>
            </div>
            <div>
              <img u="image" src="img/slider/ipad.png" class="slide-img"/>
              <div u="caption" t="transition_name2" id="caption1_2">
                <h1>iPad</h1>
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
                <h1>iPhone 6s</h1>
                <h2>Alle Farben und alle Größen</h2>
                <span class="available">Bei uns erhältlich!</span>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/homepage.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>