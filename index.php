<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include ("_header.html")
    ?>
    <title>ideally | Mobile App Developers | Shmap</title>


</head>

<body>


    <!-- Google Analytics Tracking Code added via PHP  -->
    <?php include_once("analyticstracking.php") ?>


    <!-- /////////////////////////////////// Navigation /////////////////////////////////// -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top">ideally</a>
            </li>
            <li>
                <a href="#top">Home</a>
            </li>
            <li>
                <a href="#about">About Us</a>
            </li>
            <li>
                <a href="#products">In Development</a>
            </li>
            <!-- <li>
                <a href="#portfolio">Sneak Peek</a>
            </li> -->
            <li>
                <a href="#team">Our Team</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1><i class="fa fa-map-marker"></i></h1>
            <!-- <h1><i class="fa fa-comments-o"></i></h1> -->
            <h1 class="">ideally</h1>
            <h3>Extraordinary mobile services.</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1><i class="fa fa-comments-o"></i></h1>
                    <h2>Changing the way we interact with each other.</h2>
                    <p class="lead">By tightly integrating location with messaging, ideally is changing ordinary messages into something far more compelling and powerful. Stay tuned for our debut. <!-- <strong>Place</strong> allows you to leave a message for your friend just when she's walked into the coffee shop you want her to bring you something from. <strong>Place</strong> lets you tell your pal to get out of the bar that he passed out in during your last wild night. <strong>Place</strong> lets you leave a sweet note for your new girl just when she arrives home and can actually enjoy the moment.<br><strong>Place</strong> is directly connected to almost everything that triggers and shapes our emotions --></p>
                </div>
            </div>
        </div>
    </section>

    <!-- /////////////////////////////////// Products /////////////////////////////////// -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="products" class="products bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1><i class="fa fa-cogs"></i></h1>
                    <h2>In Development</h2>
                    <h4><em>Coming Summer 2015</em></h4>
                    <hr class="small">
                    <div class="row">

                        <div class="col-md-6 col-sm-6">
                            <div class="product-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-mobile fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Shmap Mobile Messaging</strong>
                                </h4>
                                <p>The Shmap application serves the messaging needs of end consumers as well as brands and businesses looking to leverage recent advances of mobile location technology. <!-- In addition to powering conventional one-to-one messaging, Shmap messages are delivered to recipients (either privately to direct contacts or to any user of the app) only when the recipient enters the location where the message was left. Businesses can also deliver messages to users when they come in proximity of their premises. --></p>
                                <!-- Learn More button: -->
                                <!-- <a href="#" class="btn btn-light">Learn More</a> -->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="product-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <!-- <i class="fa fa-cog fa-stack-1x text-primary"></i> -->
                                <i class="fa fa-globe fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>ideally Ecosystem</strong>
                                </h4>
                                <p>The ideally platform encompasses a device side application, content management system and analytics engine that provide a complete ecosystem. <!-- ideally and its partners utilize the CMS to create rich messages associated with locations designed to deliver information relevant to the user. Users of the CMS can draw custom geofences and program beacons, both of which are the triggers for delivering content to end-users. --></p>
                                <!-- Learn More button: -->
                                <!-- <a href="#" class="btn btn-light">Learn More</a> -->
                            </div>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- /////////////////////////////////// Callout /////////////////////////////////// -->
    <!-- <aside class="callout">
        <div class="text-vertical-center">
            <h1 class="callout1h1">We believe that messaging + place = a new type of conversation.</h1>
        </div>
    </aside> -->


<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
    <!-- <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" style="display: none;" data-use-bootstrap-modal="false"> -->
        <!-- The container for the modal slides -->
        <!-- <div class="slides"></div> -->
        <!-- Controls for the borderless lightbox -->
        <!-- <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol> -->
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <!-- <div class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body next"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                            Previous
                        </button>
                        <button type="button" class="btn btn-primary next">
                            Next
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

 -->



    <!-- /////////////////////////////////// Portfolio /////////////////////////////////// -->
    <!-- <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h1><i class="fa fa-eye"></i></h1>
                    <h2>Sneak Peek</h2>
                    <hr class="small">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="img/portfolio/1/coffee_pop.png" title="Shmap Use Case - Study and Coffee" data-gallery>
                                    <img id="portfolio1" class="img-portfolio img-responsive thumbnailPhoto" src="img/portfolio/1/coffee.jpg" title="Shmap Use Case - Study and Coffee" alt="Shmap Use Case - Study and Coffee">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="img/portfolio/2/love_pop.png" title="Shmap Use Case - Love" data-gallery>
                                    <img id="portfolio2" class="img-portfolio img-responsive thumbnailPhoto" src="img/portfolio/2/love.jpg" title="Shmap Use Case - Love" alt="Shmap Use Case - Love">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="img/portfolio/3/cms_pop.jpg" title="ideally CMS" data-gallery>
                                    <img id="portfolio3" class="img-portfolio img-responsive thumbnailPhoto" src="img/portfolio/3/cms.jpg" title="ideally CMS" alt="" title="ideally CMS">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="img/portfolio/4/cmsGeo_pop.jpg" title="ideally CMS - Drawing a Geofence" data-gallery>
                                    <img id="portfolio4" class="img-portfolio img-responsive thumbnailPhoto" src="img/portfolio/4/cmsGeo.jpg" title="ideally CMS - Drawing a Geofence" alt="ideally CMS - Drawing a Geofence">
                                </a>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </div>

    </section> -->

<!-- The following script creates the hover image-swap effect on the portfolio. -->
    <script>
        $("#portfolio1") .mouseover(function () {
           this.src= "img/portfolio/1/coffee_hover.jpg"
        }).mouseout(function () {
            this.src= "img/portfolio/1/coffee.jpg"
        });

        $("#portfolio2") .mouseover(function () {
           this.src= "img/portfolio/2/love_hover.jpg"
        }).mouseout(function () {
            this.src= "img/portfolio/2/love.jpg"
        });

        $("#portfolio3") .mouseover(function () {
           this.src= "img/portfolio/3/cms_hover.jpg"
        }).mouseout(function () {
            this.src= "img/portfolio/3/cms.jpg"
        });

        $("#portfolio4") .mouseover(function () {
           this.src= "img/portfolio/4/cmsGeo_hover.jpg"
        }).mouseout(function () {
            this.src= "img/portfolio/4/cmsGeo.jpg"
        });
    </script>





    <!-- /////////////////////////////////// Callout /////////////////////////////////// -->
    <aside class="callout2">
        <div class="text-vertical-center">
            <h1>Our team consists of mobile industry veterans with decades of combined experience.</h1>
        </div>
    </aside>



    <!-- /////////////////////////////////// Our Team /////////////////////////////////// -->
    <section id="team" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h1><i class="fa fa-users"></i></h1>
                    <h2>The ideally Team</h2>
                    <hr class="small">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <ul class="img-list">
                                  <li>
                                    <!-- <a href="#"> -->
                                      <img id="alexBioPhoto" class="img-portfolio img-responsive" src="img/bios/alex.jpg" title="Alex Hyman" alt="Alex Hyman's profile photo">
                                      <span class="text-content"><span><strong>Alex Hyman</strong><br>Founder &amp; CEO</span></span>
                                    <!-- </a> -->
                                  </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <ul class="img-list">
                                  <li>
                                    <!-- <a href="#"> -->
                                      <img id="clayBioPhoto" class="img-portfolio img-responsive" src="img/bios/clay.jpg" title="Clay Johnson" alt="Clay Johnson's profile photo">
                                      <span class="text-content"><span><strong>Clay Johnson</strong><br>VP, Product Strategy</span></span>
                                    <!-- </a> -->
                                  </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <ul class="img-list">
                                  <li>
                                    <!-- <a href="#"> -->
                                      <img id="charlieBioPhoto" class="img-portfolio img-responsive" src="img/bios/charlie.jpg" title="Charlie Gigante" alt="Charlie Gigante's profile photo">
                                      <span class="text-content"><span><strong>Charlie Gigante</strong><br>Director of Product Development</span></span>
                                    <!-- </a> -->
                                  </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <ul class="img-list">
                                  <li>
                                    <!-- <a href="#"> -->
                                      <img id="robBioPhoto" class="img-portfolio img-responsive" src="img/bios/rob.jpg" title="Robert Barrett" alt="Robert Barrett's profile photo">
                                      <span class="text-content"><span><strong>Robert Barrett</strong><br>VP, Financial Planning &amp; Analysis</span></span>
                                    <!-- </a> -->
                                  </li>
                                </ul>
                            </div>
                        </div>



                    </div>
                    <!-- /.row (nested) -->
                    <!-- <a href="#" class="btn btn-dark">View More Items</a> -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>




    <!-- Call to Action -->
    <!-- <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside> -->



    <!-- /////////////////////////////////// Map /////////////////////////////////// -->

    <section id="contact" class="map">
        <iframe id="map_canvas1" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24197.09034234598!2d-73.986759!3d40.7040072!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a324d8b7913%3A0x87d43ec2a5986cf9!2s20+Jay+St%2C+Brooklyn%2C+NY+11201!5e0!3m2!1sen!2sus!4v1422306337958"></iframe>
        <br />
        <small>
            <a href="https://www.google.com/maps/place/20+Jay+St,+Brooklyn,+NY+11201/@40.7040072,-73.986759,14z/data=!4m2!3m1!1s0x89c25a324d8b7913:0x87d43ec2a5986cf9"></a>
        </small>
        </iframe>
    </section>


    <!-- /////////////////////////////////// Footer /////////////////////////////////// -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h1><i class="fa fa-map-marker"></i></h1>
                    <h4><strong>ideally</strong>
                    </h4>
                    <p>20 Jay Street, Suite 1100A<br>Brooklyn, NY 11201</p>
                    <ul class="list-unstyled">
                        <!-- <li><i class="fa fa-phone fa-fw"></i> (718) 555-1212</li> -->
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:info@ideally.net">info@ideally.net</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/pages/ideally-LLC/755987367793491" target="_blank"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/ideallyllc" target="_blank"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; ideally, LLC 20<?php echo date("y"); ?></p>
                </div>
            </div>
        </div>
    </footer>



    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
        // Closes the sidebar menu
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Scrolls to the selected menu item on the page
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>

<!-- The following script prevents Google Maps iframe from capturing the mouse's scrolling wheel behavior  -->
    <script>
      $(document).ready(function () {
          // you want to enable the pointer events only on click;
          $('#map_canvas1').addClass('scrolloff'); // set the pointer events to none on doc ready
          $('#contact').on('click', function () {
              $('#map_canvas1').removeClass('scrolloff'); // set the pointer events true on click
          });

          // you want to disable pointer events when the mouse leave the canvas area;

          $("#map_canvas1").mouseleave(function () {
              $('#map_canvas1').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area
          });
      });
    </script>




    <!-- Image Gallery Javascript Links -->    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>




</body>

</html>
