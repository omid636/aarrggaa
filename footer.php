<div class="row footer">

<p id="back-top">
    <a href="#top"><span class="fa fa-angle-up"></span></a>
</p>
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
