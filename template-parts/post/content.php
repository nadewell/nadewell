<article id="<?php the_ID(); ?>" <?php post_class( the_ID() ); ?>>
    <header class="entry-header">
		<div class="entry-meta">
            <span class="screen-reader-text">Posted on</span> 
            <a href="<?php the_permalink(); ?>" rel="bookmark">
                <time class="entry-date published" datetime="<?php get_the_time( $format, $post ); ?>"><?php the_date('F j, Y'); ?></time>
                <time class="updated" datetime="<?php the_modified_time( $d ); ?>"><?php the_modified_date( 'F j, Y' ); ?></time></a>
            </div><!-- .entry-meta -->
            <h3 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h3>	
    </header>
    <div class="entry-content">
		<figure class="wp-caption alignnone">
            <?php 
                if( has_post_thumbnail() ):
                    the_post_thumbnail();
                endif;
            ?>
        <p><?php the_excerpt(); ?></p>
	</div>
</article>