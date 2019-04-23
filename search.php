<?php get_header(); ?>

<div class="site-content-contain">
    <div id="content" class="site-content">
        <header class="page-header banner">
                <h2 class="page-title"><?php wp_title('', true, ''); ?></h2>
            </header>
        <div class="wrap">
            <div class="row">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                    <?php
                    if( have_posts() ):
                        while(have_posts()): the_post(); 
                        get_template_part( 'template-parts/post/content' );
                        endwhile;
                        paginate_links(array(
                            'base'               => '%_%',
                            'format'             => '?paged=%#%',
                            'total'              => 1,
                            'current'            => 0,
                            'show_all'           => false,
                            'end_size'           => 1,
                            'mid_size'           => 2,
                            'prev_next'          => true,
                            'prev_text'          => __('Previous'),
                            'next_text'          => __('Next'),
                            'type'               => 'plain',
                            'add_args'           => false,
                            'add_fragment'       => '',
                            'before_page_number' => '',
                            'after_page_number'  => ''
                        ));
                    endif;
                    ?>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();