<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
echo "<div align='right'>".anchor('welcome/compcase', 'Change Search Options for Case')."</div>";

$searchresult=10; //add the number of results here
$arrayresults=array();

$tableheader=array('','Model','Size', 'HDD Bays','Fans','Color','Price','Add to Build');
$data['Manufacturer']="Antec";
$data['Socket']="FULL ATX";
$data['SATA']="6";
$data['RAM']="4";
$data['PCIE']="Black";
$data['price']="$52.32";

for($i=0;$i<$searchresult;$i++){
    
   array_push($arrayresults, array(form_open('welcome/myparts'),$data['Manufacturer'],$data['Socket'],$data['SATA'],$data['RAM'],$data['PCIE'],$data['price'],form_submit('add','add'),form_close()));
}
$this->table->set_heading('','','', '','','','','');
//echo $this->table->generate($arrayresults);

$datatest = array(
    array('','Model','Socket', 'Sata Ports','Max RAM','PCIE Slots','Price','Add to Build'),
    array(form_open('welcome/myparts'),'EVGA','1155','5','32GB','3','$150.43',form_submit('add','add'),form_close()),
    array(form_open('welcome/myparts'),'ASUS','FM1','4','32GB','8','$190.23',form_submit('add','add'),form_close()),
    array(form_open('welcome/myparts'),'BIOSTAR','1156','3','64GB','5','$230.51',form_submit('add','add'),form_close()),
    array(form_open('welcome/myparts'),'MSI','1155','7','32GB','3','$122.98',form_submit('add','add'),form_close()),  
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
        echo $this->table->generate($arrayresults); 
        
       
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




