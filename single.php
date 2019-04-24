<?php 

get_header();

$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_The_ID() ), 'full' );
$featured_image_src = $featured_image[0];

?>
<div class="site-content-contain">
    <div id="content" class="site-content">
        <header class="page-header banner" style="background-image:url(<?php echo $featured_image_src; ?>);">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header>
        <div class="wrap">
            <div class="row">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                    <?php
                    if( have_posts() ):
                        while(have_posts()): the_post(); 
                        get_template_part( 'template-parts/post/content', 'single' );
                        endwhile;
                        the_post_navigation(array(
                            'prev_text'                  => __( '<strong>previous</strong>: %title' ),
                            'next_text'                  => __( '%title :<strong>next</strong>' ),
                        ));
                    endif;
                    ?>
                    </main>
                </div>
                <div id="secondary" class="sidebar">
                <?php   if(is_active_sidebar('sidebar')): ?>
                <div class="widget-area">
                <div class="author-box">
                    <div class="author-avatar">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                    </div>
                    <div class="author-meta">
                        <h4 class="author-title"><?php the_author(); ?></h4>
                        <p class="author-description"><?php echo get_the_author_meta('description'); ?></p>
                        <div class="author-links">
                            <a class="social-links email" href="mailto:<?php echo get_the_author_meta('user_email') ?>" target="_blank"><i class="far fa-envelope"></i></a>
                            <a class="social-links facebook" href="<?php echo get_the_author_meta('facebook') ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-links instagram" href="<?php echo get_the_author_meta('instagram') ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="social-links youtube" href="<?php echo get_the_author_meta('youtube') ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <?php   dynamic_sidebar('sidebar'); ?>
                </div>
                <?php   endif;  ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();