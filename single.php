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






<div class="row">
<div class="comment-open">
  <span>مشاهده دیدگاه های این مطلب</span>
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














































