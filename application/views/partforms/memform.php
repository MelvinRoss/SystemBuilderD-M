        <?php   
        $brand = array(
                  'corsair'  => 'CORSAIR',
                  'gskill'    => 'GSKILL',
                  'crucial'   => 'CRUCIAL',
                  'kingston' => 'KINGSTON',
                  'patriot' => 'PATRIOT'
                );
        sort($brand);
        $any =array('any'=> 'ANY');
        
        $newbrand=array_merge($any,$brand);
        $brand=$newbrand;
         $capacity = array(
                  '2gb'  => '2GB',
                  '2gbx1'    => '2GB(2x1GB)',
                  '4gb'   => '4GB',
                  '4gbx2' => '4GB(2x2GB)',
                  '6gbx3' => '6GB(2x3GB)',
                  '8gb' => '6GB(2x3GB)',
                  '8gb' => '8GB',
                  '8gb' => '8GB(2x4GB)',
                  '8gb' => '8GB(4x2GB)',
                  '8gb' => '8GB(2x3GB)',
                  '16gb' => '16GB(2x8GB)',
                );
            echo form_open('welcome/memory');
            echo "Keywords";
            echo nbs(3);
            echo form_input('mem_search');
            echo br(2);
            echo "Manufacturer:";
            echo nbs(3);
            echo form_dropdown('mem_brand',$brand);
            echo br(2);
            echo "Capacity:";
            echo nbs(3);
            echo form_dropdown('capacity',$capacity);
            echo br(2);
            
            echo "Memory Speed:";
            echo nbs(3);
            echo form_radio("mem_speed", "ddr") .  "DDR";
            echo nbs(3);
            echo form_radio("mem_speed", "ddr2") . "DDR2"; 
            echo nbs(3);
            echo form_radio("mem_speed", "ddr3") . "DDR3"; 
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