<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','kubrick'); ?></p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<div id="comment-top-bg"><span><?php comments_popup_link('0', '1 ', '% '); ?></span>
دیدگاه برای این نوشته
</div>


<?php if ($comments) : ?>


	<?php foreach ($comments as $comment) : ?>

<div  class="comment">


<?php if(function_exists('get_avatar')) { echo get_avatar($comment, '50'); } ?>
<?php _e('','kubrick'); ?>

 <?php comment_author_link() ?>
<?php if ($comment->comment_approved == '0') : ?>
<?php _e('نظر منتظر تاييد مي باشد','kubrick'); ?>
			<?php endif; ?>


<small class="commentmetadata"><?php comment_date(__('j F , Y','kubrick')) ?> <?php _e(' در ','kubrick'); ?> <?php comment_time() ?> <?php edit_comment_link(__('ويرايش','kubrick'),'&nbsp;&nbsp;',''); ?></small>

<?php comment_text() ?>

</div>
	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
	
	?>


	<?php endforeach; /* end for each comment */ ?>


 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">__(Comments are closed.,'kubrick')</p>

	<?php endif; ?>
<?php endif; ?>




<?php if ('open' == $post->comment_status) : ?>




<div   class="addcomment">ارسال یک دیدگاه</div>
<div  class="main-center">

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php _e('You must be','kubrick'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e('logged in','kubrick'); ?></a> <?php _e('to post a comment.','kubrick'); ?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><?php _e('ورود با نام ','kubrick'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('خروج از اکانت','kubrick'); ?>"><?php _e('خروج','kubrick'); ?> &raquo;</a></p>

<?php else : ?>

<div class="comment-box-line"><input class="text-box" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><span>نام</span></label>

<input class="text-box" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><span>ایمیل (ضروری)<?php if ($req) echo "<?php _e('(required)','kubrick'); ?>"; ?></span></label>

<input class="text-box" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><span>وبسایت</span></label></div>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> <?php _e('You can use these tags:','kubrick'); ?> <code><?php echo allowed_tags(); ?></code></small></p>-->


<textarea class="input-comment" name="comment"  rows="1"  tabindex="4"></textarea>
<br /><br />
<input align="left" id="comment-button" name="submit" type="submit"  tabindex="5" value="<?php _e('ارسال دیدگاه','dnld'); ?>" />

<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

<?php do_action('comment_form', $post->ID); ?>

</form>


</div>
<div class="bottom-center"></div>


<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>