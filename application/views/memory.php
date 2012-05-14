<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 	<meta name="description" content="" />
 	<meta name="author" content="KouroshThaKing" />
 	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/PartPicker.css" media="screen, projection" /> 
 	<link rel="stylesheet" href="http://yui.yahooapis.com/3.4.1/build/cssreset/cssreset.css" type="text/css">
 	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.4.1/build/cssgrids/grids-min.css">
	<script type="text/javascript" src="http://yui.yahooapis.com/3.4.1/build/yui/yui-min.js"></script>
        <!-- Dependencies --> 
        <script src="http://yui.yahooapis.com/2.9.0/build/yahoo-dom-event/yahoo-dom-event.js"></script>
        <script src="http://yui.yahooapis.com/2.9.0/build/dragdrop/dragdrop-min.js"></script>
 
        <!-- Slider skin (optional) 
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/slider/assets/skins/sam/slider.css">
        --> 
        <!-- Slider source file --> 
        <script src="http://yui.yahooapis.com/2.9.0/build/slider/slider-min.js"></script>
	
        <script>
	// Create a YUI sandbox on your page.
	YUI().use('node', 'event', function (Y) {
            
        });
    </script>

<style>
.yui3-g .content {
    border: 2px solid #000;
    margin-right:10px; /* "column" gutters */
    padding: 1em;
}

</style>
<?php
        $data['part']="Memory";
	
echo"<title>Obligatory Catchy Name - ".$data['part']."</title>";
echo "</head>";

echo "<body>
  <div>";

      $this->load->view('navheader',$data);
      
      ?>

     <fieldset><div id="legend">Memory</div>
    <div id="introborder">
        <div id="inborder">
<?php
       $this->load->view('partforms/memform');         
?>
                 
        </div> 
            
         </fieldset>
    <footer>
     <p>&copy; Copyright  by KouroshThaKing and Asno12
     </p>
    </footer>
  </div>
</body>
</html>
<?php
/* Future functionality
function newCoreSlider(){
    ?>
<!-- Add the yui3-skin-sam class to a containing element to apply the default skin -->
<div id="demo" class="example yui3-skin-sam">
    <div style="float:left" class="core_slider"></div>
    <input style="float:right" id="core_value" value="4" size="1"> 
</div>
   
        <?php
}
function newSpeedSlider(){
    ?>
<!-- Add the yui3-skin-sam class to a containing element to apply the default skin -->
<div id="demo" class="example yui3-skin-sam">
    <div style="float:left" class="speed_slider"></div>
    <input style="float:right" id="speed_value" value="3" size="1"> 
</div>
   
        <?php
}
*/

