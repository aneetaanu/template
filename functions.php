<?php
include_once('libs/shortcode/shortcode.php');
include_once('libs/widgets/widgets.php');
include_once('libs/widgets/social-widget.php');
include_once('libs/post-type/post-type.php');
include_once('libs/pagination/pagination.php');
include_once('libs/breadcrumbs/breadcrumbs.php');


if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname(__FILE__) . '/redux-framework/ReduxCore/framework.php' ) ) {

require_once( dirname(__FILE__) . '/redux-framework/ReduxCore/framework.php' );

}
if ( !isset( $redux_owd ) && file_exists( dirname(__FILE__) . '/redux-framework/sample/barebones-config.php' ) ) {
require_once( dirname(__FILE__) . '/redux-framework/sample/sample-config.php' );
}


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      
    )
  );
}
add_action( 'init', 'register_my_menus' );

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'footer',
		'id'            => 'footer',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'footer-privacy',
		'id'            => 'footer-privacy',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


/*****************************************/
class BootstrapNavMenuWalker extends Walker_Nav_Menu {
	
	function start_lvl( &$output, $depth = 0, $args = array() ) {
 
		$indent = str_repeat( "\t", $depth );
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output	.= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\" >\n";
 
}
 
function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
 
	$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	 
	$li_attributes = '';
	$class_names = $value = '';
	 
	$classes = empty( $item->classes ) ? array() : (array) $item->classes;
	// managing divider: add divider class to an element to get a divider before it.
	$divider_class_position = array_search('divider', $classes);
	if($divider_class_position !== false){
	$output .= "<li class=\"divider\"></li>\n";
	unset($classes[$divider_class_position]);
	}
	$classes[] = ($args->has_children) ? 'dropdown' : '';
	$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
	$classes[] = 'nav-item menu-item-' . $item->ID;
	if($depth && $args->has_children){
	$classes[] = 'dropdown-submenu';
}
 
 
	$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
	$class_names = ' class="' . esc_attr( $class_names ) . '"';
	 
	$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
	$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
	 
	$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
	 
	$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
	$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
	$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
	$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
	$attributes .= ($args->has_children) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown"' : ''; 
	 
	$item_output = $args->before;
	$item_output .= '<a'. $attributes .'>';
	$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			
			// add support for menu item title
			if (strlen($item->attr_title)>2) {
	      		$item_output .= '<h3 class="tit">' . $item->attr_title . '</h3>';}
			// add support for menu item descriptions
			if (strlen($item->description)>2) {
	      		$item_output .= '</a> <span class="sub">' . $item->description . '</span>';}
	$item_output .= (($depth == 0 || 1) && $args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
	$item_output .= $args->after;
	 
	 
	$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}
 
function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
	//v($element);
	if ( !$element )
	return;
	 
	$id_field = $this->db_fields['id'];
	 
	//display this element
	if ( is_array( $args[0] ) )
	$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
	else if ( is_object( $args[0] ) )
	$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
	$cb_args = array_merge( array(&$output, $element, $depth), $args);
	call_user_func_array(array(&$this, 'start_el'), $cb_args);
	 
	$id = $element->$id_field;
	 
	// descend only when the depth is right and there are childrens for this element
	if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
	 
	foreach( $children_elements[ $id ] as $child ){
	 
	if ( !isset($newlevel) ) {
	$newlevel = true;
	//start the child delimiter
	$cb_args = array_merge( array(&$output, $depth), $args);
	call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
	}
	$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
	}
	unset( $children_elements[ $id ] );
	}
	 
	if ( isset($newlevel) && $newlevel ){
	//end the child delimiter
	$cb_args = array_merge( array(&$output, $depth), $args);
	call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
	}
	 
	//end this element
	$cb_args = array_merge( array(&$output, $element, $depth), $args);
	call_user_func_array(array(&$this, 'end_el'), $cb_args);
 
	}
}


/*****************latest article****************/
add_shortcode('latest_article','latest_article_shortcode');
function latest_article_shortcode(){
ob_start();
?>
<div class="articles">
<h3>Latest Articles</h3>
<?php
  $args = array('post_type'=>'post','posts_per_page'=>6);
  $query = new wp_query($args);
  while($query->have_posts()) { $query->the_post();
?>
<div class="articles_row">
<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
<h4>Posted on <?php echo get_the_date('d M Y',get_the_ID()); ?></h4>
</div>
<?php } ?>
</div>
<?php
return ob_get_clean();
}

/*****************************************/

function is_blog(){
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

/******************************************/

add_action( 'vc_before_init', 'your_name_purple_button');
function your_name_purple_button() {
 vc_map( array(
  "name" => __( "Purple Button", "my-text-domain" ),
  "base" => "purple_button",
  "class" => "",
  "category" => __( "Content", "my-text-domain"),
  'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
  'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
  "params" => array(
     array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __( "Walmart", "my-text-domain" ),
      "param_name" => "walmart",
      "value" => __( "Default param value", "my-text-domain" ),
      "description" => __( "Description for foo param.", "my-text-domain"     ),
),
       array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __( "Amazon", "my-text-domain" ),
      "param_name" => "amazon",
      "value" => __( "Default param value", "my-text-domain" ),
      "description" => __( "Description for foo param.", "my-text-domain"     )
      
     ))
  
 ) );
}
add_shortcode('purple_button','purple_button');
function purple_button($atts){
 extract( shortcode_atts( array(
  'amazon' => '#something',
  'walmart' => '#walmart'
 ), $atts ) );
 ob_start();
 ?>
 <div class="purple">
<div class="container max_width">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-7">
<div class="buttons">
<a href="<?php echo $amazon; ?>" class="amazon"><img src="<?php bloginfo('template_url'); ?>/images/amazon.png" class="img-fluid" alt="img"></a>
<a href="<?php echo $walmart; ?>" class="walmart"><img src="<?php bloginfo('template_url'); ?>/images/walmart.png" class="img-fluid" alt="img"></a>
</div>
</div>
</div>
</div>
</div>
 <?php 
 return ob_get_clean();
}

/*******************************************/

add_filter('comment_form_default_fields', 'website_remove');
function website_remove($fields)
{
if(isset($fields['url']))
unset($fields['url']);
return $fields;
}

/*****************************/
add_action( 'vc_before_init', 'your_name_benefits_s' );
function your_name_benefits_s() {
 vc_map( array(
  "name" => __( "Benefits Slider", "my-text-domain" ),
  "base" => "banifites_slider",
  "class" => "",
  "category" => __( "Content", "my-text-domain"),
  'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
  'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
  "params" => array(
 array(
  "type" => "attach_images",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Upload Image", "my-text-domain" ),
  "param_name" => "images",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 )
  )
 ) );
}
add_shortcode('banifites_slider','banifites_slider');
function banifites_slider($atts){
 extract( shortcode_atts( array(
  'images' => '#something',
 
 ), $atts ) );
ob_start();

$img_url = explode(',',$images);
$slide .= "";
foreach($img_url as $url)
{
    $slide .="<div><img src='".wp_get_attachment_url($url)."'></div>";
}
?>
<div class="benefit_of_gargling_salt_water">
<div class="container max_width">
<h2>Benefit of gargling salt water</h2>
	<!----------------------------------------->
<div class="row">


<div class="container">
<div id="owl-demo" class="owl-carousel owl-theme">
<?php echo $slide; ?>


</div>
</div>
</div>
<!----------------------------------------->
</div>
</div>
<?php 
return ob_get_clean();
}
