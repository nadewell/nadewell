<article id="<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
		<div class="entry-meta">
            <span class="screen-reader-text">Posted on <time class="entry-date published" datetime="<?php get_the_time( $format, $post ); ?>"><?php the_date('F j, Y'); ?></time></span>
            <span class="screen-reader-text">Updated on <time class="updated" datetime="<?php the_modified_time( $d ); ?>"><?php the_modified_date( 'F j, Y' ); ?></time></span>
        </div><!-- .entry-meta -->	
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
	</div>
</article>