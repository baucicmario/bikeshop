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
    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Menu
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a style="<?= ($activePage == 'index') ? 'background-color: #FFCD30; border-radius: 12px':''; ?>" href="index.php">Főoldal</a>
                <a style="<?= ($activePage == 'ferfi') ? 'background-color: #FFCD30; border-radius: 12px':''; ?>" href="ferfi.php">Férfi kerékpár</a>
                <a style="<?= ($activePage == 'no') ? 'background-color: #FFCD30; border-radius: 12px':''; ?>" href="no.php">Női kerékpár</a>
                <a style="<?= ($activePage == 'gyerek') ? 'background-color: #FFCD30; border-radius: 12px':''; ?>" href="gyerek.php">Gyerek kerékpár</a>
            </div>
        </div>
    </div>
</header>
</body>
</html>
