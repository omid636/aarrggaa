  $(document).ready(function(){

$('.sardabir-slider').bxSlider({
          slideMargin: 0,
          autoReload: true,
          pager:false,
          breaks: [{screen:0, slides:1},{screen:320, slides:2},{screen:480, slides:3},{screen:768, slides:4},{screen:992, slides:5},{screen:1360, slides:6}]
        });
      


 
  new WOW().init();

$('.search-icon').click(function(){
    $('.fix-search').addClass("open");
});
    $('.fix-search-btn').click(function(){
    $('.fix-search').removeClass("open");
});


$(".mobile-menu-btn").click(function(){
    $('.mobile-menu-box').addClass('mobile-menu-open');
    $('body').addClass('disable-scroll')
});
$(".menu-blank").click(function(){
    $('.mobile-menu-box').removeClass('mobile-menu-open');
    $('body').removeClass('disable-scroll')
});

$('.mobile-menu li.menu-item-has-children').append( '<span class="mob-menu-slide"></span>' );

  $('.mob-menu-slide').click(function() {
  $(this).parent().toggleClass('main-menu-open');
  $(this).prev().slideToggle(300);
});

$(".comment-open span").click(function(){
    $('.comments-template').slideDown(300);
    $('.comment-open').hide();
});




      $(document).ready(function() {
        $('.left-col, .right-col')
          .theiaStickySidebar({
            additionalMarginTop: 30
          });
      });


 $(window).scroll(function () {
    var $heightScrolled = $(window).scrollTop();
    var $defaultHeight = 200;

    if ( $heightScrolled < $defaultHeight )
    {
        $('.top-sticky').removeClass("sticky")
    }
    else {
        $('.top-sticky').addClass("sticky")
    }

}); 

});


 