<?php get_header(); ?>

<div class="woocommerce row">
<div class="container">
    <div class="col-md-3"> 
    <?php include(TEMPLATEPATH."/blog-sidebar.php");?> 
</div>
    <div class="col-md-9">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="single-main">


<div class="blog-post-top"><h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<ul class="index-post-det">
<li><span class="fa fa-edit"></span> <?php the_time('j F  Y') ?></li>
<li><span class="fa fa-edit"></span> نوشته شده توسط <?php the_author();?></li>
<li><span class="fa fa-eye"></span> بازدید: <span class="views"><?php setPostViews(get_the_ID()); ?><?php echo getPostViews(get_the_ID()); ?></span> </li>
</ul>
</div>

<div class="index-post-entry">
  <?php the_content(''); ?>
</div>
<div class="post-tag col-xs-12">
<span class="title">برچسب :</span>
    <?php the_tags(__('','kubrick'), ' , ', '<br />'); ?>
</div>
</div>  
    <?php endwhile; else: ?><?php endif; ?>
    <div class="rel-post-div">
    <h3> پیشنهاد مطالب مرتبط:</h3>
     <ul>
<?php
$backup = $post;
$tags = wp_get_post_tags($post->ID);
if ($tags) {
  $tag_ids = array();
  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

  $args=array(
    'tag__in' => $tag_ids,
    'post__not_in' => array($post->ID),
    'showposts'=>6,
    'caller_get_posts'=>1
   );
  
  $rel_posts = new WP_Query($args);
  if( $rel_posts->have_posts() ) {
    while ($rel_posts->have_posts()) {
            $rel_posts->the_post();
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            ?>

<li class="rel_posts">
<div class="rel_link"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
</li>
<?php
        }
       ;
    }
}
$post = $backup;
wp_reset_query();
?>
  
<div class="clearer"></div>

</ul>
</div>
<div class="col-xs-12 comments-template">
    <?php comments_template(); ?>
    </div>
    </div>
</div>
</div>

<?php get_footer(); ?>