<?php get_header(); ?>
<div class="row">
	<div class="container home-top-slide">
			<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<div class="slidepost">
				<a class="slideimg" href="<?php the_permalink() ?>"><?php echo the_post_thumbnail( 'featured-thumbnail' ); ?></a>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			</div>
        <?php 
        endwhile;
        wp_reset_postdata();
        ?> 	
	</div>
</div>

<div class="row home-sardabir">
 <div class="title"><span class="right">//</span>منتخب سردبیر<span class="left">//</span></div>
	<ul class="sardabir-slider">
      <?php $args = array(
		'post_type' => 'post',
		'category__in' => '1',
		'posts_per_page' => 10,);
		$arr_posts = new WP_Query( $args );
		if ( $arr_posts->have_posts() ) : while ( $arr_posts->have_posts() ) :	$arr_posts->the_post();	?>

          <li class="content">
            <div class="thumb">
                <a class="slideimg" href="<?php the_permalink(); ?>">
                <?php echo featured_image_thumb(); ?>
                </a>                      
            </div>
              <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
          </li>
          <?php endwhile; endif; wp_reset_query(); ?>
        </ul>
</div>

<div class="row home-sardabir">
 <div class="title"><span class="right">//</span>دانش و فناوری<span class="left">//</span></div>
	<ul class="sardabir-slider">
      <?php $args = array(
		'post_type' => 'post',
		'category__in' => '1',
		'posts_per_page' => 10,);
		$arr_posts = new WP_Query( $args );
		if ( $arr_posts->have_posts() ) : while ( $arr_posts->have_posts() ) :	$arr_posts->the_post();	?>

          <li class="content">
            <div class="thumb">
                <a class="slideimg" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php echo featured_image_thumb(); ?>
                </a>                      
            </div>
              <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
          </li>
          <?php endwhile; endif; wp_reset_query(); ?>
        </ul>
</div>

<div class="row">
	<div class="container home-content">
		<div class="col-sm-2 right-col">
			<div class="boxsh inner">
				SSSSSSSSSS
			</div>
		</div>
		<div class="col-sm-7 main">
			<div class="boxsh inner hbox1">
				<div class="row box-detail">
					<div class="title"><span>سبک زندگی</span></div>
					<a class="archive" href=""><i class="fa fa-plus"></i> آرشیو مطالب</a>
				</div>
				<div class="row">
					<div class="col-sm-6 first">
						<?php $args = array(
						'post_type' => 'post',
						'category__in' => '1',
						'posts_per_page' => 1,);
						$arr_posts = new WP_Query( $args );
						if ( $arr_posts->have_posts() ) : while ( $arr_posts->have_posts() ) :	$arr_posts->the_post();	?>

				          <div class="content">
				            <div class="thumb">
				                <?php echo featured_image_thumb(); ?>                    
				            </div>
				              <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				              	<?php the_excerpt() ?>
				              <div class="detail">
				              	<div class="data"><span><i class="icon-user"></i> <?php the_author();?> </span> <span><i class="icon-calendar"></i> <?php the_time('j F  Y') ?> </span> </div>
				              	<div class="more">
				              		<a href="">ادامه <i class="fa fa-arrow-left"></i></a>
				              	</div>
				              </div>
				          </div>
				          <?php endwhile; endif; wp_reset_query(); ?>
					</div>
					<div class="col-sm-6 others">
						<?php $args = array(
						'post_type' => 'post',
						'category__in' => '1',
						'posts_per_page' => 4,
						'offset' => 1,);
						$arr_posts = new WP_Query( $args );
						if ( $arr_posts->have_posts() ) : while ( $arr_posts->have_posts() ) :	$arr_posts->the_post();	?>

				          <div class="content row">
				            <div class="thumb">
				                <?php echo the_post_thumbnail('thumbnail'); ?>                    
				            </div>
				              <div class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>

				              <div class="detail">
				              	<div class="data"><span><i class="icon-calendar"></i> <?php the_time('j F  Y') ?> </span> </div>
				              </div>
				          </div>
				          <?php endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>
			<div class="boxsh inner hbox1">
				<div class="row box-detail">
					<div class="title"><span>سبک زندگی</span></div>
					<a class="archive" href=""><i class="fa fa-plus"></i> آرشیو مطالب</a>
				</div>
				<div class="row">
					<div class="col-sm-6 first">
						<?php echo last_article(1); ?>
					</div>
					<div class="col-sm-6 others">
						<?php $args = array(
						'post_type' => 'post',
						'category__in' => '1',
						'posts_per_page' => 4,
						'offset' => 1,);
						$arr_posts = new WP_Query( $args );
						if ( $arr_posts->have_posts() ) : while ( $arr_posts->have_posts() ) :	$arr_posts->the_post();	?>

				          <div class="content row">
				            <div class="thumb">
				                <?php echo the_post_thumbnail('thumbnail'); ?>                    
				            </div>
				              <div class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>

				              <div class="detail">
				              	<div class="data"><span><i class="icon-calendar"></i> <?php the_time('j F  Y') ?> </span> </div>
				              </div>
				          </div>
				          <?php endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>
			
			<?php last_article(1); ?>
		</div>
		<div class="col-sm-3 left-col">
		<div class="boxsh inner">
			SSSSSSSSSSSS
		</div>
			
		</div>
	</div>
</div>



<div class="row" style="height: 200px"></div>
<?php get_footer(); ?>