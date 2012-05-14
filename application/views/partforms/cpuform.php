        <?php   
        $sockets = array(
                  'fm1'  => 'FM1',
                  'am3'    => 'AM3+',
                  '1155'   => '1155',
                  '1156' => '1156',
                );
        
            echo form_open('welcome/cpu');
            echo "Keywords";
            echo nbs(3);
            echo form_input('cpu_search');
            echo br(2);

            echo "CPU Support:";
            echo nbs(3);
            echo form_radio("cpu", "intel") .  "Intel";
            echo nbs(3);
            echo form_radio("cpu", "amd") . "AMD"; 
            echo br(2);
            echo "Desired Socket:";
            echo nbs(3);
            echo form_dropdown('sockets',$sockets);
            echo br(2);
            echo "<table><tr><td>";
            echo "Number of Cores:";
            echo "</td><td>";
            newCoreSlider();
            echo "</td></tr><tr><td>";echo nbs(1);echo"</td></tr>
                <tr><td>";
            echo "Core Speed(GHz):";
            echo "</td><td>";
            newSpeedSlider();
            echo "</td></tr></table>";
            echo nbs(100);
            echo form_submit("cpusubmit", "Search");
            echo form_close();
            ?>