
<!DOCTYPE html> 
 
<html lang="en" class="no-js"> 
<head> 
   <meta charset="utf-8"> 
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
   <meta name="Jeffrey Way" CONTENT="http://net.tutsplus.com">
   <title>Compress and Concatenate Stylesheets</title> 
   <style>
   body {
      width: 800px;
      margin: auto;
      font-family: sans-serif;
   }
   
   pre {
      overflow: auto;
      padding: 20px;
      font-family: “Consolas”,monospace;
      font-size: 9pt;
      text-align:left;
      background-color: #FCF7EC;
     overflow-x: auto; /* Use horizontal scroller if needed; for Firefox 2, not needed in Firefox 3 */
     white-space: pre-wrap; /* css-3 */
     white-space: -moz-pre-wrap !important; /* Mozilla, since 1999 */
     white-space: -pre-wrap; /* Opera 4-6 */
     white-space: -o-pre-wrap; /* Opera 7 */
     /* width: 99%; */
     word-wrap: break-word; /* Internet Explorer 5.5+ */
   }
   </style>
</head> 
<body> 
 
 <h1> CompressCSS.com </h1>
 <p>Use the API here, or <a href="https://github.com/JeffreyWay/Compress-and-Concatenate-Stylesheets-with-PHP">download the PHP class and use it locally.</a>
 </p>
 <hr />
	
<h2> Compress Style.css, and Save it as all_min.css. </h2>
<pre>
file_put_contents(
  'all_min.css',
  file_get_contents('http://compresscss.com/api.php?css=' . urlencode(file_get_contents('examples/css/style.css')))
);
</pre>
<p>
Note that, if you're saving to a directory that does not exist, you'll need to create the directory first. 
</p>

<h2> Compress + Concatenate Multiple Files </h2>

<pre>
$css = array('examples/css/style.css', 'examples/css/style2.css');
array_walk($css, function( &$val ) {
   $val = file_get_contents( $val );
});

file_put_contents(
   'all_min.css', 
   file_get_contents("http://compresscss.com/api.php?css=" . urlencode(implode($css)))
);
</pre>

<h2>Compress Externally Hosted Stylesheets, Concatenate Them, and Save Locally to style_min.css</h2>

<pre>
file_put_contents(
   'style_min.css', 
   file_get_contents("http://compresscss.com/api.php?file_names=http://path/to/css1.css,http://path/to/css2.css")
);
</pre>

<p>Created by <a href="http://net.tutsplus.com">Jeffrey Way</a>, July - 2011. </a>

</body> 
</html>