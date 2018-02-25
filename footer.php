<div class="row footer">
<div class="container main">
  <div class="col-md-3 col-sm-4 footer-latest">
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
  <div class="col-md-3 col-sm-4 footer-latest">
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
  <div class="col-md-3 col-sm-4 footer-hot">
    <div class="widget-title"><span class="wgt-span">مطالب داغ </span> </div>
    <ul>
    <?php $args = array(
            'post_type' => 'post',
            'category__in' => '1',
            'posts_per_page' =>8,);
            $arr_posts = new WP_Query( $args );
            if ( $arr_posts->have_posts() ) : while ( $arr_posts->have_posts() ) :  $arr_posts->the_post(); ?>
                  <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
                
                  <?php endwhile; endif; wp_reset_query(); ?>
                  </ul>
  </div>
  <div class="col-md-3 footer-gallery hide-sm">
    <div class="widget-title"><span class="wgt-span">آخرین عکسهای گالری </span> </div>
    <ul>
    <?php $args = array(
            'post_type' => 'post',
            'category__in' => '1',
            'posts_per_page' =>12,);
            $arr_posts = new WP_Query( $args );
            if ( $arr_posts->have_posts() ) : while ( $arr_posts->have_posts() ) :  $arr_posts->the_post(); ?>

                  
                  <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php echo the_post_thumbnail('thumbnail'); ?></a></li>
                  
                  <?php endwhile; endif; wp_reset_query(); ?>
</ul>
  </div>
</div>
<div class="container bottom">
  <div class="col-sm-3 logo">
    <a href="http://arga-mag.com"><img src="<?php bloginfo('template_directory'); ?>/images/footer-logo.png" alt="مجله آرگا"></a>
  </div>
  <div class="col-sm-6 designer">
    طراحی سایت: رایاطرح (شرکت عصر رایانه)
  </div>
  <div class="col-sm-3 socials">
    <ul>
      <li><a href=""><i class="icon-cursor"></i></a></li>
      <li><a href=""><i class="icon-social-instagram"></i></a></li>
      <li><a href=""><i class="icon-social-google"></i></a></li>
      <li><a href=""><i class="icon-social-twitter"></i></a></li>
      <li><a href=""><i class="icon-social-facebook"></i></a></li>
    </ul>
  </div>
</div>
<p id="back-top">
    <a href="#top"><span class="fa fa-angle-up"></span></a>
</p>
</div>
<div class="row copyright">
  <div class="container">
    <div class="col-sm-6 copy">
      استفاده از مطالب مجله آرگا تنها با ذکر نام و درج لینک فعال به مطلب مجاز است.
    </div>
    <div class="col-sm-6 links">
      <ul>
        <li><a href="http://arga-mag.com/">صفحه اصلی</a></li>
        <li><a href="">پذیرش آگهی</a></li>
        <li><a href="http://arga-mag.com/%d8%aa%d9%85%d8%a7%d8%b3-%d8%a8%d8%a7-%d9%85%d8%a7">تماس با ما</a></li>
      </ul>
    </div>
  </div>
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
