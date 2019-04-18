<?php 

get_header();

$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_The_ID() ), 'full' );
$featured_image_src = $featured_image[0];

?>
<div class="site-content-contain">
    <div id="content" class="site-content">
        <div class="wrap">
            <header class="page-header banner" style="background-image:url(<?php echo $featured_image_src; ?>);">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </header>
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                <?php
                if( have_posts() ):
                    while(have_posts()): the_post(); 
                    get_template_part( 'template-parts/post/content', 'single' );
                    endwhile;
                endif;
                ?>
                </main>
            </div>
            <div id="secondary" class="sidebar">
            <?php   if(is_active_sidebar('sidebar')): ?>
            <div class="widget-area">
            <?php   dynamic_sidebar('sidebar'); ?>
            </div>
            <?php   endif;  ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();