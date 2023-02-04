 <!--Display select colors (as a list) and user name-->    
<?php

if (isset($_POST['submit'])) {
    if (!empty($_POST['list'])) {
        
        $check= count($_POST['list']);
        $name = $_POST['username'];
        echo $name . " 's favourite colors are " . $check . " option(s): <br/>";

        foreach ($_POST['list'] as $selected) {
            echo "<p>" . $selected . "</p>";
        }
    } else {
        echo "<b>Please Select Atleast One Option.</b>";
    }
}