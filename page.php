<?php get_header(); ?>

<div class="woocommerce row">
<div class="container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="widget-title page-title"><span><?php the_title(); ?></span></div>
<?php the_content(''); ?>
<?php endwhile; else: ?><?php endif; ?>
</div>
</div>


<?php get_footer(); ?>