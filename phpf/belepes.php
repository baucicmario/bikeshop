<?php
   include "kozos.php";

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Belépés - Kerékpár webshop</title>
    <link href="../css/belepes.css" rel="stylesheet">
    <link href="../css/headerfooter.css" rel="stylesheet">
</head>
<body>
<header>
    <table>
        <tr>
            <th style="text-align: left;"><a href="index.php"><img class="logo" src="../img/logo.jpg" alt="Az oldal címe/logója"/></a></th>
            <th style="text-align: center;"><a>BIKESHOP</a></th>
            <th style="text-align: right;"><button onclick="window.location.href='../php/kosar.php'" class="headerbutton">Kosár</button>
                <button onclick="window.location.href='../php/belepes.php'" class="headerbutton">Fiók</button></th>
        </tr>
    </table>
    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Menu
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="index.php">Főoldal</a>
                <a href="ferfi.php">Férfi kerékpár</a>
                <a href="no.php">Női kerékpár</a>
                <a href="gyerek.php">Gyerek kerékpár</a>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="loginpage">
        <form  action="belepes.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <label><input class="inputbox" type="text" placeholder="Felhasználónév" name="fnev"></label><br>
            <label><input class="inputbox" type="password" placeholder="Jelszó" name="jelszo"></label><br>
            <label><input class="headerbutton" type="submit" name="login" value="Bejelentkezés"></label><br>
        </form>

        <?php
        $accounts = loaduser("../php/user.txt");

        $user = "";
        $password = "";

        if (isset($_POST["login"])) {

            $user = $_POST["fnev"];
            $password = $_POST["jelszo"];

            $msg = "sikertelen";

            foreach ($accounts as $account) {
                if ($user === $account["fnev"] && $password === $account["jelszo"]) {
                    $msg = "sikeres";
                    break;
                }
            }

            echo $msg . "<br>";
        }
        ?>

        <button onclick="window.location.href='../php/regisztracio.php'" class="headerbutton">Regisztráció</button><br>
    </div>
</main>
<footer class="footer">
    <div>
        <h2>Elérhetőség</h2>
        <hr>
        <div class="name">
            <h3>Baucic Márió</h3>
            <h4><a href="mailto:baucicmario2.6@gmail.com">baucicmario2.6@gmail.com</a></h4>
        </div>
        <div class="name">
            <h3>Vadi Zsolt</h3>
            <h4><a href="mailto:vadizsolt@gmail.com">vadizsolt@gmail.com</a></h4>
        </div>
    </div>
</footer>
</body>
</html>
