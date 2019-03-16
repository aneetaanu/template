<div class="color_line"><img src="<?php bloginfo('template_url'); ?>/images/color-line.jpg" class="img-fluid" alt="img"></div>
<!------ footer start ---->
<?php global $redux_demo; ?>
<footer>
<div class="container">
<div class="row">
	<?php if($redux_demo['enable_disable']) {   ?>
<div class="col-sm-2"><a href="<?php bloginfo('url'); ?>">
	<?php if($redux_demo['logo_1234']['url']) { ?>
<img src="<?php echo $redux_demo['logo_1234']['url']; ?>" alt="<?php get_bloginfo(); ?>">
<?php } else { ?><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php get_bloginfo(); ?>"> <?php } ?></a></div> <?php } ?>
	<?php if ( is_active_sidebar( 'footer' ) ) : ?>
<div class="col-sm-8">
<?php dynamic_sidebar('footer'); ?>
</div> <?php endif ; ?>
<div class="col-sm-2">
<?php if($redux_demo['enable_disable']) {   ?>
<div class="social">
	
<?php if($redux_demo['facebook_url'] !="") { ?>
	<a href="<?php echo $redux_demo['facebook_url']; ?>"><i class="fa fa-facebook"></i></a>
		
<?php } ?>        

       

<?php if($redux_demo['link_url'] !="") { ?>
	<a href="<?php echo $redux_demo['link_url']; ?>"><i class="fa fa-twitter"></i></a>
		
<?php } ?>        

<?php if($redux_demo['twitter_url'] !="") { //appointment_url ?>
	<a href="<?php echo $redux_demo['twitter_url']; ?>"><i class="fa fa-linkedin-square"></i></a>
		
<?php } ?>        

                       
</div>
    <?php } ?>

</div>
</div>
	<?php  if($redux_demo['copy_rights'] !=='') { ?>
<div class="copyright">
<p><?php echo $redux_demo['copy_rights'];  ?></p>
	<?php } ?>
<?php dynamic_sidebar('footer-privacy'); ?>
</div>
</div>
</footer>
<?php wp_footer(); ?>
<!------ footer end ---->

<!-- Bootstrap core JavaScript -->

<script src="<?php bloginfo('template_url');?>/js/jquery.min.js"></script>

<script src="<?php bloginfo('template_url');?>/js/holder.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/popper.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/custom.js"></script> 
<script src="<?php bloginfo('template_url');?>/js/owl.carousel.js"></script>
<script>

        jQuery('#navbarCollapse ul li a').addClass('nav-link');
        jQuery('ul.pagination a').addClass('page-link');
        jQuery('#menu-sidebar-menu').addClass('post_links');
</script>

<script type="text/javascript">

var portfolioJSON = [{"0":"Mother's Ring Builder","4":"2013-03-25 20:00:50","1":"2013\/03\/mothers.jpg","3":"191"},{"0":"BCI Rentals - Custom CMS","4":"2012-10-28 19:24:24","1":"2013\/03\/bci.jpg","3":"201"},{"0":"Schoolwires Creative Services","4":"2012-03-07 03:07:55","1":"2012\/03\/creative.jpg","2":"#FFFFFF","3":"82"},{"0":"Self-Service","4":"2012-03-06 16:43:34","1":"2012\/03\/selfservice11.jpg","2":"#669900","3":"4"},{"0":"Portfolio: \"Infinite Scolling\" Wall","4":"2012-03-05 16:44:51","1":"2012\/03\/portfolio1.jpg","2":"#304B89","3":"176"}];
var featuresTimer;
var resizeTimer;
var hoverTimer;
</script>
<script>
		
				  $('#owl-demo').owlCarousel({
					margin:0,
					nav:true,
                    loop:true,
					dots : true,
					autoplay: true,
					responsiveClass:true,
					animateOut: 'slideOutUp',
					animateIn: 'slideInUp',
					responsive:{
						0:{
							items:1,
						},
						420:{
							items:2,
						},
						600:{
							items:3,
						},
						1000:{
							items:3,
						},
						1200:{
							items:3,
										
						},
					}
				});
                
                  jQuery(document).ready(function($){
	     jQuery('.nav_tabs ul.nav-tabs li').click(function(){
		    jQuery('.tab-content .tab-pane').removeClass('active');
			 var href = jQuery(this).find('a').attr('href');
			 jQuery(href).addClass('active');
		 });
	  });

jQuery(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    jQuery('html, body').animate({
        scrollTop: jQuery($.attr(this, 'href')).offset().top - 30
    }, 1000);
});

$(document).ready(function () {

  $("a.nav-link.dropdown-toggle").mouseenter(function(){
    $("ul.dropdown-menu ").show(); 
  });

  $("ul.dropdown-menu").mouseleave(function(){
    $("ul.dropdown-menu ").hide(); 
  });
});
	
$(window).resize(function(){ 
     $($(window).width() < 992){
		 if($('ul#dropdown09 li').hasClass('menu-item-has-children')){
			 $(this).find('ul.dropdown-menu').slideToggle(2000);
		 }
	 }
});
	
							
							
							
</script>


</body>
</html>