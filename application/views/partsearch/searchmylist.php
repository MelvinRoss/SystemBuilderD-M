<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

$searchresult=10; //add the number of results here
$arrayresults=array();
/*
for($i=0;$i<$searchresult;$i++){
    
   array_push($arrayresults, array(form_open('welcome/myparts'),$data['Manufacturer'],$data['Socket'],$data['SATA'],$data['RAM'],$data['PCIE'],$data['price'],form_submit('add','add'),form_close()));
}
 * 
 */
echo "<h1>";
$tableheader=array('My List');
echo "</h1>";
$this->table->set_heading('','','', '','','','','');
//echo $this->table->generate($arrayresults);

$datatest = array(
    array('My Cpu'),
    array(form_open('welcome/removemyparts'),'Intel','1155','Quad','6MB L2 Cache','3.0Ghz','$150.43',form_submit('remove','remove'),form_close()),
    array('My MotherBoard'),
    array(form_open('welcome/removemyparts'),'ASUS','FM1','4','32GB','8','$190.23',form_submit('remove','remove'),form_close()),
    array('My Graphics Card'),
    array(form_open('welcome/removemyparts'),'AMD','7970','900Mhz','4GB','2100PU','$400.63',form_submit('remove','remove'),form_close()),
    array('My Memory'),
    array(form_open('welcome/removemyparts'),'Corsair','32GB','Dual Channel','DDR3','8','$190.23',form_submit('remove','remove'),form_close()),  
    array('My Hard Drive'),
    array(form_open('welcome/removemyparts'),'Seagate','750GB','7200RPM','32MB','','$123.92',form_submit('remove','remove'),form_close()), 
    array('My Power Supply'),
    array(form_open('welcome/removemyparts'),'OCZ','750W','4','BLACK','76%','$130.23',form_submit('remove','remove'),form_close()), 
    array('My Case'),
    array(form_open('welcome/removemyparts'),'Antec','Full ATX','4','BLACK','8','$190.23',form_submit('remove','remove'),form_close()), 
    array('My Accessories'),
    //array(form_open('welcome/removemyparts'),'ASUS','FM1','4','32GB','8','$190.23',form_submit('remove','remove'),form_close()), 
);
        
        
        echo "</div>";
        ?>
<script>
    window.onload=render;
</script>
        <!-- Bounding Box, with overflow setting and fixed dimension (in this case height) -->
    <div id="scrollview-container">
    <div id="scrollview-header">
        <h1><?php tableHeader($tableheader);?></h1>
    </div>
    <div id="scrollview-content" class="yui3-scrollview-loading">
        <?php
        echo $this->table->generate($datatest); 
        
       
   echo" </div>
       
</div>
";
function tableHeader($headerarray){
    echo "<table><tr>";
    for($i=0;$i<sizeof($headerarray);$i++){
       echo "<td>".$headerarray[$i]."</td>";
        
         
    }
    echo "</tr></table>";
    
}




