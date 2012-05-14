        <?php   
        $brand = array(
                  'westerndigital'  => 'WESTERN DIGITAL',
                  'seagate'    => 'SEAGATE',
                  'hitachi'   => 'HITACHI',
                  'samsung' => 'SAMSUNG',
                  'hp' => 'HP'
                );
       $storage = array(
                  'any' => 'ANY',
                  'less100'  => 'Less than 100GB',
                  '100to250'    => '100GB - 250GB',
                  '250to320'   => '250GB - 320GB',
                  '320to500' => '320GB - 500GB',
                  '500to750' => '500GB - 750GB',
                  '750totera' => '750GB - 1TB',
                  'teraabove' => '1TB and above',
                  
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
            echo "Storage Capactiy:";
            echo nbs(3);
            echo form_dropdown('psu_watts',$storage);
            echo br(2);
                 
            
  /* Future Functionality          
            echo "<table><tr><td>";
            echo "Number of PCIE 6+2 Pin Connectors:";
            echo "</td><td>";
            newPCIEConnectorSlider();
            echo "</td></tr><tr><td>";echo nbs(1);echo"</td></tr>
                <tr><td>";
            echo "</td></tr></table>";
   * 
   * 
   */
            
             
            echo nbs(100);
            echo form_submit("submit", "Search");
            echo form_close();
            