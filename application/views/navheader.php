<?php


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$test="border:3px solid red";

echo"    <header>
		<div id='part_nav_bar' class='yui3-g'>
		<nav id='navbar'>
                    
                 
                 ";
             if($part=="Home")
                echo "<div class='yui3-u-1-12 navbar' style='".$test."'> ";
                else
                echo "<div class='yui3-u-1-12 navbar'> ";
                
                echo "<div id='home_nav' align='left' style='cursor:pointer;' onclick='document.location=\"home\"'></div>
                 
      		</div>";
               
                 if($part=="CPU")
		echo "<div class='yui3-u-1-12 navbar' style='".$test."'> ";
                 else
                echo "<div class='yui3-u-1-12 navbar'>";
               echo "<div id='proc_nav' style='cursor:pointer;' onclick='document.location=\"cpu\"'></div>
      		</div>";
               
              if($part=="Motherboard")                 
		echo "<div class='yui3-u-1-12 navbar' style='".$test."'> ";
                 else
                echo "<div class='yui3-u-1-12 navbar'>";
                    
               echo" <div id='mb_nav' style='cursor:pointer;' onclick='document.location=\"motherboard\"'></div>
      		</div>";
                
            if($part=="GPU")
                 
		echo "<div class='yui3-u-1-12 navbar' style='".$test."'> ";
                 else
                echo "<div class='yui3-u-1-12 navbar'>";
                    
               echo " <div id='video_nav' style='cursor:pointer;' onclick='document.location=\"gpu\"'></div>
      		</div>";
                 
              if($part=="Memory")
                 
		echo "<div class='yui3-u-1-12 navbar' style='".$test."'> ";
                 else
                echo "<div class='yui3-u-1-12 navbar'>";
                    
                echo "<div id='ram_nav' style='cursor:pointer;' onclick='document.location=\"memory\"'></div>
      		</div>";             
                 if($part=="Harddrive")
                 
		echo "<div class='yui3-u-1-12 navbar' style='".$test."'> ";
                 else
                echo "<div class='yui3-u-1-12 navbar'> ";
                
                    
                echo "<div id='hdd_nav' style='cursor:pointer;' onclick='document.location=\"hdd\"'></div>
      		</div>";
                /*
                    <!--
      		<div class="yui3-u-1-12 navbar">  
      			<div id="optical_nav">Optical Drives</div>
      		</div>
                    -->
                 * 
                 */
              if($part=="PSU")
                 
		echo "<div class='yui3-u-1-12 navbar' style='".$test."'> ";
                 else
                echo "<div class='yui3-u-1-12 navbar'>";
                    
               echo " <div id='ps_nav' style='cursor:pointer;' onclick='document.location=\"psu\"'></div>
      		</div>";
                 if($part=="Case")
                 
		echo "<div class='yui3-u-1-12 navbar' style='".$test."'> ";
                 else
                echo "<div class='yui3-u-1-12 navbar'>";
                    
               echo " <div id='case_nav' style='cursor:pointer;' onclick='document.location=\"compcase\"'></div>
      		</div>";
                 if($part=="Extras")
                 
		echo "<div class='yui3-u-1-12 navbar' style='".$test."'> ";
                 else
                echo "<div class='yui3-u-1-12 navbar'>";
                    
               echo " <div id='extras_nav' style='cursor:pointer;' onclick='document.location=\"accessory\"'></div></div>";
                   
               if($part=="My List")
                 
		echo "<div class='yui3-u-1-12 navbar' style='".$test."'> ";
                 else
                echo "<div class='yui3-u-1-12 navbar'>";
                    
               echo " <div id='list_nav' style='cursor:pointer;' onclick='document.location=\"myparts\"'></div>
                   

      		</div>";
                 echo"

    	</nav>
	</div>   
    </header>";
                 

    ?>
