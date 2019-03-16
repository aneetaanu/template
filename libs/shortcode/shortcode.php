<?php
add_action( 'vc_before_init', 'your_name_product' );
function your_name_product() {
  vc_map( array(
      "name" => __( "Our Product", "my-text-domain" ),
      "base" => "product",
      "class" => "",
      "category" => __( "Content", "my-text-domain"),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
		     array(  ///////// 1111 attach_image
				  "type" => "textfield",
				  "class" => "",
				  "heading" => __( "Title", "my-text-domain" ),
				  "param_name" => "title",
				  "value" => '',
				
				),
		   array(
				  "type" => "textarea",
				  "class" => "",
				  "heading" => __( "Description", "my-text-domain" ),
				  "param_name" => "description",
				  "value" => '',
				  
				),
		    array(  ///////// 1111
				  "type" => "attach_image",
				  "class" => "",
				  "heading" => __( "product Image", "my-text-domain" ),
				  "param_name" => "product_img",
				  "value" => '',
				
				),		  
			      
		
		  	  	
	 
      )
   ) );
}

add_shortcode('product','product');
function product($atts){
	
	$a = shortcode_atts( array(
		'title' => '',
		'description' => '',
		'product_img' => 4,
		
), $atts);
$img = $a['product_img'];
	 ob_start();
?>
<!--------->
<div class="our_products_main">
<div class="our_products">
<div class="container">
<div class="row">
<div class="col-sm-6"><img src="<?php echo wp_get_attachment_url($a['product_img']);  ?>" class="img-fluid" alt="<?php echo $a['title'];?>"></div>
<div class="col-sm-6">
<h2  class="animate fadeInRight four"><?php echo $a['title']; ?></h2>
<p class="animate fadeInUp one"><?php echo $a['description']; ?></p>
<a class="animate fadeInDown two" href="#">Our products <img src="<?php bloginfo ('template_url');?>/images/arrow.png"> <!--<i class="fa fa-long-arrow-right" aria-hidden="true"></i>--></a>
</div>
</div>
</div>
</div>
</div>
	


<?php 
	return ob_get_clean();
}



/*************************home page banner********************************************/

add_action( 'vc_before_init', 'your_name_banner' );
function your_name_banner() {
  vc_map( array(
      "name" => __( "Banner", "my-text-domain" ),
      "base" => "banner",
      "class" => "",
      "category" => __( "Content", "my-text-domain"),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
		     array(  
				  "type" => "textfield",
				  "class" => "",
				  "heading" => __( "Title", "my-text-domain" ),
				  "param_name" => "title",
				  "value" => '',
				
				),
		    array(  
				  "type" => "textfield",
				  "class" => "",
				  "heading" => __( "second title", "my-text-domain" ),
				  "param_name" => "s_title",
				  "value" => '',
				
				),
		    array(  
				  "type" => "attach_image",
				  "class" => "",
				  "heading" => __( "Banner Image", "my-text-domain" ),
				  "param_name" => "background_img",
				  "value" => '',
				
				),		  
			      array(
				  "type" => "textarea",
				  "class" => "",
				  "heading" => __( "Description", "my-text-domain" ),
				  "param_name" => "description",
				  "value" => '',
				  
				),
		
		  	  
		  
		
		  
	 
      )
   ) );
}

add_shortcode('banner','banner');
function banner($atts){
	
	$a = shortcode_atts( array(
		'title' => '',
		'description' => '',
		's_title' =>'',
		'background_img' => 4,
		
), $atts);
$img = $a['background_img'];
	 ob_start(); 
?>
<!--------->
<div class="banner animate fadeIn five">
<div class="container">
<!--<img src="images/banner.jpg" class="img-fluid img animate fadeInLeft three" alt="img">  -->
<span>
<h2 class="animate fadeInRight four"><?php echo $a['title']; ?><br><?php echo $a['s_title']; ?></h2>
<p class="animate fadeInUp one"><?php echo $a['description']; ?></p>
<a class="animate fadeInDown two" href="#">Learn More <img src="<?php bloginfo ('template_url');?>/images/arrow.png"><!--<i class="fa fa-long-arrow-right" aria-hidden="true"></i>--></a>
</span>
</div>
</div>
	


<?php 
	return ob_get_clean();
}
/*------------------•  Gargle Salt Water-----------------------------------*/

add_action( 'vc_before_init', 'your_name_salt' );
function your_name_salt() {
  vc_map( array(
      "name" => __( "product page", "my-text-domain" ),
      "base" => "salt",
      "class" => "",
      "category" => __( "Content", "my-text-domain"),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
		     array(  
				  "type" => "textfield",
				  "class" => "",
				  "heading" => __( "Title", "my-text-domain" ),
				  "param_name" => "title",
				  "value" => '',
				
				),
		    
		    array(  
				  "type" => "attach_image",
				  "class" => "",
				  "heading" => __( "Banner Image", "my-text-domain" ),
				  "param_name" => "background_img",
				  "value" => '',
				
				),

array(  
				  "type" => "attach_image",
				  "class" => "",
				  "heading" => __( "single Image", "my-text-domain" ),
				  "param_name" => "single_image",
				  "value" => '',
				
				),

array(  
				  "type" => "textfield",
				  "class" => "",
				  "heading" => __( "second title", "my-text-domain" ),
				  "param_name" => "s_title",
				  "value" => '',
				
				),
			     

array(
				  "type" => "textarea",
				  "class" => "",
				  "heading" => __( "Description", "my-text-domain" ),
				  "param_name" => "description",
				  "value" => '',
				  
				),
array(
  "type" => "colorpicker",
  "class" => "",
  "heading" => __( "Text color", "my-text-domain" ),
  "param_name" => "color",
  "value" => '#FF0000', //Default Red color
  "description" => __( "Choose text color", "my-text-domain" )
 )
	 
      )
   ) );
}

add_shortcode('salt','salt');
function salt($atts){
	
	$a = shortcode_atts( array(
		'title' => '',
		'description' => '',
		's_title' =>'',
		'single_image' => '',
		'background_img' => 4,
		'color' => ''
), $atts);
$img = $a['background_img'];
	$image= $a['single_image'];
	 ob_start();
?>
<!--------->
<div class="gargle_salt_water">
<div class="container max_width">
<h2 class="animate fadeInLeft three"><?php echo $a['title']; ?></h2>
	<?php $image_url = wp_get_attachment_image_src( $a['background_img'], 'full' )[0];  ?>
<img src="<?php echo $image_url; ?>" class="img-fluid top animate fadeInUp one" alt="<?php echo $a['title'];?>">
<div class="row">   
<div class="col-sm-6"><img src="<?php echo wp_get_attachment_image_src( $a['single_image'], 'full' )[0]; ?>" class="img-fluid top" alt="<?php echo $a['title'];?>"></div>
<div class="col-sm-6">
<h3><?php echo $a['s_title']; ?></h3>
<p> <?php echo $a['description']; ?></p>
	
</div>
</div>
</div>
	


<?php 
	return ob_get_clean();
}

/****************************gargle-mouth-wash*****************************************/

add_action( 'vc_before_init', 'gagle_pedia_mouth_wash' );
function gagle_pedia_mouth_wash() {
 vc_map( array(
  "name" => __( "Gagle Mouth Wash", "my-text-domain" ),
  "base" => "mouth",
  "class" => "",
  "category" => __( "Content", "my-text-domain"),
  'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
  'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
  "params" => array(
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Text", "my-text-domain" ),
  "param_name" => "heading",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
	  
	  array(  
				  "type" => "attach_image",
				  "class" => "",
				  "heading" => __( "Banner Image", "my-text-domain" ),
				  "param_name" => "background_imgage",
				  "value" => '',
				
				),
	  
	  array(  
				  "type" => "attach_image",
				  "class" => "",
				  "heading" => __( "Single Image", "my-text-domain" ),
				  "param_name" => "image",
				  "value" => '',
				
				),
	   
	  
	  array(
				  "type" => "textarea_html",
				  "class" => "",
				  "heading" => __( "Description", "my-text-domain" ),
				  "param_name" => "description",
				  "value" => '',
				  
				)
	  
  )
 ) );
}
	
add_shortcode( 'mouth', 'mouth' );
function mouth( $atts ) {
 $a =shortcode_atts(array(
 
 

  'heading' => '',
  'background_imgage' => '',
	'image' => '',
	
	 'description' => ''
	 
 ), $atts ) ;
  ob_start();
	
	?>
	<div class="gargle_mouth_wash">
<div class="container max_width">
<h2 class="animate fadeInLeft three"><?php echo $a['heading']; ?></h2>
	<?php $image_url = wp_get_attachment_image_src( $a['background_imgage'], 'full' )[0];  ?>
<img src="<?php echo wp_get_attachment_image_src( $a['background_imgage'], 'full' )[0];?>" class="img-fluid top animate fadeInUp one" alt="<?php echo $a['title'];?>">
</div>
</div>
	
	<div class="salt_rinse">
<div class="container max_width">
<div class="row">
	<?php $image_url = wp_get_attachment_image_src( $a['image'], 'full' )[0];  ?>
<div class="col-sm-6"><img src="<?php echo  wp_get_attachment_image_src( $a['image'], 'full' )[0];?>" alt="<?php echo $a['title'];?>"></div>
<div class="col-sm-6">

<p><?php echo $a['description'];?>
</div>
</div>
</div>
</div>
<?php
 return ob_get_clean();
}
/*****************************gagle_pedia_mouth_wash**********************************************/

add_action( 'vc_before_init', 'gagle_pedia_mouth' );
function gagle_pedia_mouth() {
 vc_map( array(
  "name" => __( "Gagle Pedia Mouth Wash", "my-text-domain" ),
  "base" => "pedia_mouth",
  "class" => "",
  "category" => __( "Content", "my-text-domain"),
  'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
  'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
  "params" => array(
  array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Text", "my-text-domain" ),
  "param_name" => "heading",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),


 array(  
				  "type" => "attach_image",
				  "class" => "",
				  "heading" => __( "Banner Image", "my-text-domain" ),
				  "param_name" => "pedia_img",
				  "value" => '',
				
				),
	  
	  
	   
	  
	  array(
				  "type" => "textarea_html",
				  "class" => "",
				  "heading" => __( "Description", "my-text-domain" ),
				  "param_name" => "description",
				  "value" => '',
				  
				)
	  
  )
 ) );
}
	
add_shortcode( 'pedia_mouth', 'pedia_mouth' );
function pedia_mouth( $atts ) {
 $a =shortcode_atts(array(
 
 

  'heading' => '',
  'pedia_img' => '',
	'image' => '',
	
	 'description' => ''
	 
 ), $atts ) ;
  ob_start();
	?>
	
	<div class="gagle_pedia_mouth_wash">
<div class="container max_width">
<h2 class="animate fadeInLeft three"><?php echo $a['heading'];?></h2>
	<?php $image_url = wp_get_attachment_image_src( $a['pedia_img'], 'full' )[0];  ?>
<img src="<?php echo wp_get_attachment_image_src( $a['pedia_img'], 'full' )[0];?>" class="img-fluid top animate fadeInUp one" alt="<?php echo $a['title'];?>">
<!--<h3>Heal your sore throats with Gargle Pedia Mouth Wash ®</h3>-->
<p><?php echo $a['description']; ?></p>
</div>
</div>
	
	<?php
 return ob_get_clean();
}
/**************************product Hbu menu page section2*********************************************/
add_action( 'vc_before_init', 'gagle_pedia_mouth_hbu' );
function gagle_pedia_mouth_hbu() {
 vc_map( array(
  "name" => __( "HBU section 2", "my-text-domain" ),
  "base" => "hbu_section",
  "class" => "",
  "category" => __( "Content", "my-text-domain"),
  'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
  'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
  "params" => array(
  array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Text", "my-text-domain" ),
  "param_name" => "heading",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
array(
				  "type" => "textarea",
				  "class" => "",
				  "heading" => __( "Description", "my-text-domain" ),
				  "param_name" => "description",
				  "value" => '',
				  
				),

 array(  
				  "type" => "attach_image",
				  "class" => "",
				  "heading" => __( "Banner Image", "my-text-domain" ),
				  "param_name" => "hbu_img",
				  "value" => '',
				
				),
	  
	  
	   
	 array(
				  "type" => "textarea",
				  "class" => "",
				  "heading" => __( "Description", "my-text-domain" ),
				  "param_name" => "descripti",
				  "value" => '',
				  
				)
	  
  )
 ) );
}
	
add_shortcode( 'hbu_section', 'hbu_section' );
function hbu_section( $atts ) {
 $a =shortcode_atts(array(
 
 

  'heading' => '',
  'hbu_img' => '',
'description' => '',
	 'descripti' =>''
	 
 ), $atts ) ;
  ob_start();
	//print_r($a);?>
	<div class="docter_section">
<div class="docter_img">
	<?php $image_url = wp_get_attachment_image_src( $a['hbu_img'], 'full' )[0];  ?>
<img src="<?php echo wp_get_attachment_image_src( $a['hbu_img'], 'full' )[0];; ?>" alt="<?php echo $a['title'];?>"></div>
<div class="container max_width">
<div class="row">
<div class="col-sm-6">
<h2><?php echo $a['heading'];?></h2>
<p><?Php echo $a['description'];?></p>
</div>
<div class="col-sm-6"></div>
</div>
<div class="green_bottom"><?Php echo $a['descripti'];?></div>
</div>
</div>
	
	
	<?php
 return ob_get_clean();
}


