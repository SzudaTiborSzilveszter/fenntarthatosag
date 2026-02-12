<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megújuló energiaforrás</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Második Feladat</h1>
    <?php
        echo "Megújuló energiaforrásnak nevezzük az energiahordozók azon csoportját, amelyek emberi időléptékben képesek megújulni, azaz nem fogynak el, ellentétben a nem megújuló energiaforrásokkal. A megújuló energiaforrások a napenergia közvetlen termikus és fotoelektromos hasznosítása, a biomassza, szélenergia, vízenergia, a tenger hullámzásából kinyerhető energia, a geotermikus energia, valamint a Holddal összefüggésben az árapály energia. A geotermikus energia a Nappal való kapcsolat, a földfelszín Napból és a magmából származó energiaáram jelentős különbsége alapján sorolható a megújuló energiaforrások közé.";
        $megujAr = Array("EU-átlag" =>20, "Belgium" => 20, "Magyarország" =>rand(0,5), "Dánia" => 30);
        $megujAr["Németország"] = 18;
        echo "<table>";
        foreach($megujAr as $kulcs => $ertek){
            echo "<tr> <td>$kulcs  </td> <td>$ertek  </td> </tr>";
        }
        echo "</table>";
    ?>
    <a href="index.php">Vissza a főoldalra</a>
    <a href="tablazat.php">A Táblázathoz</a>
    <a href="viz.php">A Vízhez</a>
</body>
</html>