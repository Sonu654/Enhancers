<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
            baseurl = '<?php echo base_url(); ?>';
            siteurl = '<?php echo site_url(); ?>';
        </script>
        <link rel="shortcut icon" href="<?php echo base_url() ?>Assets/images/favicon64.png"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css" media="all"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/font-awesome.min.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/isotope.css" media="screen" media="all" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
        <link href="<?php echo base_url() ?>Assets/css/animate.css" rel="stylesheet" media="screen"/>
        <!-- Sliknav -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/slicknav.css" media="screen">

        <!-- Margo CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/style.css" media="screen">

        <!-- Responsive CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/responsive.css" media="screen">

        <!-- Css3 Transitions Styles  -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/animate.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/colors/red.css" title="red" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/colors/jade.css" title="jade" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/colors/blue.css" title="blue" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/colors/beige.css" title="beige" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/colors/cyan.css" title="cyan" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/colors/green.css" title="green" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/colors/orange.css" title="orange" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/colors/peach.css" title="peach" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/colors/pink.css" title="pink" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/colors/purple.css" title="purple" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/colors/sky-blue.css" title="sky-blue" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/colors/yellow.css" title="yellow" media="screen" />	

        <style>
            p{
                text-align: justify;
            }
            .img{
                max-width: 300px;
            }

            .error{
                color:red;
                font-weight: bold;
            }

            .note{
                font-size: 12px;
                margin-left:-15px;
                border:dotted 1px black;
                padding:5px;
            }

            p{ 
                margin:0px;
            }

            .details{
                border:solid 1px black;
                margin:10px 0;
                padding: 10px;
            }

            .passport{
                height:250px;
                width:200px;
            }

        </style>
    </head>
    <body><!-- Container -->
        <div class="container">

            <!-- Start Header -->
            <div class="hidden-header"></div>
            <header class="clearfix">

                <!-- Start Top Bar -->
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Start Contact Info -->
                                <ul class="contact-details">
                                    <li><a href="#"><i class="fa fa-map-marker"></i> Enhancers, Mukhani Haldwani</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i> info@enhancers.com</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
                                    </li>
                                </ul>
                                <!-- End Contact Info -->
                            </div>
                            <div class="col-md-6">
                                <!-- Start Social Links -->
                                <ul class="social-list">
                                    <li>
                                        <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                                    </li>
                                    <li>
                                        <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                                    </li>
                                    <li>
                                        <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                                    </li>
                                    <li>
                                        <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                                    </li>
                                </ul>
                                <!-- End Social Links -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top Bar -->

                <!-- Start Header ( Logo & Naviagtion ) -->
                <div class="navbar navbar-default navbar-top">
                    <div class="container">
                        <div class="navbar-header">
                            <!-- Stat Toggle Nav Link For Mobiles -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                            <!-- End Toggle Nav Link For Mobiles -->
                            <a class="navbar-brand" href="<?php echo site_url('Enhancers/Index'); ?>"><img alt="" src="<?php echo base_url() ?>Assets/images/logo3.png"></a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <!-- Stat Search -->
                            <div class="search-side">
                                <a class="show-search"><i class="fa fa-search"></i></a>
                                <div class="search-form">
                                    <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                                        <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                                    </form>
                                </div>
                            </div>
                            <!-- End Search -->
                            <!-- Start Navigation List -->
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a class="active" href="<?php echo site_url('Enhancers/Index') ?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Enhancers/About') ?>">About</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Enhancers/Register'); ?>">Register</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/Index'); ?>">Admin</a>
                                </li>
                                <li><a href="<?php echo site_url('Enhancers/Contact') ?>">Contact</a></li>
                            </ul>
                            <!-- End Navigation List -->
                        </div>
                    </div>

                    <!-- Mobile Menu Start -->
                    <ul class="wpb-mobile-menu">
                        <li>
                            <a class="active" href="index.html">Home</a>
                            <ul class="dropdown">
                                <li><a href="index.html">Home Main Version</a>
                                </li>
                                <li><a href="index-01.html">Home Version 1</a>
                                </li>
                                <li><a class="active" href="index-02.html">Home Version 2</a>
                                </li>
                                <li><a href="index-03.html">Home Version 3</a>
                                </li>
                                <li><a href="index-04.html">Home Version 4</a>
                                </li>
                                <li><a href="index-05.html">Home Version 5</a>
                                </li>
                                <li><a href="index-06.html">Home Version 6</a>
                                </li>
                                <li><a href="index-07.html">Home Version 7</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about.html">Pages</a>
                            <ul class="dropdown">
                                <li><a href="about.html">About</a>
                                </li>
                                <li><a href="services.html">Services</a>
                                </li>
                                <li><a href="right-sidebar.html">Right Sidebar</a>
                                </li>
                                <li><a href="left-sidebar.html">Left Sidebar</a>
                                </li>
                                <li><a href="404.html">404 Page</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Shortcodes</a>
                            <ul class="dropdown">
                                <li><a href="tabs.html">Tabs</a>
                                </li>
                                <li><a href="buttons.html">Buttons</a>
                                </li>
                                <li><a href="action-box.html">Action Box</a>
                                </li>
                                <li><a href="testimonials.html">Testimonials</a>
                                </li>
                                <li><a href="latest-posts.html">Latest Posts</a>
                                </li>
                                <li><a href="latest-projects.html">Latest Projects</a>
                                </li>
                                <li><a href="pricing.html">Pricing Tables</a>
                                </li>
                                <li><a href="animated-graphs.html">Animated Graphs</a>
                                </li>
                                <li><a href="accordion-toggles.html">Accordion & Toggles</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="portfolio-3.html">Portfolio</a>
                            <ul class="dropdown">
                                <li><a href="portfolio-2.html">2 Columns</a>
                                </li>
                                <li><a href="portfolio-3.html">3 Columns</a>
                                </li>
                                <li><a href="portfolio-4.html">4 Columns</a>
                                </li>
                                <li><a href="single-project.html">Single Project</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog.html">Blog - right Sidebar</a>
                                </li>
                                <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                                </li>
                                <li><a href="single-post.html">Blog Single Post</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <!-- Mobile Menu End -->

                </div>
                <!-- End Header ( Logo & Naviagtion ) -->

            </header>
            <!-- End Header -->


            <!-- Start HomePage Slider -->

            <section id="home">
                <!-- Carousel -->
                <div id="main-slide" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                        <li data-target="#main-slide" data-slide-to="1"></li>
                        <li data-target="#main-slide" data-slide-to="2"></li>
                    </ol>
                    <!--/ Indicators end-->

                    <!-- Carousel inner -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="<?php echo base_url() ?>Assets/images/theme/slider/bg1.jpg" alt="slider">
                            <div class="slider-content">
                                <div class="col-md-12 text-center">
                                    <h2 class="animated2">
                                        <span>Welcome to <strong>Enhancers</strong></span>
                                    </h2>
                                    <h3 class="animated3">
                                        <span>The ultimate aim of your business</span>
                                    </h3>
                                    <p class="animated4"><a href="#" class="slider btn btn-system btn-large">Check Now</a></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Carousel item end -->
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url() ?>Assets/images/theme/slider/bg2.jpg" alt="slider">
                            <div class="slider-content">
                                <div class="col-md-12 text-center">
                                    <h2 class="animated4">
                                        <span><strong>Enhancers</strong> for the highest</span>
                                    </h2>
                                    <h3 class="animated5">
                                        <span>The Key of your Success</span>
                                    </h3>
                                    <p class="animated6"><a href="#" class="slider btn btn-system btn-large">Buy Now</a></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Carousel item end -->
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url() ?>Assets/images/theme/slider/bg3.jpg" alt="slider">
                            <div class="slider-content">
                                <div class="col-md-12 text-center">
                                    <h2 class="animated7 white">
                                        <span>The way of <strong>Success</strong></span>
                                    </h2>
                                    <h3 class="animated8 white">
                                        <span>Why you are waiting</span>
                                    </h3>
                                    <div class="">
                                        <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Carousel item end -->
                    </div>
                    <!-- Carousel inner end-->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#main-slide" data-slide="prev">
                        <span><i class="fa fa-angle-left"></i></span>
                    </a>
                    <a class="right carousel-control" href="#main-slide" data-slide="next">
                        <span><i class="fa fa-angle-right"></i></span>
                    </a>
                </div>
                <!-- /carousel -->
            </section>

