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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/NavStyle.css" media="screen, projection" /> 
 	<link rel="stylesheet" href="http://yui.yahooapis.com/3.4.1/build/cssreset/cssreset.css" type="text/css">
 	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.4.1/build/cssgrids/grids-min.css">
	<script type="text/javascript" src="http://yui.yahooapis.com/3.4.1/build/yui/yui-min.js"></script>
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

#proc_nav{
    background-image:url('CPU.png');
    width:501px;
    height:520px;
}

    

</style>
<?php
        $data['part']="Home";
	
echo"<title>Obligatory Catchy Name - ".$data['part']."</title>";
echo "</head>";

echo "<body>
  <div>";

       // $this->load->view('navheader',$data);
        ?>
     <fieldset><div id="legend">PC Builder</div>
    <div id="introborder">
            <div id="introtitle" align="center"> How will you be Building?</h1>
            <?php
            echo br(3);
           
            echo "<table><tr><td>";
                echo form_open('welcome/action');
                $btn_guided = array(
                    'type'      => 'image',
                    'src'        => base_url().'images/guided_button_1.png',
                    'name'        => 'button',
                    'width'     => '280',
                    'height'    => '150',
                    'value'        => 'guided'
                    
                );
               $btn_manual = array(
                    'type'      => 'image',
                    'src'        => base_url().'images/manual_button_1.png',
                    'name'        => 'button',
                    'width'     => '280',
                    'height'    => '150',
                    'value'        => 'manual'
                    
                );
               
                echo form_submit($btn_guided);
                echo form_close(); 
                echo "</td><td>";
                
                echo nbs(3);
                    
                echo "</td><td>";
               
                echo form_open("welcome/advanced_1");
                echo form_submit($btn_manual);
                echo form_close(); 
                echo "</td></tr></table>";


            
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
