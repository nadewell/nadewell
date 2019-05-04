<?php get_header(); ?>

<div class="site-content-contain">
    <div id="content" class="site-content">
        <header class="page-header banner">
            <h1 class="page-title">404 Not Found</h2>
        </header>
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                    <?php get_template_part( 'template-parts/page/content', '404' ); ?>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();