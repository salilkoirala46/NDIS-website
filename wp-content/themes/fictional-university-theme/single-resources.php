<?php
get_header();

while (have_posts()){
    the_post();
    ?>
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>)"></div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title"><?php the_title();?></h1>
                <div class="page-banner__intro">
                <p>Learn how the school of your dreams got started.</p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('resources'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Resources Home</a> <span class="metabox__main"><?php the_title(); ?></span>
        </p>
      </div>
        <div class="generic-content">
            <div class = "row group">

                <div class="one-third">
                    <?php the_post_thumbnail('resourcesPortrait');?>
                </div>
                <div class="two-thirds">
                    <?php  the_content();?>
                </div>
            </div>
           
        </div>
        <?php
          $relatedCommunity = get_field('related_community');
          if($relatedCommunity) {
          echo '<hr class="section-break">';
          echo '<h2 class="headline headline--small">Related Community</h2>';
          echo '<ul class="link-list min-list">';
          foreach($relatedCommunity as $community) { ?>
            <li><a href="<?php echo get_the_permalink($community); ?>"> <?php echo get_the_title($community); ?></a></li>
         <?php }
          echo '</ul>';
          }
        ?>
    </div>  
<?php }

get_footer();
?>