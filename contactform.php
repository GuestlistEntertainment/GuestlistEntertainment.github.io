<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">    
        <title>Contact Form Request | Pet Clinic</title>
        <meta name="description" content="Pet Clinic serves with its veterinarian staff on cat and dog health.">
    </head>
    <body class="container">
    <div class="preloader">
            <figure> <img class="l" src="img/logo-white.png" alt="Image"> </figure>
          </div>
        <div class="page-transition"></div>
        <!--Menü Alanı-->
          <input type="checkbox" class="menu__checkbox" id="menu-gecis">
          <label for="menu-gecis" class="menu__buton">
              <span class="menu__icon">&nbsp;</span>
          </label>
          <div class="menu__arkaplan">&nbsp;</div>
          <nav class="menu__nav">
              <ul class="menu__list">
                  <li class="menu__item"><a href="index.html" class="menu__link">Home</a></li>
                  <li class="menu__item"><a href="about-us.html" class="menu__link">About Us</a></li>
                  <li class="menu__item"><a href="services.html" class="menu__link">Services</a></li>
                  <li class="menu__item"><a href="our-team.html" class="menu__link">Our Team</a></li>
                  <li class="menu__item"><a href="blog.html" class="menu__link">Blog</a></li>
                  <li class="menu__item"><a href="contact-us.html" class="menu__link">Contact Us</a></li>
              </ul>            
          </nav>
        <header class="header">
        <!--Logo Alanı-->
        <div class="header__logo-alani">
            <a href="index.html"><img src="img/logo-white.png" alt="Pet Clinic" class="header__logo"></a>
        </div> 
        </header>    
            <!--Header Arkaplan Görsel ve Yazı Alanı-->
            <header class="header-contact-area">
            <!--Contact Form Send Area Title-->
            <div class="header-contact-area-top">
                <h1 class="header-contact-area-top-titles">
                    <span class="header-contact-area-top-titles--1"> 
                        
                    <?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['telefon']) && isset($_POST['message'])) {
   $ad = $_POST['name'];
   $email = $_POST['email'];
   $telefon = $_POST['telefon'];
   $mesaj = $_POST['message'];
 
   if(empty($ad) || empty($email) || empty($telefon) || empty($mesaj)) {
      echo 'Please do not leave blank';
   } else {
    $toEmail = 'example@example.com';
    $emailSubject = 'New email from your contant form';
      echo 'Thank you.';
   }
} else {
   echo 'Please use the form';
}
?>
                    </span>
                    <span class="slider-yazi-icerikleri-formgonder--2"><a href="index.html">Here you can return to the home page.
</a></span>
                </h1>
            </div>   
        </header>
        <main>
        </main>
        <!--Footer Alanı-->
        <footer class="footer">
            <!--footer menu-->           
            <div class="tablo-footer">
                <div class="ozel">
                <div class="tablo--2-ve-4">
                    <h2 class="h2-baslik-footer h-yazi-margin-kucuk"> LINKS </h2> 
                    <div class="footer__menu">
                        <ul class="footer__list"> 
                             <li class="footer__item"><a href="index.html" class="footer__link">Home Page</a></li>
                             <li class="footer__item"><a href="about-us.html" class="footer__link">About Us</a></li>
                             <li class="footer__item"><a href="services.html" class="footer__link">Services</a></li>
                             <li class="footer__item"><a href="our-team.html" class="footer__link">Our Team</a></li>
                             <li class="footer__item"><a href="blog.html" class="footer__link">Blog</a></li>
                             <li class="footer__item"><a href="contact-us.html" class="footer__link">Contact</a></li>
                        </ul>      
                    </div>                   
                </div>
                <div class="tablo--2-ve-4">
                    <h2 class="h2-baslik-footer h-yazi-margin-kucuk"> SOCIAL MEDIA </h2> 
                    <p class="footer__sosyal">
                        <a href="#"><img src="img/pet-clinic-facebook.png" alt="Facebook" class="social-image"></a>
                        <a href="#"><img src="img/pet-clinic-instagram.png" alt="Intagram" class="social-image"></a>
                        <a href="#"><img src="img/pet-clinic-twitter.png" alt="Twitter" class="social-image"></a>
                        <a href="#"><img src="img/pet-clinic-youtube.png" alt="Youtube" class="social-image"></a>
                    </div>
            </div></div>
            <div class="ozel-copyright">
                <div class="footer__copyright">
                    &copy; 2022 - Pet Clinic Theme.
                </div>
            </div>
            <div id="top" style="cursor: pointer;">
                <img width="50" height="50" src="img/go-top.png" alt=""/>
            </div>
            <script src="js/jquery.min.js"></script>
            <link rel="stylesheet" href="js/owl.carousel.min.css">
            <link rel="stylesheet" href="js/owl.theme.default.css">
            <script src="js/owl.carousel.js"></script>
            <script src="js/team.js"></script>
            <script src="js/fancybox.min.js"></script> 
            <script src="js/swiper.min.js"></script> 
            <script src="js/odometer.min.js"></script> 
            <script src="js/wow.min.js"></script> 
            <script src="js/scripts.js"></script>
            <script>
               $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    dots:true,
                    nav:true,
                    mouseDrag:false,
                    autoplay:true,
                    animateIn: 'owl-fadeUp-in',
                    animateOut: 'owl-fadeUp-out',
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        100:{
                            items:1
                        }
                    }
                });
            </script>
            <script src="js/pointer.js"></script>
            <!--Cursor Script-->                    
            <script>
                init_pointer({
                    
                })
            </script>
            <script>
                function myFunction() {
                var x = document.getElementById("mymenunav");
                if (x.className === "menunav") {
                    x.className += " responsive";
                } else {
                    x.className = "menunav";
                }
                }
            </script>
            <script>
                $(document).ready(function() {
                $('.tab-content').each(function(i) {
                    var tabTitle = $(this).data('tab-title');
                    var current = $(this).hasClass('current') ? "current" : "";
                    var newTab = $('<li class="tab-link"></li>');
                    newTab.html(tabTitle)
                    .addClass(current)
                    .attr('data-tab', $(this).attr('id'));
                    $('ul.tabs').append(newTab)
                })

                $(document).on('click', '.tabs li', function() {
                    var tab_id = $(this).attr('data-tab');

                    $('.tabs li').removeClass('current');
                    $('.tab-content').removeClass('current');

                    $(this).addClass('current');
                    $("#" + tab_id).addClass('current');
                });

                })
            </script>
            <script>
                $(function() {
                    $("#top").click(function() {
                        $("html,body").stop().animate({ scrollTop: "0" }, 100);
                    });
                });
                $(window).scroll(function() {
                    var uzunluk = $(document).scrollTop();
                    if (uzunluk > 300) $("#top").fadeIn(500);
                    else { $("#top").fadeOut(500); }
                });
            </script>
        </footer>
        </main>
    </body>
</html>
