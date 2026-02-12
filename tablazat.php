<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Táblázat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Harmadik feladat</h1>
    <?php
        $cimek = array("A megújuló erőforrások fogyasztása", "A környezet helyzete", "Fenntarthatóság");
        $tartalom = array("több, mint amit a természet újratermelni képes", "a környezet pusztul", "nem fenntartható", "a természet újratermelő kapacitásával azonos mértékű", "környezeti egyensúly", "fenntartható, nem változó állapot",
        "kevesebb, mint amit a természet újratermelni képes", "a környezet megújul", "fenntartható fejlődés");
        echo "<table> <tr>";
        foreach($cimek as $ertek){
            echo "<th>$ertek</th>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($i=0; $i < 3; $i++) { 
            echo "<td> $tartalom[$i] </td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($i=3; $i < 6; $i++) { 
            echo "<td> $tartalom[$i] </td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($i=6; $i < 9; $i++) { 
            echo "<td> $tartalom[$i] </td>";
        }
        echo "</tr>";
        echo "</table>";
        echo "<table> <tr>";
        for ($i=0; $i < 9; $i++) {
            echo "<td> $tartalom[$i] </td>"; 
            if($i%3==2){
                echo "</tr>";
                echo "<tr>";
            }
        }
        echo "</table>";
    ?>
    <a href="index.php">Vissza a főoldalra</a>
    <a href="megujulo.php" target="_self">A megújuló oldalra</a>
    <a href="viz.php">A Vízhez</a>
</body>
</html>