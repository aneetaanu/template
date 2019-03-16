<?php get_header(); ?>
<div class="blog_banner" <?php if(get_field('banner_image')){
  echo 'style="background-image:url('.get_field('banner_image').')"';
} ?>>
<div class="container max_width">
<div class="blogbanner_box animate fadeInRight four" "="">
<?php if(get_field('sub_title')) { ?>
<h2><?php echo  get_field('sub_title'); ?></h2>
<?php } ?>
<ul>
<?php if(get_field('amazon')) { ?>
<li><a href="<?php echo get_field('amazon'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/blog-img2.png" alt="img"></a></li>
<?php } ?>
<?php if(get_field('amazon')) { ?>
<li><a href="<?php echo get_field('walmart'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/blog-img1.png" alt="img"></a></li>
<?php } ?>
</ul>
</div>
</div>
</div>

<!--------------------- Content  --------------------->
<div class="blog_article">
<div class="container max_width">
<div class="row">
<div class="col-sm-9">
<h1><?php the_title(); ?></h1>
<?php if(have_posts()) { ?>	
<?php while(have_posts()) { the_post(); ?>
<h4>Posted on <?php echo get_the_date('d M Y'); ?></h4>
<?php if ( has_post_thumbnail() ) {
 $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
}
if(get_field('upload_article_image')) {
  $img_url = get_field('upload_article_image');
}else{
  $img_url = $feat_image_url;
}
?>
<img src="<?php echo $img_url; ?>" class="img-fluid img" alt="<?php the_title(); ?>">
	<?php } ?>
<?php the_content(); ?>
<div class="form_section">
	<?php comments_template(); 


?>
</div>
	<?php } ?>
</div>
<div class="col-sm-3">
	
<?php get_sidebar(); ?>
	
</div>
</div>
</div>
</div>
<?php get_footer();?>