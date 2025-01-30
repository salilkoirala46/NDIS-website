<!-- This is for single page (about-us) -->
<?php 
    get_header(); 
?>
<?php while (have_posts()) { 
the_post();
$pageBannerImage = get_field('page_banner_background_image');?>
    <div class="container-fluid bg-light">
            <div class="container pb-5">
                <div class="row flex-lg-row-reverse space-around py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                      <img src="<?php echo $pageBannerImage['url']; ?>" class="d-block mx-lg-auto img-fluid" alt="About Us Image" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                      <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-primary">All Aspects Care</h1>
                      <p class="lead"> 
                        <?php
                            //print all variable of post
                            $post_data = get_post();
                            echo the_content();
                        } ?>
                      </p>
                    </div>
                </div>
            </div> 
    </div>
<?php 
    get_footer();
?>