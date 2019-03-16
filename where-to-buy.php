<?php 
/*
*
Template Name: Where To Buy
*/ get_header(); ?>
<div class="where_to_buy">
<?php if(have_posts()) { while(have_posts()) { the_post(); ?>
<?php the_content(); ?>
<?php } } ?>
</div>
<?php get_footer(); ?>