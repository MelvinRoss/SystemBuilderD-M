        <?php   
     
            echo form_open('welcome/accessory');
            echo "Keywords";
            echo nbs(3);
            echo form_input('accessory_search');
            echo br(2);
            echo nbs(100);
            echo form_submit("submit", "Search");
            echo form_close();
            