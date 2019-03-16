<?php 
/*
*
Template Name: Contact Page
*/ get_header(); ?>
<div class="container max_width">
<?php if(have_posts()) { while(have_posts()) { the_post(); ?>
<?php the_content(); ?>
<?php } } ?>
</div>
<?php get_footer(); ?>