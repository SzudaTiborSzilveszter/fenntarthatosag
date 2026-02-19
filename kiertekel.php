<?php
    if(isset($_GET["dobas"])){
        $kidobando = $_GET["dobas"];
        switch ($kidobando) {
            case "papír" || "tejes_doboz":
                echo "kék gyűjtő";
                break;
            case "konzerv" || "sörös_üveg":
                echo "sárga gyűjtő";
                break;
            case "palack":
                echo "kék gyűjtő";
                break;
            case "krumpli_héj":
                echo "nem újrahasznosítható";
                break;
        }
    }
    else{
        echo "deez";
    }
?>