<?php get_header(); ?>

<div class="row">
  <div class="container home-content">
    
    <div class="col-sm-7 col-sm-push-2 main single-main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="boxsh inner">
        <div class="post-title"><h1><?php the_title(); ?></h1></div>

<ul class="single-detail">
<li><span class="icon-user"></span> <?php the_author();?></li>
<li><span class="icon-calendar"></span> <?php the_time('j F  Y') ?></li>
<!-- <li><span class="icon-layers"></span> <?php the_category(' , ')?></li> -->
<li><span class="icon-bubbles"></span> <?php comments_popup_link('0', '1 ', '% '); ?></li>
</ul>
<?php 
 if( has_excerpt() ){
        ?>
        <div class="excerpt">
<span>چکیده : </span>
<?php the_excerpt() ?>
</div>
<?php
    }
 ?>


<div class="row index-post-entry">
  <?php the_content(''); ?>
  <div class="post-tag col-xs-12">
<span class="title">برچسب :</span>
    <?php the_tags(__('','kubrick'), ' , ', '<br />'); ?>
</div>
</div>

      </div>
      <?php endwhile; else: ?><?php endif; ?>


        <div class="row rel-post boxsh">
          <div class="box-detail">
            <div class="title"><span>مطالب مرتبط</span></div>
          </div>
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

              <li class="col-sm-4 col-xs-6">
                <div class="thumb">
                  <div class="image">
                    <a href="<?php the_permalink(); ?>">
                    <?php echo featured_image_thumb(); ?>
                    </a>
                    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3> 
                     </div>                   
                </div>
                  
              </li>
              <?php
                      }
                     ;
                  }
              }
              $post = $backup;
              wp_reset_query();
              ?>

        </ul>
      </div>

      <div class="row rel-post yektanet boxsh">
          <div class="box-detail">
            <div class="title"><span>مطالب پیشنهادی از سراسر وب</span></div>
          </div>
         
      </div>


      <div class="row rel-post hot boxsh">
          <div class="box-detail">
            <div class="title"><span>مطالب داغ</span></div>
          </div>
          <ul>
            <?php $args = array(
    'post_type' => 'post',
    'category__in' => '1',
    'posts_per_page' => 6,);
    $arr_posts = new WP_Query( $args );
    if ( $arr_posts->have_posts() ) : while ( $arr_posts->have_posts() ) :  $arr_posts->the_post(); ?>

              <li class="col-sm-4 col-xs-6">
                <div class="thumb">
                  <div class="image">
                    <a href="<?php the_permalink(); ?>">
                    <?php echo featured_image_thumb(); ?>
                    </a>
                    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3> 
                     </div>                   
                </div>
                  
              </li>
              <?php endwhile; endif; wp_reset_query(); ?>

        </ul>
      </div>

      <div class="row rel-post webgardi boxsh">
          <div class="box-detail">
            <div class="title"><span>وبگردی</span></div>
          </div>
         
      </div>









<div class="col-xs-12 comments-template boxsh" id="comments">
<div class="box-detail">
            <div class="title"><span>دیدگاه های مطلب</span></div>
          </div>
    <?php comments_template(); ?>
    </div>



    </div>
    <div class="col-sm-2 col-sm-pull-7 col-xs-5 right-col">
      <div class="boxsh inner">
        <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('right-side-ads') ) : ?>
        <?php endif; ?>
      </div>
      <div class="boxsh inner medic-box">
        <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('medic-box') ) : ?>
        <?php endif; ?>


        <ul class="medic">
        <?php if( get_option('arga_dr1_image') ): ?>
          <li>
            <img src="<?php $dr1_image = get_option('arga_dr1_image'); echo $dr1_image; ?>" alt="<?php $dr1_name = get_option('arga_dr1_name'); echo $dr1_name; ?>">
            <span>
              <a href="<?php $dr1_link = get_option('arga_dr1_link'); echo $dr1_link; ?>">
                <?php $dr1_name = get_option('arga_dr1_name'); echo $dr1_name; ?>
              </a>
            </span>
          </li>
        <?php endif; ?>

        <?php if( get_option('arga_dr2_image') ): ?>
          <li>
            <img src="<?php $dr2_image = get_option('arga_dr2_image'); echo $dr2_image; ?>" alt="<?php $dr2_name = get_option('arga_dr2_name'); echo $dr2_name; ?>">
            <span>
              <a href="<?php $dr2_link = get_option('arga_dr2_link'); echo $dr2_link; ?>">
                <?php $dr2_name = get_option('arga_dr2_name'); echo $dr2_name; ?>
              </a>
            </span>
          </li>
        <?php endif; ?>

        <?php if( get_option('arga_dr3_image') ): ?>
          <li>
            <img src="<?php $dr3_image = get_option('arga_dr3_image'); echo $dr3_image; ?>" alt="<?php $dr3_name = get_option('arga_dr3_name'); echo $dr3_name; ?>">
            <span>
              <a href="<?php $dr3_link = get_option('arga_dr3_link'); echo $dr3_link; ?>">
                <?php $dr3_name = get_option('arga_dr3_name'); echo $dr3_name; ?>
              </a>
            </span>
          </li>
        <?php endif; ?>

        <?php if( get_option('arga_dr4_image') ): ?>
          <li>
            <img src="<?php $dr4_image = get_option('arga_dr4_image'); echo $dr4_image; ?>" alt="<?php $dr4_name = get_option('arga_dr4_name'); echo $dr4_name; ?>">
            <span>
              <a href="<?php $dr4_link = get_option('arga_dr4_link'); echo $dr4_link; ?>">
                <?php $dr4_name = get_option('arga_dr4_name'); echo $dr4_name; ?>
              </a>
            </span>
          </li>
        <?php endif; ?>

        <?php if( get_option('arga_dr5_image') ): ?>
          <li>
            <img src="<?php $dr5_image = get_option('arga_dr5_image'); echo $dr5_image; ?>" alt="<?php $dr5_name = get_option('arga_dr5_name'); echo $dr5_name; ?>">
            <span>
              <a href="<?php $dr5_link = get_option('arga_dr5_link'); echo $dr5_link; ?>">
                <?php $dr5_name = get_option('arga_dr5_name'); echo $dr5_name; ?>
              </a>
            </span>
          </li>
        <?php endif; ?>


        <?php if( get_option('arga_dr6_image') ): ?>
          <li>
            <img src="<?php $dr6_image = get_option('arga_dr6_image'); echo $dr6_image; ?>" alt="<?php $dr6_name = get_option('arga_dr6_name'); echo $dr6_name; ?>">
            <span>
              <a href="<?php $dr6_link = get_option('arga_dr6_link'); echo $dr6_link; ?>">
                <?php $dr6_name = get_option('arga_dr6_name'); echo $dr6_name; ?>
              </a>
            </span>
          </li>
        <?php endif; ?>


        <?php if( get_option('arga_dr7_image') ): ?>
          <li>
            <img src="<?php $dr7_image = get_option('arga_dr7_image'); echo $dr7_image; ?>" alt="<?php $dr7_name = get_option('arga_dr7_name'); echo $dr7_name; ?>">
            <span>
              <a href="<?php $dr7_link = get_option('arga_dr7_link'); echo $dr7_link; ?>">
                <?php $dr7_name = get_option('arga_dr7_name'); echo $dr7_name; ?>
              </a>
            </span>
          </li>
        <?php endif; ?>


        <?php if( get_option('arga_dr8_image') ): ?>
          <li>
            <img src="<?php $dr8_image = get_option('arga_dr8_image'); echo $dr8_image; ?>" alt="<?php $dr8_name = get_option('arga_dr8_name'); echo $dr8_name; ?>">
            <span>
              <a href="<?php $dr8_link = get_option('arga_dr8_link'); echo $dr8_link; ?>">
                <?php $dr8_name = get_option('arga_dr8_name'); echo $dr8_name; ?>
              </a>
            </span>
          </li>
        <?php endif; ?>

        <?php if( get_option('arga_dr9_image') ): ?>
          <li>
            <img src="<?php $dr9_image = get_option('arga_dr9_image'); echo $dr9_image; ?>" alt="<?php $dr9_name = get_option('arga_dr9_name'); echo $dr9_name; ?>">
            <span>
              <a href="<?php $dr9_link = get_option('arga_dr9_link'); echo $dr9_link; ?>">
                <?php $dr9_name = get_option('arga_dr9_name'); echo $dr9_name; ?>
              </a>
            </span>
          </li>
        <?php endif; ?>

        <?php if( get_option('arga_dr10_image') ): ?>
          <li>
            <img src="<?php $dr10_image = get_option('arga_dr10_image'); echo $dr10_image; ?>" alt="<?php $dr10_name = get_option('arga_dr10_name'); echo $dr10_name; ?>">
            <span>
              <a href="<?php $dr10_link = get_option('arga_dr10_link'); echo $dr10_link; ?>">
                <?php $dr10_name = get_option('arga_dr10_name'); echo $dr10_name; ?>
              </a>
            </span>
          </li>
        <?php endif; ?>


        </ul>

        <div>
          
        </div>
      </div>
    </div>

    <div class="col-sm-3 col-xs-7 left-col">
    <div class="boxsh inner">
      <?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar('left-side-ads') ) : ?>
      <?php endif; ?>
    </div>
    <div class="boxsh inner">
      <?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar('left-side-latest') ) : ?>
      <?php endif; ?>
    </div>
      
    </div>
  </div>
</div>
<div class="row">
  <div class="container">
    <div class="bottom-ad">
      <?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar('bottom-ad') ) : ?>
      <?php endif; ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>














































