<?php 

if(is_singular()){ 
  if(is_active_sidebar('single_post')) { 
    dynamic_sidebar('single_post');
  }
}else {
  if(is_active_sidebar('blog_post')) { 
    dynamic_sidebar('blog_post');
  }
}