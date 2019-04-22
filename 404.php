<?php get_header(); ?>

<div class="site-content-contain">
    <div id="content" class="site-content">
        <div class="wrap">
            <div class="row">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                    <?php
                    if( have_posts() ):
                        while(have_posts()): the_post(); 
                        get_template_part( 'template-parts/page/content', 'front' );
                        endwhile;
                    endif;
                    ?>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();