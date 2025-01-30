<?php 
    get_header(); 
?>
<?php while (have_posts()) { 
the_post(); ?>
 <div class="container-fluid bg-light">
            <div class="container pb-5 py-5">
                    <h2 class="pb-2 border-bottom text-primary">Frequently Asked Questions (FAQs)</h2>
                    <p class="lead"> 
                    <?php
                            //print all variable of post
                            $post_data = get_post();
                            echo the_content();
                        } ?>
                    </oo>
            </div>
        </div>

<?php 
    get_footer();
?>