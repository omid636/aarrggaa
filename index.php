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
                <a class="slideimg" href="<?php the_permalink(); ?>">
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
		
		<div class="col-sm-7 col-sm-push-2 main">
			<div class="boxsh inner hbox1">
				<div class="row box-detail">
					<div class="title"><span>سبک زندگی</span></div>
					<a class="archive" href=""><i class="fa fa-plus"></i> آرشیو مطالب</a>
				</div>
				<div class="row">
					<div class="row col-md-6 first">
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
					<div class="col-md-6 others">
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
					<div class="row col-md-6 first">
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
					<div class="col-md-6 others">
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

<div class="row week-top">
<div class="title"><span>برگزیده هفته</span></div>
	<ul class="content">
      <?php $args = array(
		'post_type' => 'post',
		'category__in' => '1',
		'posts_per_page' => 6,);
		$arr_posts = new WP_Query( $args );
		if ( $arr_posts->have_posts() ) : while ( $arr_posts->have_posts() ) :	$arr_posts->the_post();	?>

          <li class="col-md-2 col-sm-3 col-xs-6 inner">
            <div class="thumb">
            	<div class="image">
                <a class="slideimg" href="<?php the_permalink(); ?>">
                <?php echo featured_image_thumb(); ?>
                </a>
                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3> 
                 </div>
                <div class="detail">
				              	<div class="data row"><span class="user"><i class="icon-user"></i> <?php the_author();?> </span> <span class="calendar"><i class="icon-calendar"></i> <?php the_time('j F  Y') ?> </span> </div>
				              </div>                    
            </div>
              
          </li>
          <?php endwhile; endif; wp_reset_query(); ?>
        </ul>
</div>

<?php get_footer(); ?>