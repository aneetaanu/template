<!DOCTYPE html>
<?php global $redux_demo; ?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
	<?php if($redux_demo['favicon'] ['url']) {?>
<link rel="icon" href="<?php echo $redux_demo['favicon'] ['url']; ?>"> <?php } ?>
<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">

<style>
/*=================*/
.pagination .page-item.active .page-link { background:#d81b5b; color:#fff; }
.articles_row p a{ color:#000; }
#respond textarea, #respond input { background:#f2f2f2; border: 1px solid #c7c7c7; border-radius: 0px; }
#respond textarea{ width:100%}
p.comment-form-author, p.comment-form-email, p.comment-form-url { width:50%; float:left; margin: 0; }
#respond input { height: 55px; width:100%; padding:5px 15px }
#respond textarea:focus { color: #495057;  background-color:#fff;  border-color: #80bdff; outline: 0;  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
#respond input:focus{ color: #495057; background-color: #fff; border-color: #80bdff; outline: 0; box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
#respond input[type="submit"] { background: #00ab4f; margin-top: 30px; font-size: 15px; height: 42px; color: #fff; font-weight: 500; text-transform: uppercase;
border-radius: 34px; padding:6px 30px; position: relative; overflow: hidden; z-index: 1; border: none; width: auto; }
.commentlist .even .comment{ background-color:#ccddf2; } 
.commentlist .odd .comment{ background-color:#CCCCCC; }
.comments-area article header{ margin: 0 0 48px; overflow: hidden; position: relative; background-color:#55737D; color:#FFFFFF; padding: 10px; }
li.bypostauthor cite span{ color: #21759b; background-color: #f8f0cb; background-image: none; border: 1px solid #f8f0cb; border-radius: 3px; box-shadow: none; padding: 3px;
font-weight:bold; }
.reply{ float:right; margin:0 10px 10px 0; text-align:center; background-color: #55737D; border:1px solid #55737D; border-radius:3px; padding:3px; width:auto; border-radius: 23px; padding: 0px 20px; 
box-shadow: 1px 1px 2px 2px #4f4f4f; }
.comment article{ padding-bottom:2.79rem; }
a.comment-reply-link,
a.comment-edit-link { color: #FFFFFF; font-size: 13px; font-size: 0.928571429rem; line-height: 1.846153846; text-decoration:none; }
a.comment-reply-link:hover,
a.comment-edit-link:hover { color: #f6e7d7; }
a.comment-edit-link{float: left;
   background-color: transparent;
    border: 0;
    padding: 0;
    width: auto;
    box-shadow:none;
    color: #000; font-weight:500;
    margin: 0;
    line-height: 1;
    margin-right: 5px; }
	a.comment-edit-link:hover{ color:#00ab4f; }	
#cancel-comment-reply-link  { text-align:center; background-color: #55737D; border:1px solid #55737D; border-radius:3px; padding:3px; width:50px; color:#FFFFFF; box-shadow: 1px 1px 2px 2px #4f4f4f;
text-decoration:none; }
.page_content_404 { width: 100%; float: left; margin: 50px 0; text-align: center; }
.comment-form .comment-form-author{ padding-right:15px; }
.comment-form .comment-form-email{ padding-left:15px; }
.map2{ padding-left:17px !important;  }
.postid-270 .wpb_content_element{ margin-bottom:0px !important; }
.postid-270 .vc_row[data-vc-full-width]{ overflow:visible !important; }	
.postid-270 .heal_your .top	{ box-shadow: 0px 9px 37px rgba(0,0,0,0.2) !important; position: absolute;  right: 0; width:48%; height:590px; }
.postid-270 .heal_your .col-sm-6{ padding-bottom:60px; }
.main-background-img{ background-size:100%; }
	.wpb_button, .wpb_content_element, ul.wpb_thumbnails-fluid>li{ margin-bottom:0px !important; }	
	.comment-meta.commentmetadata{ display: block; float: left;  width: 100%; margin: 10px 0px; }
@media(max-width:1199.98px){	
.postid-270 .heal_your .top{ position:relative; width:100%; float:left; height:auto; }
	.postid-270 .heal_your p{ width:100%; }	
.postid-270 .heal_your { display:block; }
.postid-270 .heal_your .col-sm-6{ padding-bottom:10px; }	
.postid-270 .heal_your .row{ float:left; }
	}
@media(max-width:991.98px){
.navbar-expand-md .navbar-nav .dropdown-menu li a{
	 font-size:14px; padding:6px 10px !important; color:#333 !important;
	}		
}
	
@media(max-width:767.98px){	
.contact p { padding:0px !important; border:0px !important; }		
.contact_form .form_section{ width:100% !important; }	
.map{ width:100% !important; }	
.contact_form{ background:#d81b5b !important; }	
.form_section .vc_column-inner{ padding:0px !important; margin:0px !important; }
.map2{ padding-left:0px !important; }	
.contact .col-sm-6{ padding:0px !important; }	
.contact .vc_column-inner { padding:0px !important; }
.contact .container{  padding:0px !important;  }	
.map .vc_column-inner { padding:0px !important;  }
.ontact-id  .vc_column-inner { padding:0px !important;  }
.contact_form{ padding: 25px 15px !important; }	
.contact_form .map { padding-top:40px !important; }	
}	
@media(max-width:575.98px){
#respond textarea{ height:150px; }	
.comment-form .comment-form-author{ padding:0; width:100%; margin:0; }
.comment-form .comment-form-email{ padding:0; width:100%; margin:0; }
.comment-form p{ margin:0; }  	
#respond input{ height:45px; }
	
}	
	
/*=================*/
</style>
	<?php wp_head(); ?>
</head>

<body <?php if(!is_home()){ body_class('inner_page_setting'); }else{ body_class('homepage inner_page_setting'); }
?>>
<!------ header start ---->
<header class="min_top animate fadeInDown two">
<div class="container">
<div class="row">
<div class="col-sm-3"><a href="<?php bloginfo('url'); ?>">
	<?php if($redux_demo['logo_123']['url']) { ?>
<img src="<?php echo $redux_demo['logo_123']['url']; ?>" alt="<?php get_bloginfo(); ?>">
<?php } else { ?><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php get_bloginfo(); ?>"> <?php } ?></a></div>
<div class="col-12 col-sm-9">
<nav class="navbar navbar-expand-md navbar-dark">
<a class="navbar-brand" href="#">
		<?php if($redux_demo['logo_123']['url']) { ?>
	<img src="<?php echo $redux_demo['logo_123']['url']; ?>" alt="<?php get_bloginfo(); ?>">
	
<?php } else { ?><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php get_bloginfo(); ?>"> <?php } ?></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
	<?php wp_nav_menu(array(
    'theme_location'=>'header-menu',
    'container'=>false,
    'menu_class'=>'navbar-nav mr-auto',
    'menu_id'=>'dropdown09',
    'walker' => new BootstrapNavMenuWalker()
    )); ?>	
<div class="clearfix "></div>
	<?php if($redux_demo['head_button']) { ?>
	<?php //print_r($redux_demo); ?>
	<?php echo $redux_demo['head_button']; ?>
  <?php } ?>
</div>
</nav>  
</div>
</div>
</div>
</header>
<!------ header end ---->