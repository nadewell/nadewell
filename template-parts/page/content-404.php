<article id="<?php the_ID(); ?>" <?php post_class( the_ID() ); ?>>
    <div class="entry-content">
        <p>I think the content you're looking is not found. Use our search to find something similar.</p>
        <div class="search-box">
            <form role="search" method="get" class="search-form" action="<?php ?>">
                <label>
                    <span class="screen-reader-text">Search for:</span>
                    <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>
        </div>
	</div>
</article>