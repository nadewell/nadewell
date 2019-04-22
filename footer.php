</div>
<footer class="site-footer">
    <div class="wrap">
        <div class="row">
            <?php   if(is_active_sidebar('footer-1')): ?>
            <div class="widget-area">
            <?php   dynamic_sidebar('footer-1'); ?>
            </div>
            <?php   endif;  ?>
            <?php   if(is_active_sidebar('footer-2')): ?>
            <div class="widget-area">
            <?php   dynamic_sidebar('footer-2'); ?>
            </div>
            <?php   endif;  ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>