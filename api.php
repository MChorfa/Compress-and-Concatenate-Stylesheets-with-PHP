<?php

/*
http://localhost:8888/whitespace/api.php?file_names=style.css
http://localhost:8888/whitespace/api.php?file_names=http://localhost:8888/Presentation-for-WordCamp/css/style.css
http://localhost:8888/whitespace/api.php?file_names=css/style.css,css/style2.css
http://localhost:8888/css_compress/api.php?paths=css/style.css&save_as=test.css
*/

require 'CSS_Compress.php';

if ( isset($_GET['file_names']) ) {
   $file_names = explode( ',', $_GET['file_names'] );  
   $C = new CSS_Compress( $file_names, 'style_min.css' );
   
   if ( isset($_GET['save_as']) ) {
      $C->save_as( $_GET['save_as'] );
   } else $C->save_as();
   
} else if ( isset($_GET['css']) ) {
   $C = new CSS_Compress( $_GET['css'], 'style_min.css' ); 
   echo $C->get_css();
   
}