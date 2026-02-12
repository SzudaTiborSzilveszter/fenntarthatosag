<?php
    if(isset($_POST["kuldes"])){
        $eredmeny = $_POST["sebesseg"]*$_POST["keresztmetszet"];
        echo "Az átárramló folyadék térfogata: $eredmeny";
    }
?>