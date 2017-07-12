<?php

add_action('wp_head','sdir_category_styles');
function sdir_category_styles(){
  //Category Pages
  //if(is_tax('listing_category'))
    $s = get_option('simple_directory_settings');
    $css_start = '<style type="text/css" id="sdir-category-css" media="all">';
    $css_end  ='</style>'. "\r\n";

     //The Custom CSS
     if(isset($s['listing_custom_css']) && !empty($s['listing_custom_css'])){
    $custom_css = $s['listing_custom_css'];
    }
    else{$custom_css = '';}

    //Width



  //Paddding

  //The Output
  echo $css_start;
  echo $custom_css;

  echo '@media screen and (min-width:61.5625em){';
    echo $css_end;

}



 ?>
