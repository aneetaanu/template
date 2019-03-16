<?php get_header(); global $post; ?>
<?php if(get_field('change_layout') == "") { ?>

<?php if(have_posts()) {?>
<?php while(have_posts()) { the_post(); ?>
  <?php the_content(); ?>       
<?php } ?>
<?php }  ?>
<?php } else { ?>

<?php if(have_rows('product_content')) {  ?>
<div class="tab-content responsive">
<?php $count = 1; while(have_rows('product_content')) { the_row(); ?>
       <div class="tab-pane <?php if($count  ==1 ) echo 'active'; ?>" id="tab<?php echo $count; ?>">
<div class="container max_width">
<div class="product">
<div class="row">
<div class="col-sm-5">
<img src="<?php the_sub_field('full_image'); ?>" class="img-fluid top" alt="<?php the_sub_field('title'); ?>">
</div>
<div class="col-sm-7">
<h2><?php the_sub_field('title'); ?></h2>
<p><?php the_sub_field('description'); ?></p> 
<h3>Price <span><?php the_sub_field('price'); ?></span></h3>
<h3>Product Details</h3>
<?php the_sub_field('product_details'); ?>

</div>
</div>
</div>
</div>
</div>
<?php $count ++; } ?>
<div class="container max_width">
        <div class="buttons">
<a href="<?php the_field('walmart'); ?>" class="walmart"><img src="<?php bloginfo('template_url'); ?>/images/walmart.png" class="img-fluid" alt="img"></a>
<a href="<?php the_field('amazon'); ?>" class="amazon"><img src="<?php bloginfo('template_url'); ?>/images/amazon.png" class="img-fluid" alt="img"></a>
</div>
</div>
	</div>

<div class="nav_tabs">
<div class="container max_width">
<ul class="nav nav-tabs responsive" id="tabs">
	<?php $count1 = 1; while(have_rows('product_content')) { the_row(); ?>
<li class="<?php if($count1 > 1) { echo 'prpl';} ?>"><a href="#tab<?php echo $count1; ?>">
<span><img src="<?php the_sub_field('thumb'); ?>" class="img-fluid" alt="<?php the_sub_field('title'); ?>"></span>
<h4><?php the_sub_field('tab_title'); ?></h4>
</a></li>
	<?php $count1++; } ?>
</ul>
</div>
</div>


<?php } ?>


<?php } ?>
<?php get_footer();?>