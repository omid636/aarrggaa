<?php get_header(); ?>

<div class="woocommerce row">
<div class="container">
<div class="col-md-3 col-sm-4"> 
    <?php include(TEMPLATEPATH."/blog-sidebar.php");?> 
</div>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="col-md-9 col-sm-8 col-xs-12 main-content">
<div>

<div class="col-md-8  main-content-main">
<div class="blog-post-top"><h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<ul class="index-post-det">
<li><span class="fa fa-edit"></span> <?php the_time('j F  Y') ?></li>
<li><span class="fa fa-edit"></span> نوشته شده توسط <?php the_author();?></li>
<li><span class="fa fa-eye"></span> بازدید: <?php echo getPostViews(get_the_ID()); ?> </li>
</ul>
</div>

<div class="index-post-entry">
    <?php the_excerpt(); ?>
</div>
</div>
<div class="col-md-4 blog-index-img">
<a class="thumb" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php echo the_post_thumbnail( 'thumbnail' ); ?>
</a>

</div>

</div>
   
    </div>
 <?php endwhile; else: ?><?php endif; ?>
 <div class="wp-pagenavi" align="center">
<?php wp_pagenavi(); ?>
</div>

</div>




</div>

<?php get_footer(); ?>