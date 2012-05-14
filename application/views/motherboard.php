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
<script type="text/javascript" src="<?php echo base_url(); ?>/JS/renderScroll.js"></script>

<script>
YUI().use("slider", function (Y) {

var sataInput,  // input tied to xSlider
    ramInput,  // input tied to ySlider
    pciInput,
    xSlider; // horizontal Slider

// Function to pass input value back to the Slider
function updateSlider( e ) {
    var data   = this.getData(),
        slider = data.slider,
        value  = parseInt( this.get( "value" ), 10 );

    if ( data.wait ) {
        data.wait.cancel();
    }

    // Update the Slider on a delay to allow time for typing
    data.wait = Y.later( 200, slider, function () {
        data.wait = null;
        this.set( "value", value );
    } );
}

// Function to update the input value from the Slider value
function updateInput( e ) {
    this.set( "value", e.newVal );
}

// Create the sata Slider.
sataInput = Y.one( "#sata_value" );
sataInput.setData( "slider", new Y.Slider({
            axis: 'x',
            min   : 0,      // min is the value at the top
            max   : 8,     // max is the value at the bottom
            value : 4,       // initial value
            length: '201px',  // rail extended to afford all values

            // construction-time event subscription
            after : {
                valueChange: Y.bind( updateInput, sataInput )
            }
        }).render( ".sata_slider" ) // render returns the Slider
    )                               // set( "data", ... ) returns the Node
    .on( "keyup", updateSlider );   // chain the keyup subscription
    
    // Create the ram Slider.
ramInput = Y.one( "#ram_value" );
ramInput.setData( "slider", new Y.Slider({
            axis: 'x',
            min   : 0,      // min is the value at the top
            max   : 64,     // max is the value at the bottom
            value : 4,       // initial value
            length: '201px',  // rail extended to afford all values

            // construction-time event subscription
            after : {
                valueChange: Y.bind( updateInput, ramInput )
            }
        }).render( ".ram_slider" ) // render returns the Slider
    )                               // set( "data", ... ) returns the Node
    .on( "keyup", updateSlider );   // chain the keyup subscription
    
        // Create the ram Slider.
pciInput = Y.one( "#pci_value" );
pciInput.setData( "slider", new Y.Slider({
            axis: 'x',
            min   : 0,      // min is the value at the top
            max   : 4,     // max is the value at the bottom
            value : 2,       // initial value
            length: '201px',  // rail extended to afford all values

            // construction-time event subscription
            after : {
                valueChange: Y.bind( updateInput, pciInput )
            }
        }).render( ".pci_slider" ) // render returns the Slider
    )                               // set( "data", ... ) returns the Node
    .on( "keyup", updateSlider );   // chain the keyup subscription
});
</script>
<style>
.yui3-g .content {
    border: 2px solid #000;
    margin-right:10px; /* "column" gutters */
    padding: 1em;
}
</style>
<?php $data['part']="Motherboard";	
echo"<title>Obligatory Catchy Name - ".$data['part']."</title>";
echo "</head>";
echo "<body>";
       $this->load->view('navheader',$data); 
      ?>
     <fieldset><div id="legend">Motherboard</div>
    <div id="introborder">
        <div id="inborder">
            
<?php
   
        if($onsubmit==false){
            echo "<div id='formpart'>";
       $this->load->view('partforms/moboform'); 
            echo "</div>";
        }
        else
        {
            echo "<div id='searchpart'>";
            $this->load->view('partsearch/searchmobo');
            echo "</div>";
        }
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

function newSataSlider(){
    ?>
<!-- Add the yui3-skin-sam class to a containing element to apply the default skin -->
<div id="demo" class="example yui3-skin-sam">
    <div style="float:left" class="sata_slider"></div>
    <input style="float:right" id="sata_value" value="4" size="1"> 
</div>
   
        <?php
}
function newRamSlider(){
    ?>
<!-- Add the yui3-skin-sam class to a containing element to apply the default skin -->
<div id="demo" class="example yui3-skin-sam">
    <div style="float:left" class="ram_slider"></div>
    <input style="float:right" id="ram_value" value="4" size="1"> 
</div>
   
        <?php
}
function newPciSlider(){
    ?>
<!-- Add the yui3-skin-sam class to a containing element to apply the default skin -->
<div id="demo" class="example yui3-skin-sam">
    <div style="float:left" class="pci_slider"></div>
    <input style="float:right" id="pci_value" value="2" size="1"> 
</div>
   
        <?php
}
