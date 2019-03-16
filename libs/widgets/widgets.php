<?php 
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Article Page', 'theme-slug' ),
        'id' => 'single_post',
        'description' => __( '', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
     	'after_widget'  => '</li>',
	    'before_title'  => '<h2 class="widgettitle">',
	    'after_title'   => '</h2>',
    ) );
    
     register_sidebar( array(
        'name' => __( 'Blog Page', 'theme-slug' ),
        'id' => 'blog_post',
        'description' => __( '', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
     	'after_widget'  => '</li>',
	    'before_title'  => '<h2 class="widgettitle">',
	    'after_title'   => '</h2>',
    ) );
    
}