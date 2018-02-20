<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
	<div style="text-align: center"><img style="max-width:100%" src="<?php bloginfo('template_directory'); ?>/assets/img/404.jpg" alt=""></div>
	
	<div style="text-align: center">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-success">صفحه اول فروشگاه</a>
	</div>

<?php get_footer(); ?>