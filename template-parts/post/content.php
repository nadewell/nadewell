<article id="<?php the_ID(); ?>" <?php post_class( the_ID() ); ?>>
    <header class="entry-header">
        <h3 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h3>
		<div class="entry-meta">
            <span class="screen-reader-text">Posted on <time class="entry-date published" datetime="<?php get_the_time( $format, $post ); ?>"><?php the_date('F j, Y'); ?></time></span>
            <span class="screen-reader-text">Updated on <time class="updated" datetime="<?php the_modified_time( $d ); ?>"><?php the_modified_date( 'F j, Y' ); ?></time></span>
        </div><!-- .entry-meta -->	
    </header>
    <div class="entry-content">
		<figure class="wp-caption alignnone">
            <?php 
                if( has_post_thumbnail() ):
                    the_post_thumbnail();
                endif;
            ?>
        </figure>
        <p><?php the_excerpt(); ?></p>
	</div>
</article>