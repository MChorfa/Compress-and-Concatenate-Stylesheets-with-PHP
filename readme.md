This is a tool that allows you to compress and concatenate stylesheets with PHP. To use it, download and import the 'CSS_Compress.php' file into your project.

Next, require it:

<pre>
require 'CSS_Compress.php';
</pre>

...and create a new instance of the class. When instantiating the class, as the first argument, pass either:

<ol>
<li> A path to the single CSS file that should be compressed </li>
<li> An array of each stylesheet that should be compressed and concatenated. 
</ol>

<pre>
$C = new CSS_Compress( 'css/style.css' );

// or
$C = new CSS_Compress( array('css/style.css', 'css/style2.css') );
</pre>

You can also pass an optional second parameter which designates where the new compressed stylesheet will be saved. If omitted, it'll use the first file name you pass, and append "_min" to the end of the string.

<pre>
$C = new CSS_Compress('style.css', 'css/min/style_min.css');
</pre>

If you wish to overwrite the file completely, simply set the second argument to the same path as the first.

<pre>
$C = new CSS_Compress('style.css', 'style.css');
</pre>

Finally, call the save method, and you're done.

<pre>
$C->save();
</pre>

## Compress a Single Stylesheet

<pre>
require 'CSS_Compress.php';
$C = new CSS_Compress( style.css');
$C->save();
</pre>
...compressed stylesheet is saved to style_min.css

## Compress and Overwrite Your Existing Stylesheet

<pre>
require 'CSS_Compress.php';
$C = new CSS_Compress( style.css', 'styles.css );
$C->save();
</pre>

## Compress, Concatenate, and Save Three Stylesheets

<pre>
require 'CSS_Compress.php';
$C = new CSS_Compress( array('css/style.css', 'css/style2.css', 'css/style3.css'), 'css/min/styles_min.css );
$C->save();
</pre>

## There's Also An API...

If you don't want to use these files locally, you can also pass your stylesheets to compresscss.com, which will do the work for you, and return the concatenated + compressed CSS. With this method, you don't need to download any files. Just open a blank PHP file, and paste in...

## Compress Style.css, and Save it as all_min.css. 
<pre>
file_put_contents(
  'all_min.css',
  file_get_contents('http://compresscss.com/api.php?css=' . urlencode(file_get_contents('examples/css/style.css')))
);
</pre>
Note that, if you're saving to a directory that does not exist, and you're using the API method, you'll need to create the directory first. 

## Compress + Concatenate Multiple Files

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

## Compress Externally Hosted Stylesheets, Concatenate Them, and Save Locally to style_min.css

<pre>
file_put_contents(
   'style_min.css', 
   file_get_contents("http://compresscss.com/api.php?file_names=http://net.tutsplus.com/wp-content/themes/tuts/css/large.css,http://envato.s3.amazonaws.com/widget/widget.css")
);
</pre>