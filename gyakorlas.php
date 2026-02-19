<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gyakorlás</title>
    <link rel="stylesheet" href="stilus.css">
</head>
<body>
    <div>
        <?php 
            $diakok = ["Szontagh Ágoston Botond","Mágori Ferenc Ferdinánd","Páczi Balázs","Ujlakán Ádám","Stolár-Németh Villő","Kucsák Ákos Dániel","Bánhidi Dániel","Kovács Csaba Botond","Szuda Tibor Szilveszter"];
            $szinek = ["rózsaszín", "kék", "zöld", "szürke", "antracit", "bézs", "sárga", "piros","fekete"];
            $diakokSzama = count($diakok);
            for ($i=0; $i < $diakokSzama; $i++) { 
                echo "$diakok[$i]\t", rand(2,5),"\n", "$szinek[$i]\t <br>";
            }
            
        ?>
    </div>
</body>
</html>