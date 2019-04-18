<article id="<?php the_ID(); ?>" <?php post_class( the_ID() ); ?>>
    <header class="entry-header banner">
        <h3 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h3>	
    </header>
    <div class="entry-content">
        <p><?php the_content(); ?></p>
	</div>
</article>