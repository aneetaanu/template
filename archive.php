<?php get_header();
$category = get_queried_object();
$img_url = get_field('banner_image',$category);
?>
<div class="blog_banner" <?php if($img_url){ ?>
style="background-image:url(<?php echo $img_url; ?>)"
<?php } ?>>
<div class="container max_width">
<div class="blogbanner_box animate fadeInRight four" "="">
<h2><?php echo get_field('sub_title',$category);; ?></h2>
<ul>

<li><a href="<?php echo get_field('walmart',$category); ?>"><img src="<?php bloginfo(template_url); ?>/images/blog-img2.png" alt="img"></a></li>

<li><a href="<?php echo get_field('amazon',$category); ?>"><img src="<?php bloginfo(template_url); ?>/images/blog-img1.png" alt="img"></a></li>

</ul>
</div>
</div>
</div>


<!------------------------------- content -------------------->

<div class="blog_section">
<div class="container max_width">
<h1 class="animate fadeInDown two">
<?php if ( is_blog() ) { ?>
  Latest Article <?php// single_cat_title(); ?></h1>
<?php } else { ?>
  Latest Article
<?php } ?>
<div class="row">
<div class="col-sm-9">
<?php if(have_posts()) { ?>
	<?php while(have_posts()) { the_post(); ?>
	<div class="latest_articles">
 <?php if ( has_post_thumbnail() ) { $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );	?>
<a style="display: unset;" href="<?php the_permalink(); ?>"><img src="<?php echo $feat_image_url; ?>" class="img-fluid" alt="<?php the_title(); ?>"> </a>
	<?php } ?>
<h2><?php the_title(); ?></h2>
<h4>Posted on <?php echo get_the_date('d M Y',get_the_ID()); ?></h4>
<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>">+ Read More</a>
</div>
	<?php } ?>
<?php }else { ?>
	<div class="latest_articles">
         <h2>Post not Fount !</h2>
   </div>
<?php } ?>
<div class="pagination_row">

<?php wpbeginner_numeric_posts_nav(); ?>

</div>
</div>
<div class="col-sm-3">
	<?php get_sidebar(); ?>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>