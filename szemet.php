<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szelektív gyűjtés</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $hulladekok = ["papír","konzerv","tejes_doboz","sörös_üveg","palack","krumpli_héj"];
    ?>
    <form action="kiertekel.php" method="get">
        <label for="kidobando">
            Kidobandó szemét
        </label>
        <select name="dobas" id="kidobando">
            <?php 
                foreach ($hulladekok as $ertek) {
                echo "<option value=\"$ertek\">$ertek</option>";
                }
            ?>
        </select>
        <input type="image" src="kuka.jpg" alt="kuka" name="kuldes" style="width: 30%;">
    </form>
</body>
</html>