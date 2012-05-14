        <?php   
            echo form_open('welcome/motherboard');
            echo "Keywords";
            echo nbs(3);
            echo form_input('mobo_search');
            echo br(2);

            echo "CPU Support:";
            echo nbs(3);
            echo form_radio("cpu", "intel") .  "Intel";
            echo nbs(3);
            echo form_radio("cpu", "amd") . "AMD"; 
            echo br(2);
            echo "Integrated Video:";
            echo nbs(3);
            echo form_radio("integrate", "yes") .  "Yes";
            echo nbs(3);
            echo form_radio("integrate", "no", TRUE) . "No"; 
            echo br(2);
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
            echo nbs(100);
            echo form_submit("submit", "Search");
            echo form_close();
            ?>