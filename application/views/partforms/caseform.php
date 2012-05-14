        <?php   
        $brand = array(
                  'antec'  => 'ANTEC',
                  'coolmaster'    => 'COOLMASTER',
                  'thermaltake'   => 'THERMALTAKE',
                  'lian-li' => 'LIAN-LI',
                  'rosewill' => 'ROSEWILL'
                );

        $any =array('any'=> 'ANY');
        
        
        $newbrand=array_merge($any,$brand);
        $brand=$newbrand;

        
        
            echo form_open('welcome/compcase');
            echo "Keywords";
            echo nbs(3);
            echo form_input('case_search');
            echo br(2);
            echo "Manufacturer:";
            echo nbs(3);
            echo form_dropdown('case_brand',$brand);
            echo br(2);
            echo "Power Supply:";
            echo nbs(3);
            echo form_radio("case_psu", "yes") . "Yes"; 
            echo nbs(3);
            echo form_radio("case_psu", "no") . "No"; 
            echo br(2);
            
            echo "Side Panel Window";
            echo nbs(3);
            echo form_radio("sidepanel", "yes") . "Yes"; 
            echo nbs(3);
            echo form_radio("sidepanel", "no") . "No"; 
            echo br(2);
            
            
            
            /*
            echo "<table><tr><td>";
            echo "Number of Sata ports:";
            echo "</td><td>";
            newSataSlider();
            echo "</td></tr><tr><td>";echo nbs(1);echo"</td></tr>
                <tr><td>";
            echo "Maximum Amount of Ram:";
            echo "</td><td>";
            newRamSlider();
            echo "</td></tr><tr><td>";echo nbs(1);echo"</td></tr>
                <tr><td>";
            echo "Number of PCIExpress Slots:";
            echo "</td><td>";
            newPciSlider();
            echo "</td></tr></table>";
             * */
             
            echo nbs(100);
            echo form_submit("submit", "Search");
            echo form_close();
            ?>