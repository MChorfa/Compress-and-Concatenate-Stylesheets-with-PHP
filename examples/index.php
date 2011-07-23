<?php


/* 
 Usage 1 
*/
//
//require 'CSS_Compress.php';
//$C = new CSS_Compress('css/style.css');
//$C = new CSS_Compress(array('css/style.css', 'css/style2.css'), 'css/min/style_min.css');
//$C->save();


/* 
  API Usage 
*/

/*
$css = array('css/style.css', 'css/style2.css');
array_walk($css, function( &$val ) {
   $val = file_get_contents( $val );
});

file_put_contents(
   'css/min/all_min.css', 
   file_get_contents("http://demo.jeffrey-way.com/css_compress/api.php?css=" . urlencode(implode($css)))
);
*/