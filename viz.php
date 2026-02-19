<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Űrlap feldolgozás</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Negyedik feladat</h1>
        <form action="szamitas.php" method="post">
            <div>
                <label for="v">V folyadékáram: </label>
                    <input type="number" name="sebesseg" id="v" min = 0 value=0 required>
            </div>
            <div>
                <label for="a">A keresztmetszet(m^2): </label> 
                    <input type="number" name="keresztmetszet" id="a" min=0 value=0 required>
                    <input type="submit" value="Küldés" name="kuldes">
            </div>
        </form>
    <a href="megujulo.php">A megújuló oldalra</a>
    <a href="tablazat.php">A Táblázathoz</a>
    <a href="index.php">A főoldalra</a>
    <a href="viz.php">A Vízhez</a>
</body>
</html>