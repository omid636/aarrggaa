<?php

add_action('init','propanel_of_options');

if (!function_exists('propanel_of_options')) {
function propanel_of_options(){

//Theme Shortname
$shortname = "zibazin";


//Populate the options array
global $tt_options;
$tt_options = get_option('of_options');


//Access the WordPress Pages via an Array
$tt_pages = array();
$tt_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($tt_pages_obj as $tt_page) {
$tt_pages[$tt_page->ID] = $tt_page->post_name; }
$tt_pages_tmp = array_unshift($tt_pages, "Select a page:"); 


//Access the WordPress Categories via an Array
$tt_categories = array();  
$tt_categories_obj = get_categories('hide_empty=0');
foreach ($tt_categories_obj as $tt_cat) {
$tt_categories[$tt_cat->cat_ID] = $tt_cat->cat_name;}
$categories_tmp = array_unshift($tt_categories, "Select a category:");


//Sample Array for demo purposes
$sample_array = array("1","2","3","4","5");


//Sample Advanced Array - The actual value differs from what the user sees
$sample_advanced_array = array("image" => "The Image","post" => "The Post"); 


//Folder Paths for "type" => "images"
$sampleurl =  get_template_directory_uri() . '/admin/images/sample-layouts/';










/*-----------------------------------------------------------------------------------*/
/* Create The Custom Site Options Panel
/*-----------------------------------------------------------------------------------*/
$options = array(); // do not delete this line - sky will fall

$options[] = array( "name" => __('درباره قالب','framework_localize'),
			"type" => "heading");

$options[] = array( "name" => __('درباره قالب','framework_localize'),
			"desc" => "",
			"id" => $shortname."_sample_callout",
			"std" => "زیبازین یک قالب فروشگاهی ووکامرس می باشد که بر ارساس HTML5 ، CSS3 و Bootstrap طراحی شده است.
			<br>
			نام قالب: زیبازین
			<br>
			آدرس اینترنتی: <a target='_blank' href='http://www.rayatarh.com'> www.rayatarh.com</a>
			<br>
			ورژن: 1 - شهریور 1396
			<br>
			آدرس اینترنتی طراح: <a target='_blank' href='http://www.rayatarh.com'> www.rayatarh.com</a>
			",
			"type" => "info");

$options[] = array( "name" => __('تنظیمات اصلی','framework_localize'),
			"type" => "heading");


$options[] = array( "name" => __('فاو آیکون','framework_localize'),
			"desc" => __('آیکونی که در نوار آدرس مرورگر مشاده میشود.','framework_localize'),
			"id" => $shortname."_favicon",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('لوگوی فوتر','framework_localize'),
			"desc" => __('لوگوی مورد نظر خود را اینجا آپلود کنید.','framework_localize'),
			"id" => $shortname."_footer-logo",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('توضیحات درباره زیبازین صفحه اصلی','framework_localize'),
			"desc" => "توضیحات صفحه اصلی که در بالای خبرنامه نوشته میشود",
			"id" => $shortname."_home-bio",
			"std" => "",
			"type" => "textarea");

$options[] = array( "name" => __('بیوگرافی در قسمت فوتر','framework_localize'),
			"desc" => "بیوگرافی از کسب و کارتان که در قسمت فوتر نشان داده میشود..",
			"id" => $shortname."_footer-bio",
			"std" => "",
			"type" => "textarea");


$options[] = array( "name" => __('وبگذر','framework_localize'),
			"desc" => "کد شمارنده وبگذر را اینجا وارد کنید.",
			"id" => $shortname."_webgozar",
			"std" => "",
			"type" => "textarea");

$options[] = array( "name" => __('گوگل آنالیتیک','framework_localize'),
			"desc" => "کد گوگل آنالیتیک سایت را اینجا وارد نمایید.",
			"id" => $shortname."_google-analytics",
			"std" => "",
			"type" => "textarea");


$options[] = array( "name" => __('اسلایدر صفحه اصلی','framework_localize'),
			"type" => "heading");

$options[] = array( 
			"desc" => __('تصویر اسلایدر 1','framework_localize'),
			"id" => $shortname."_slide1",
			"std" => "",
			"type" => "upload");
$options[] = array( 
			"desc" => __('لینک اسلایدر 1','framework_localize'),
			"id" => $shortname."_slide1link",
			"std" => "",
			"type" => "text");

$options[] = array( 
			"desc" => __('تصویر اسلایدر 2','framework_localize'),
			"id" => $shortname."_slide2",
			"std" => "",
			"type" => "upload");
$options[] = array( 
			"desc" => __('لینک اسلایدر 1','framework_localize'),
			"id" => $shortname."_slide2link",
			"std" => "",
			"type" => "text");

$options[] = array( 
			"desc" => __('تصویر اسلایدر 3','framework_localize'),
			"id" => $shortname."_slide3",
			"std" => "",
			"type" => "upload");
$options[] = array( 
			"desc" => __('لینک اسلایدر 3','framework_localize'),
			"id" => $shortname."_slide3link",
			"std" => "",
			"type" => "text");





$options[] = array( "name" => __('شبکه های اجتماعی','framework_localize'),
			"type" => "heading");

$options[] = array( 
			"desc" => __('لینک صفحه فیسبوک','framework_localize'),
			"id" => $shortname."_facebooklink",
			"std" => "",
			"type" => "text");

$options[] = array( 
			"desc" => __('لینک صفحه توییتر','framework_localize'),
			"id" => $shortname."_twitterlink",
			"std" => "",
			"type" => "text");

$options[] = array( 
			"desc" => __('لینک صفحه اینستاگرام','framework_localize'),
			"id" => $shortname."_instagramlink",
			"std" => "",
			"type" => "text");
$options[] = array( 
			"desc" => __('لینک صفحه یوتیوب','framework_localize'),
			"id" => $shortname."_youtubelink",
			"std" => "",
			"type" => "text");
$options[] = array( 
			"desc" => __('لینک صفحه گوگل پلاس','framework_localize'),
			"id" => $shortname."_gpluslink",
			"std" => "",
			"type" => "text");

$options[] = array( 
			"desc" => __('لینک صفحه پین ترست','framework_localize'),
			"id" => $shortname."_pinterestlink",
			"std" => "",
			"type" => "text");




$options[] = array( "name" => __('بنر های تبلیغاتی','framework_localize'),
			"type" => "heading");

$options[] = array( "name" => __('بنرهای صفحه اصلی','framework_localize'),
			"desc" => __('بنر شماره 1 صفحه اصلی.','framework_localize'),
			"id" => $shortname."_homeBanner1",
			"std" => "",
			"type" => "upload");
$options[] = array( 
			"desc" => __('لینک بنر شماره 1 صفحه اصلی','framework_localize'),
			"id" => $shortname."_homeBannerLink1",
			"std" => "",
			"type" => "text");
$options[] = array( 
			"desc" => __('بنر شماره 2 صفحه اصلی.','framework_localize'),
			"id" => $shortname."_homeBanner2",
			"std" => "",
			"type" => "upload");
$options[] = array( 
			"desc" => __('لینک بنر شماره 2 صفحه اصلی','framework_localize'),
			"id" => $shortname."_homeBannerLink2",
			"std" => "",
			"type" => "text");
$options[] = array( 
			"desc" => __('عنوان بنر شماره 2 صفحه اصلی','framework_localize'),
			"id" => $shortname."_homeBannerTitle2",
			"std" => "",
			"type" => "text");
$options[] = array( 
			"desc" => __('بنر شماره 3 صفحه اصلی.','framework_localize'),
			"id" => $shortname."_homeBanner3",
			"std" => "",
			"type" => "upload");
$options[] = array( 
			"desc" => __('لینک بنر شماره 3 صفحه اصلی','framework_localize'),
			"id" => $shortname."_homeBannerLink3",
			"std" => "",
			"type" => "text");
$options[] = array( 
			"desc" => __('عنوان بنر شماره 3 صفحه اصلی','framework_localize'),
			"id" => $shortname."_homeBannerTitle3",
			"std" => "",
			"type" => "text");
$options[] = array( 
			"desc" => __('بنر شماره 4 صفحه اصلی.','framework_localize'),
			"id" => $shortname."_homeBanner4",
			"std" => "",
			"type" => "upload");
$options[] = array( 
			"desc" => __('لینک بنر شماره 4 صفحه اصلی','framework_localize'),
			"id" => $shortname."_homeBannerLink4",
			"std" => "",
			"type" => "text");
$options[] = array( 
			"desc" => __('عنوان بنر شماره 4 صفحه اصلی','framework_localize'),
			"id" => $shortname."_homeBannerTitle4",
			"std" => "",
			"type" => "text");
$options[] = array( 
			"desc" => __('بنر شماره 5 صفحه اصلی.','framework_localize'),
			"id" => $shortname."_homeBanner5",
			"std" => "",
			"type" => "upload");
$options[] = array( 
			"desc" => __('لینک بنر شماره 5 صفحه اصلی','framework_localize'),
			"id" => $shortname."_homeBannerLink5",
			"std" => "",
			"type" => "text");
$options[] = array( 
			"desc" => __('بنر شماره 6 صفحه اصلی.','framework_localize'),
			"id" => $shortname."_homeBanner6",
			"std" => "",
			"type" => "upload");
$options[] = array( 
			"desc" => __('لینک بنر شماره 6 صفحه اصلی','framework_localize'),
			"id" => $shortname."_homeBannerLink6",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('بنرهای دسته بندی ها','framework_localize'),
			"desc" => __('بنر سایدبار راست','framework_localize'),
			"id" => $shortname."_cat_right_banner",
			"std" => "",
			"type" => "upload");
$options[] = array( 
			"desc" => __('لینک بنر سایدبار راست','framework_localize'),
			"id" => $shortname."_link_cat_right_banner",
			"std" => "",
			"type" => "text");

$options[] = array( 
			"desc" => __('بنر بالای دسته بندی','framework_localize'),
			"id" => $shortname."_cat_top_banner",
			"std" => "",
			"type" => "upload");
$options[] = array( 
			"desc" => __('لینک بنر بالای دسته بندی','framework_localize'),
			"id" => $shortname."_link_cat_top_banner",
			"std" => "",
			"type" => "text");


$options[] = array( "name" => __('بنرهای وبلاگ','framework_localize'),
			"desc" => __('بنر سایدربار وبلاگ.','framework_localize'),
			"id" => $shortname."_blogBanner",
			"std" => "",
			"type" => "upload");
$options[] = array( 
			"desc" => __('لینک بنر سایدبار وبلاگ','framework_localize'),
			"id" => $shortname."_blogBannerLink",
			"std" => "",
			"type" => "text");



/* Option Page 1 - All Options
$options[] = array( "name" => __('All Options','framework_localize'),
			"type" => "heading");
			
			
$options[] = array( "name" => __('Attention','framework_localize'),
			"desc" => "",
			"id" => $shortname."_sample_callout",
			"std" => "This is a callout box. This can be used to inform your clients about something important.",
			"type" => "info");
			
			
$options[] = array( "name" => __('Text Field','framework_localize'),
			"desc" => "This is a text field.",
			"id" => $shortname."_sample_text_field",
			"std" => "",
			"type" => "text");
			

$options[] = array( "name" => __('Textarea','framework_localize'),
			"desc" => "This is a textarea.",
			"id" => $shortname."_sample_text_area",
			"std" => "",
			"type" => "textarea");
			

$options[] = array( "name" => __('Image Upload','framework_localize'),
			"desc" => __('This is an image upload field.','framework_localize'),
			"id" => $shortname."_sample_image_upload",
			"std" => "",
			"type" => "upload");
					
			
$options[] = array( "name" => __('Checkbox','framework_localize'),
			"desc" => __('This is a checkbox.','framework_localize'),
			"id" => $shortname."_sample_checkbox",
			"std" => "true",
			"type" => "checkbox");
			
			
$options[] = array( "name" => __('Dropdown List','framework_localize'),
			"desc" => __('This is a dropdown list.','framework_localize'),
			"id" => $shortname."_sample_dropdown",
			"std" => "1",
			"type" => "select",
			"options" => $sample_array);
			
			
$options[] = array( "name" => __('Radio Buttons','framework_localize'),
			"desc" => __('These are radio buttons.','framework_localize'),
			"id" => $shortname."_sample_radio",
			"std" => "1",
			"type" => "radio",
			"options" => array(
				'Red Radio' => 'Red',
				'Green Radio' => 'Green',
				'Blue Radio' => 'Blue'
				));
		
			
$options[] = array( "name" => __('Image Radio Buttons','framework_localize'),
			"desc" => __('Spice up your radio buttons by using custom images.','framework_localize'),
			"id" => $shortname."_sample_image_radio",
			"std" => "option1",
			"type" => "images",
			"options" => array(
				'option1' => $sampleurl . 'sample-layout-1.png',
				'option2' => $sampleurl . 'sample-layout-2.png',
				'option3' => $sampleurl . 'sample-layout-3.png'
				));
						
				
$options[] = array( "name" => __('Color Picker','framework_localize'),
			"desc" => __('This is a color picker.','framework_localize'),
			"id" => $shortname."_sample_color_picker",
			"std" => "",
			"type" => "color");	
					

$options[] = array( "name" => __('Wordpress Page','framework_localize'),
			"desc" => __('This displays a list of every page on your website.','framework_localize'),
			"id" => $shortname."_sample_wp_pages",
			"std" => "1",
			"type" => "select",
			"options" => $tt_pages);
			
			
$options[] = array( "name" => __('Wordpress Category','framework_localize'),
			"desc" => __('This displays a list of every category on your website.','framework_localize'),
			"id" => $shortname."_sample_wp_category",
			"std" => "1",
			"type" => "select",
			"options" => $tt_categories);
			*/							
					


update_option('of_template',$options); 					  
update_option('of_shortname',$shortname);

}
}
?>