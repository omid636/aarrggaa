<div class="row footer">
<div class="container">
  <div class="col-sm-3 footer-latest">
  <div class="widget-title"><span class="wgt-span">تازه های آرگا </span> </div>
    <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,);
            $arr_posts = new WP_Query( $args );
            if ( $arr_posts->have_posts() ) : while ( $arr_posts->have_posts() ) :  $arr_posts->the_post(); ?>

                  <div class="content row">
                    <div class="thumb">
                        <?php echo the_post_thumbnail('thumbnail'); ?>                    
                    </div>
                      <div class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
                  </div>
                  <?php endwhile; endif; wp_reset_query(); ?>
  </div>
  <div class="col-sm-3 footer-latest">
  <div class="widget-title"><span class="wgt-span">متخب سردبیر </span> </div>
    <?php $args = array(
            'post_type' => 'post',
            'category__in' => '1',
            'posts_per_page' => 4,);
            $arr_posts = new WP_Query( $args );
            if ( $arr_posts->have_posts() ) : while ( $arr_posts->have_posts() ) :  $arr_posts->the_post(); ?>

                  <div class="content row">
                    <div class="thumb">
                        <?php echo the_post_thumbnail('thumbnail'); ?>                    
                    </div>
                      <div class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
                  </div>
                  <?php endwhile; endif; wp_reset_query(); ?>
  </div>
  <div class="col-sm-3 footer-hot">
    <?php if ( !function_exists('dynamic_sidebar')
    || !dynamic_sidebar('footer-latest') ) : ?>
    <?php endif; ?>
  </div>
  <div class="col-sm-3 footer-gallery"></div>
</div>
<p id="back-top">
    <a href="#top"><span class="fa fa-angle-up"></span></a>
</p>
</div>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js" type="text/javascript"></script>

<script>
$(document).ready(function(){
  $("#back-top").hide(); 
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
        $('#back-top').fadeIn();
      } else {
        $('#back-top').fadeOut();
      }
    });
    $('#back-top a').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });
});
</script>
<?php $google_analytics = get_option('zibazin_google-analytics'); echo $google_analytics; ?>
</body>

</html>
