<?php
  session_start();
  if (!isset($_SESSION['MM_Email']))
{
    header("Location: index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thambapanni</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    </head>
    
<style>
#googleMap{
    float: left;
}
.mySlides {display:none;
             
              float: right;
              margin-right: -470px;

          }

#tour{
    background-color: #feae01; /* Green */
    border: none;
    color: black;
    padding: 8px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    /*margin: 4px 2px;*/
    cursor: pointer;
    border-radius: 20px;
}

#down{
    font-size: 20px;
}
hr{
    width: 950px;
    background: #feae01;
}

</style>


    <body>
        <link href="css/remodal.min.css" rel="stylesheet">
        <link href="ajax/libs/remodal/1.0.7/remodal-default-theme.min.css" rel="stylesheet" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="css/base.css" />
        <link rel="stylesheet" type="text/css" href="css/map.css"/>
        <link href="css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900" rel="stylesheet">
        
        
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        
         <div class="hero-video-wrap">
            <img src="images/background.png" style="width:100%;">
        </div>
        <header>
            <div class="row">
                <div class="row">
                    <div class="logo">
                        <img src="images/logo.png" class="logox">
                    </div>
                    <div class="nav-sword">
                         <img src="images/menu.png" class="sword">
                    </div>
                </div>
            </div>
        </header>
        
        <div id="main">
            <div class="container">
                <div id="nav-trigger">
                    <span>Menu</span>
                </div>
                <nav id="nav-main">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a class="btn btn-primary" data-toggle="modal" data-target="#instruction_modal">Instruction</a></li>
                        <li><a href="kathikawathaRegUsers/forum/forumTopics.php">Kathikawatha</a></li>
                        <li><a class="btn btn-primary" data-toggle="modal" data-target="#download_modal">Wallpapers</a></li>
                        <li><a href="map.php">Tour</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <nav id="nav-mobile"></nav>

        
            </div>
        </div>    

        <div align="center">   
            <a id="down" href="pdf/nissankalatha.pdf" target="_blank" type="application/octet-stream" 
            download="pdf/nissankalatha.pdf">download pdf
            </a>

            <input style="background-color: #FBA817;border: none;padding: 8px 32px;text-align: center;text-decoration: none;display: inline-block; cursor: pointer;margin-left:2%;border-radius: 20px;width: 10em; font-weight: bold;  color: #000; border-radius: 10px;  font-size: 16px;" type="button" value="Go to tour" onclick="window.location.href='map.php'" />
        </div>
        <!--begining of translate-->
       
        <div style="margin-left:70%;margin-top:-3%;" id="google_translate_element"></div>

            <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
            </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
        <!--end of translate-->
        <hr></hr>

        
       <div class="row" style="margin-top:5%">
            <div class="col-sm-12 mesh banner-pad-temple">
                <div class="details" id="ss">
                      <h2 style="font-family:'Cinzel Decorative', cursive;color: #F9F918;">Nissankalatha Mandapaya</h2>
                      <br>
                      Nissanka Latha Mandapaya is a square buiding with fine rock cut <img  class="wrap" src="images/nissanka1.jpg" alt="Smiley face" height="200" width="400" align=left>
                        railing g going all around lying the Dalada Maluwa area of the ancient kingdom of Polonnaruwa. 
                        This building has been built by king Nissanka Malla (1187-1196).
                    <br></br>        
                    The most important feature of this building is the shape and the carvings of the stone pillars. 
                    These pillars are carved in the shape of a lotus stork and are curved in three places. The top of
                     the pillars take form of a lotus flower. On the center is a small Stupa. The whole building is 
                     surrounded by a fence made out of stone.
                    <br></br>
                    At the center of the platform, flanked by the stone columns, is a small stupa. This is also made 
                    from stone, but the top part of it has been destroyed. Its base is decorated with a carved design.
                     The platform is surrounded by a stone railing, and the structure is entered through a single stone 
                     doorway. In contrast to the elaborately carved stone pillars, these have an undecorated and plain 
                     finish.
                    <br></br>
                      At the center of the platform, flanked by the stone columns, is a small stupa. This is also made from stone, but the top part of it has been destroyed. Its base is decorated with a carved design. The platform is surrounded by a stone railing, and the structure is entered through a single stone doorway. In contrast to the elaborately carved stone pillars, these have an undecorated and plain finish.
                      <br><br>
                    <h3>More info:</h3>
                    <br>
                    
                    <a target="_blank" href="https://en.wikipedia.org/wiki/Nissanka_Latha_Mandapaya">https://en.wikipedia.org/wiki/Nissanka_Latha_Mandapaya</a>
                    
                    <br>
                    <a target="_blank" href="http://amazinglanka.com/wp/nissanka-latha-mandapaya/">http://amazinglanka.com/wp/nissanka-latha-mandapaya/</a>

                     <br>
                    <a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g304140-d3600973-Reviews-Nissanka_Latha_Mandapaya-Polonnaruwa_North_Central_Province.html
                    ">https://www.tripadvisor.com/Nissanka_Latha_Mandapaya</a>

                    <br>
                    <a target="_blank" href="http://srilankatravelnotes.com/POLONNARUWA/NISSANKALATAMANDAPAYA/NisshankaLataMandapaya.html">http://srilankatravelnotes.com/NisshankaLataMandapaya.html</a>


                </div>  
            </div>
        </div>

        <div class="w3-content w3-section" style="max-width:700px">
          <img class="mySlides" src="wallpapers/nissanka1.jpg" style="width:50%">
          <img class="mySlides" src="wallpapers/nissanka2.jpg" style="width:50%">
          <img class="mySlides" src="wallpapers/nissanka3.jpg" style="width:50%">
        </div>
<!--begining of map-->
        <div id="googleMap" style="width:500px;height:300px;"></div>

            <script>
                function myMap() {
                    var mapProp= {
                        center:new google.maps.LatLng(7.9476,81.0012),
                        zoom:18,
                    };
                    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                    
                    var marker = new google.maps.Marker({
                      position: mapProp,
                      map: map,
                      draggable: true,
                      animation: google.maps.Animation.DROP,
                      position: {lat: 7.9476, lng: 81.0012}
                    });
                    marker.addListener('click', toggleBounce);
               }
               function toggleBounce() {
                  if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                  } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                  }
                }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDuHnG2Uz1RGg3zHa5ygcZUDsTER-lduzs&callback=myMap"></script>
        </div>
<!--end of map-->
        <footer>
            <div class="row foot">
                <div class="col-md-10 col-md-offset-1 ">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <a href="" class="foot-social" target="_blank"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-facebook fa-stack-1x fa-inverse"></i> </span> </a>
                            <a href="" class="foot-social" target="_blank"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-twitter fa-stack-1x fa-inverse"></i> </span> </a>
                            <a href="" class="foot-social" target="_blank"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-instagram fa-stack-1x fa-inverse"></i> </span> </a>
                            <a href="" class="foot-social" target="_blank"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i> </span> </a>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-12 foot-tag-pad">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p class="foot-tag-copy">Copyright © 2016 <a target="_blank" href=""></a> All rights reserved. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <div class="modal fade bs-example-modal-sm" id="download_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><img src="images/logo.png" class="modal-tit-img"> | DOWNLOAD WALLPAPERS</h4>
                        </div>
                        <div class="modal-body text-center">
                            <div class="tabbable"> <!-- Only required for left/right tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab">Desktop&nbsp;&nbsp;<i class="fa fa-laptop" aria-hidden="true"></i></a></li>
                                    <li><a href="#tab2" data-toggle="tab">Mobile&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active fade in" id="tab1">
                                        <div class="row">
                                            <div class="col-sm-12 scrl-down">
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/dalada1.jpg" class="img-responsive wal-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/dalada1.jpg" download class="btn btn-default">DOWNLOAD</a>
                                                    </div>
                                                </div>
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/dalada2.jpg" class="img-responsive wal-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/dalada2.jpg" download class="btn btn-default" >DOWNLOAD</a>
                                                    </div>
                                                </div>
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/dalada3.jpg" class="img-responsive wal-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/dalada3.jpg" download class="btn btn-default" >DOWNLOAD</a>
                                                    </div>
                                                </div>
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/kuttam1.jpg" class="img-responsive wal-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/kuttam1.jpg" download class="btn btn-default" >DOWNLOAD</a>
                                                    </div>
                                                </div>
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/kuttam2.jpg" class="img-responsive wal-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/kuttam2.jpg" download class="btn btn-default" >DOWNLOAD</a>
                                                    </div>
                                                </div>
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/kuttam3.jpg" class="img-responsive wal-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/kuttam3.jpg" download class="btn btn-default" >DOWNLOAD</a>
                                                    </div>
                                                </div>
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/nissanka1.jpg" class="img-responsive wal-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/nissanka1.jpg" download class="btn btn-default" >DOWNLOAD</a>
                                                    </div>
                                                </div>
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/nissanka2.jpg" class="img-responsive wal-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/nissanka2.jpg" download class="btn btn-default" >DOWNLOAD</a>
                                                    </div>
                                                </div>
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/nissanka3.jpg" class="img-responsive wal-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/nissanka3.jpg" download class="btn btn-default" >DOWNLOAD</a>
                                                    </div>
                                                </div>
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/thuparama1.jpg" class="img-responsive wal-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/thuparama1.jpg" download class="btn btn-default" >DOWNLOAD</a>
                                                    </div>
                                                </div>
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/thuparama2.jpg" class="img-responsive wal-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/thuparama2.jpg" download class="btn btn-default" >DOWNLOAD</a>
                                                    </div>
                                                </div>
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/thuparama3.jpg" class="img-responsive wal-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/thuparama3.jpg" download class="btn btn-default" >DOWNLOAD</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <div class="row">
                                            <div class="col-sm-12 scrl-down">
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/mobile_wallpaper_1.jpg" class="img-responsive  mob-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/mobile_wallpaper_1.jpg" download class="btn btn-default">DOWNLOAD</a>
                                                    </div>
                                                </div>
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/mobile_wallpaper_2.jpg" class="img-responsive mob-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/mobile_wallpaper_2.jpg" download class="btn btn-default" >DOWNLOAD</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        <script src="js/jquery.min.js"></script>
        <script  src="js/bootstrap.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.ui.touch-punch.min.js"></script>
        <script  src="js/custom.js"></script>
        <script  src="ajax/libs/remodal/1.0.7/remodal.min.js"></script>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        
<!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
        $(window).on('load', function() { // makes sure the whole site is loaded 
            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({'overflow':'visible'});
        })
    //]]>
</script>
    </body>
</html>
<script>
                                            
                     function aud_play_pause() {
    var myAudio = document.getElementById("player");
    if (myAudio.paused) {
      $('#stateicon').removeClass('sound');
      $('#stateicon').addClass('sound2');
      myAudio.play();
    } else {
      $('#stateicon').removeClass('sound2');
      $('#stateicon').addClass('sound');
      myAudio.pause();
   }
 }

</script>
<!--slider js-->
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>
<!--slider js-->