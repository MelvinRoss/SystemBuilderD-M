        <?php   
        $manufacturer = array(
                  'asus'  => 'ASUS',
                  'msi'    => 'MSI',
                  'evga'   => 'EVGA',
                  'pny' => 'PNY',
                );
            echo form_open('welcome/gpu');
            echo "Keywords";
            echo nbs(3);
            echo form_input('gpu_search');
            echo br(2);
            echo "Chipset Manufacturer:";
            echo nbs(3);
            echo form_radio("gpu", "nvidia") .  "Intel";
            echo nbs(3);
            echo form_radio("gpu", "amd") . "AMD"; 
            echo br(2);
            echo "Manufacturer:";
            echo nbs(3);
            echo form_dropdown('manufacturer',$manufacturer);
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