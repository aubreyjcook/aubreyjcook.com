<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'php/htmlHead.php';?>
    <?php include 'php/headCSS.php';?>
    <?php include 'php/headJS.php';?>
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Aubrey Cook</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu <i class="fa fa-bars"></i> </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="resume.php">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="photography.php">Photography</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <span class="name">Aubrey Cook</span>
                <hr class="star-light">
                <span class="skills">Web Developer</span>
            </div>
        </div>
    </header>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <h2 class="text-center">Portfolio</h2>
            <hr class="star-primary">
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/portfolioThumb01.jpg" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" href="#portfolioModal2" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"> <i class="fa fa-search-plus fa-3x"></i> </div>
                        </div> <img class="img-fluid" src="img/portfolio/portfolioThumb02.jpg" alt=""> </a>
                </div>
                <!--
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" href="#portfolioModal3" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"> <i class="fa fa-search-plus fa-3x"></i> </div>
                        </div> <img class="img-fluid" src="img/portfolio/circus.png" alt=""> </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"> <i class="fa fa-search-plus fa-3x"></i> </div>
                        </div> <img class="img-fluid" src="img/portfolio/game.png" alt=""> </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" href="#portfolioModal5" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"> <i class="fa fa-search-plus fa-3x"></i> </div>
                        </div> <img class="img-fluid" src="img/portfolio/safe.png" alt=""> </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"> <i class="fa fa-search-plus fa-3x"></i> </div>
                        </div> <img class="img-fluid" src="img/portfolio/submarine.png" alt=""> </a>
                </div>
            -->
        </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <hr>
                    <a class="btn btn-lg btn-outline" href="https://github.com/aubreyjcook"> <i class="fa fa-fw fa-github"></i> Review My Github Projects </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <h2 class="text-center">About</h2>
            <hr class="star-light">
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p>Aubrey Cook is a free-lance Web Developer, specializing in front-end development.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p>Web development is a field within software development, often related with web design. Web Developers are responsible for writing computer code and applications to make websites functional.</p>
                </div>
                <div class="col-lg-8 mx-auto text-center">
                    <a href="documents/AubreyCookResume2017.docx" class="btn btn-lg btn-outline"> <i class="fa fa-download"></i> Download Resume </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center">Contact Me</h2>
            <hr class="star-primary">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Name</label>
                                <input class="form-control" id="name" type="text" placeholder="Name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Email Address</label>
                                <input class="form-control" id="email" type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section id="services">
        <div class="container">
            <h2 class="text-center">Request Services</h2>
            <hr class="star-light">
            <div class="row">
                <div class="col-lg-4 ml-auto text-center">
                    <h3>Website Audits</h3>
                    <p>A website audit is a thorough inspection of an existing website to discover any errors, outdated design elements, or potential areas of improvement. The deliverable for this format of service is a spreadsheet including a description of each individual issue to be solved.</p>
                </div>
                <div class="col-lg-4 ml-auto text-center">
                    <h3>Website Designs</h3>
                    <p>A website design is for a new site or website redesign. It includes an entire process of analysis, building wireframes, mockups, and finally a pixel-perfect representation of the site to be built.</p>
                </div>
                <div class="col-lg-4 ml-auto text-center">
                    <h3>Website Development</h3>
                    <p>Website development includes any work involved in actually coding a website, either from scratch or to update an existing website.</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center">
                    <h3>Wordpress Standard Theme Development</h3>
                    <p>Development on a Wordpress site using a standard (free) theme available from the web.</p>
                </div>
                <div class="col-lg-4 ml-auto text-center">
                    <h3>Wordpress Premium Theme Development</h3>
                    <p>Development on a Wordpress site using a premium theme. You are required to purchase a liscense for a premium theme to be used on your site, which will be used to create a child-theme for further customization.</p>
                </div>
                <div class="col-lg-4 ml-auto text-center">
                    <h3>Wordpress Custom Theme Development</h3>
                    <p>Development of a Wordpress site using an entirely custom made theme from scratch.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">                    
                    <div class="col-lg-8 mx-auto text-center">
                        <a href="https://form.jotform.com/73454085084156" class="btn btn-lg btn-outline"> <i class="fa fa-link"></i> Start Client Questionnaire Form </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-12">
                        <h5>Computers are like old testament gods, lots of rules and no mercy.</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="btn-social btn-outline" href="https://github.com/aubreyjcook"> <i class="fa fa-fw fa-github"></i> </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-social btn-outline" href="https://www.facebook.com/aubrey.cook.507"> <i class="fa fa-fw fa-facebook"></i> </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-social btn-outline" href="https://twitter.com/aubreyjcook"> <i class="fa fa-fw fa-twitter"></i> </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-social btn-outline" href="https://www.linkedin.com/in/aubrey-cook-9b6922152/"> <i class="fa fa-fw fa-linkedin"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" id="date"></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
        <a class="btn btn-primary js-scroll-trigger" href="#page-top"> <i class="fa fa-chevron-up"></i> </a>
    </div>
    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Personal Website</h2>
                                <hr class="star-light"> <img class="img-fluid img-centered" src="img/portfolio/portfolioThumb01.jpg" alt="">
                                <p>My personal website located at <a href="aubreyjcook.com">aubreyjcook.com</a></p>
                                <ul class="list-inline item-details">

                                    <li>Date: <strong>2017
                      </strong> </li>
                                    <li>Service: <strong>
                        Web Development
                      </strong> </li>
                                </ul>
                                <button class="btn btn-success" type="button" data-dismiss="modal"> <i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>MMJ Construction</h2>
                                <hr class="star-light"> <img class="img-fluid img-centered" src="img/portfolio/portfolioThumb02.jpg" alt="">
                                <p><a href="http://www.mmjconstruction.co.uk">MMJ Construction Website</a></p>
                                <ul class="list-inline item-details">
                                    <li>Client: <strong>
                        MMJ Construction
                      </strong> </li>
                                    <li>Date: <strong>
                        August 2017
                      </strong> </li>
                                    <li>Service: <strong>
                        Web Development, Wordpress Development
                      </strong> </li>
                                </ul>
                                <button class="btn btn-success" type="button" data-dismiss="modal"> <i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-light"> <img class="img-fluid img-centered" src="img/portfolio/circus.png" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client: <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong> </li>
                                    <li>Date: <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong> </li>
                                    <li>Service: <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong> </li>
                                </ul>
                                <button class="btn btn-success" type="button" data-dismiss="modal"> <i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-light"> <img class="img-fluid img-centered" src="img/portfolio/game.png" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client: <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong> </li>
                                    <li>Date: <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong> </li>
                                    <li>Service: <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong> </li>
                                </ul>
                                <button class="btn btn-success" type="button" data-dismiss="modal"> <i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary"> <img class="img-fluid img-centered" src="img/portfolio/safe.png" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client: <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong> </li>
                                    <li>Date: <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong> </li>
                                    <li>Service: <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong> </li>
                                </ul>
                                <button class="btn btn-success" type="button" data-dismiss="modal"> <i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-light"> <img class="img-fluid img-centered" src="img/portfolio/submarine.png" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client: <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong> </li>
                                    <li>Date: <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong> </li>
                                    <li>Service: <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong> </li>
                                </ul>
                                <button class="btn btn-success" type="button" data-dismiss="modal"> <i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
<?php include 'php/footerJS.php';?>
</body>

</html>
