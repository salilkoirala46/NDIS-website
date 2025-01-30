<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>All Aspects Care</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <?php wp_head(); ?>
    </head>

    <body>

        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


                <!-- Navbar & Hero Start -->
                <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light"> 
                    <a href="#" class="navbar-brand p-0 d-flex flex-column align-items-center">
                        <img class="img-logo" src="<?php echo get_theme_file_uri('img/logo.jpg') ?>" alt="Logo"> 
                        <h1 class="text-primary mb-0">All Aspects Care</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-0 mx-lg-auto">
                            <a href="<?php echo site_url(); ?>" class="nav-item nav-link <?php if (is_page('home')) echo 'active'?>">Home</a>
                            <a href="<?php echo site_url('/about-us'); ?>" class="nav-item nav-link <?php if (is_page('about-us')) echo 'active'?>">About Us</a>
                            <a href="<?php echo site_url('/services'); ?>" class="nav-item nav-link <?php if (is_page('services')) echo 'active'?>">Our Services</a>
                            <a href="<?php echo site_url('/FAQs'); ?>" class="nav-item nav-link <?php if (is_page('FAQs')) echo 'active'?>">FAQs</a>
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle">Pages</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="feature.html" class="dropdown-item">Our Features</a>
                                    <a href="team.html" class="dropdown-item">Our team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="FAQ.html" class="dropdown-item">FAQs</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div> -->
                            <a href="<?php echo site_url('/make-referral'); ?>" class="nav-item nav-link <?php if (is_page('make-referral')) echo 'active'?>">Make a Referral</a>
                            <a href="<?php echo site_url('/contact-us'); ?>" class="nav-item nav-link <?php if (is_page('contact-us')) echo 'active'?>">Contact Us</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->