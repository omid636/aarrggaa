<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fa" lang="fa-IR">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />

<link rel="shortcut icon" type="image/x-icon" href='<?php $favicon = get_option('arga_favicon'); echo $favicon; ?>'>
<title><?php wp_title(''); ?></title> 
<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" /> 
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider-rahisified.min.js" type="text/javascript"></script>
<?php wp_head(); ?>

</head>

<body>
<div class="mobile-menu-box">
    <div class="mobile-menu">
        <div class="row mobile-logo">
            <img src="<?php bloginfo('template_directory'); ?>/images/mobile-logo.png" alt="مجله ارگا" />
        </div>
        <div class="row cat">
            دسته ها
        </div>
   
<div class="top-mobile-menu">
    <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('mobile-menu') ) : ?>
        <?php endif; ?>
    <div class="bot-links">
      <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('mobile-bottom-menu') ) : ?>
        <?php endif; ?>  
    </div>
</div>    
    </div>
    <div class="menu-blank"></div>
</div>

<div class="fix-search">
    <div class="fix-search-btn">
        <i class="fa fa-times"></i>
    </div>
    <div class="container">
        <div class="col-xs-10 col-xs-offset-1 search-box">
            <form class="searchform" role="search" method="get" action="<?php echo esc_url( home_url( '/'  ) ); ?>">               
                <input type="search" class="search-field" placeholder="جستجو..." value="<?php echo get_search_query(); ?>" name="s" title="جستجو..." />
                <input type="submit" value="&#xf002;" />
                <input type="hidden" name="post_type" value="product" />
            </form>
        </div>  
    </div>    
</div>

<div class="row top-line">
    <div class="container">
        <div class="col-sm-4 col-xs-6 top-links">
            <ul>
                <li><a href="http://arga-mag.com/%d8%aa%d9%85%d8%a7%d8%b3-%d8%a8%d8%a7-%d9%85%d8%a7"><i class="icon-envelope"></i>تماس با ما</a></li>
                <li><a href="http://arga-mag.com/%d9%be%d8%b0%db%8c%d8%b1%d8%b4-%d8%a2%da%af%d9%87%db%8c"><i class="fa fa-bullhorn"></i>تبلیغات</a></li>
            </ul>
        </div>
        <div class="top-date">
            <?php echo jdate ('l j F  Y') ; ?>
        </div>
    </div>
</div>
<div class="row header">
    <div class="container">
        <div class="col-sm-2 top-logo">
            <a href="http://arga-mag.com/"><img src="<?php bloginfo('template_directory'); ?>/images/top-logo.png" alt="مجله آرگا" /></a>
        </div>
        <div class="col-sm-10 header-ad">
            <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('header-ad') ) : ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="row top-menu">
    <div class="container">
        <div class="col-sm-10 menu-top">
        <span class="icon-menu mobile-menu-btn"></span>
        <span class="home-icon"><a href="http://arga-mag.com/"><i class="icon-home"></i></a></span>
            <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('top-menu') ) : ?>
            <?php endif; ?>
        </div>
        <div class="col-sm-2 top-share">
            <ul>
                <li class="share-icon"><i class="icon-share"></i>
                    <div class="inner">
                        <ul>
                        <li><a href=""><span class="icon-social-instagram"></span></a></li>
                        <li><a href=""><span class="icon-cursor"></span></a></li>
                        <li><a href=""><span class="icon-social-twitter"></span></a></li>
                        <li><a href=""><span class="icon-social-facebook"></span></a></li>                
                        </ul>
                    </div>
                </li>
                <li><i class="icon-magnifier search-icon"></i></li>
            </ul>
        </div>
    </div>
</div>

<div class="row top-ad">
    <?php if ( !function_exists('dynamic_sidebar')
    || !dynamic_sidebar('top-ad') ) : ?>
    <?php endif; ?>
</div>

