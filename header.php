<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- title of site -->
    <title>Home page</title>

   
    <?php wp_head(); ?>
</head>
<body>
    <!--Start Preloader-->
    <!--<div class="preloader">-->
    <!--    <div class="preloader-inner-area">-->
    <!--        <div class="loader-overlay">-->
    <!--            <div class="l-preloader">-->
    <!--                <div class="c-preloader"></div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div> -->
    <!--End Preloader-->

    <header id="header" class="header_areaa">
        <nav class="navbar extended">
            <div class="nav-wrapper dark-wrapper inverse-text">
                <div class="container flex-it">
                    <div class="navbar-collapse collapse align-left">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index-01.html">Home</a>
                            </li>

                            <li><a href="about-us-page.html">About</a></li>

                            <li><a href="#">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page-404.html">404</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Portfolio</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio-two-column.html">Portfolio 2 Column</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-sidebar-page.html">Blog Sidebar Page</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-page.html">Contacts  </a></li>        
                        </ul>
                    </div>
                    <div class="navbar-other">
                        <div class="align-right text-right">
                            <div class="navbar-brand">
								<a href="index-01.html"><img alt="images" src="<?php echo get_template_directory_uri(); ?>/images/logo_consult.png"></a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header><!-- /header -->