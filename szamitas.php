<?php
    if(isset($_POST["kuldes"]) && !empty($_POST["sebesseg"]) && !empty($_POST["keresztmetszet"])){
        $eredmeny = $_POST["sebesseg"]*$_POST["keresztmetszet"];
        echo "Az átárramló folyadék térfogata: $eredmeny";
    }
?>