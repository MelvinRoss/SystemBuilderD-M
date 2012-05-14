        <?php   
        $brand = array(
                  'antec'  => 'ANTEC',
                  'coolmaster'    => 'COOLMASTER',
                  'thermaltake'   => 'THERMALTAKE',
                  'corsair' => 'CORSAIR',
                  'rosewill' => 'ROSEWILL'
                );
       $watts = array(
                  'any' => 'ANY',
                  'less300'  => 'Less than 300W',
                  '300to400'    => '300W - 400W',
                  '400to500'   => '400W - 500W',
                  '500to600' => '500W - 600W',
                  '600to700' => '600W - 700W',
                  '700to800' => '700W - 800W',
                  '800to900' => '800W - 900W',
                  '900more' => '900W and above',
        );
        $any =array('any'=> 'ANY');
        
        $newbrand=array_merge($any,$brand);
        $brand=$newbrand;
            echo form_open('welcome/psu');
            echo "Keywords";
            echo nbs(3);
            echo form_input('psu_search');
            echo br(2);
            echo "Manufacturer:";
            echo nbs(3);
            echo form_dropdown('psu_brand',$brand);
            echo br(2);
            echo "Watts:";
            echo nbs(3);
            echo form_dropdown('psu_watts',$watts);
            echo br(2);
                 
            
            
            echo "<table><tr><td>";
            echo "Number of PCIE 6+2 Pin Connectors:";
            echo "</td><td>";
            newPCIEConnectorSlider();
            echo "</td></tr><tr><td>";echo nbs(1);echo"</td></tr>
                <tr><td>";
            echo "</td></tr></table>";
            
             
            echo nbs(100);
            echo form_submit("submit", "Search");
            echo form_close();
            