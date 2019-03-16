<?php get_header(); ?>

<div class="gagle_pedia_gargle">
<div class="container max_width">
	<?php if( get_field('title') ): ?>
	<?php// $value = get_field( "title" ); print_r($value); ?>
<h2 class="animate fadeInLeft three"><?php echo the_field('title'); ?></h2><?php endif; ?>
	<?php if(get_field('image')): ?>
<img src="<?php echo the_field('image');?>" class="img-fluid top animate fadeInUp one" alt="<?php the_title(); ?>"> <?php  endif;?>
	<?php if( get_field('colors') ): ?>
	<?php $value = get_field( "colors" );  ?> <?php endif ; ?>
	
</div>
</div>




<?php if(have_posts()) { while(have_posts()) { the_post(); ?>
    <?php the_content(); ?>
<?php } } ?>


<?php get_footer(); ?>

