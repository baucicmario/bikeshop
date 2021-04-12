<?php
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Kerékpár webshop</title>
    <link href="../css/fooldal.css" rel="stylesheet">
    <link href="../css/headerfooter.css" rel="stylesheet">
</head>
<body>
<header>
    <table>
        <tr>
            <th style="text-align: left;"><a href="../php/index.php"><img class="logo" src="../img/logo.jpg" alt="Az oldal címe/logója"/></a></th>
            <th style="text-align: center;"><a>BIKESHOP</a></th>
            <th style="text-align: right;">  <button onclick="window.location.href='../php/kosar.php'" class="headerbutton">Kosár</button>
                <?php
                    if(isset($_SESSION["user"]) && !empty($_SESSION["user"])):
                ?>
                <button onclick="window.location.href='../php/profil.php'" class="headerbutton">Fiók</button></th>
                <?php
                    else:
                ?>
                <button onclick="window.location.href='../php/belepes.php'" class="headerbutton">Fiók</button></th>
                <?php endif; ?>
        </tr>
    </table>
</header>
</body>
</html>
