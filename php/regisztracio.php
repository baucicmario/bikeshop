<?php?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció - Kerékpár webshop</title>
    <link href="../css/regisztracio.css" rel="stylesheet">
    <link href="../css/headerfooter.css" rel="stylesheet">
</head>
<body>
<header>
    <table>
        <tr>
            <th style="text-align: left;"><a href="fooldal.html"><img class="logo" src="../img/logo.jpg" alt="Az oldal címe/logója"/></a></th>
            <th style="text-align: center;"><a>BIKESHOP</a></th>
            <th style="text-align: right;">  <button onclick="window.location.href='../html/kosar.html'" class="headerbutton">Kosár</button>
                <button onclick="window.location.href='../html/belepes.html'" class="headerbutton">Fiók</button></th>
        </tr>
    </table>
    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Menu
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="fooldal.html">Főoldal</a>
                <a href="ferfi.html">Férfi kerékpár</a>
                <a href="no.html">Női kerékpár</a>
                <a href="gyerek.html">Gyerek kerékpár</a>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="loginpage">
        <form action="regisztracio.html" method="post" enctype="multipart/form-data" autocomplete="off">
            <label><input class="inputbox" type="email" name="email" placeholder="email@email.hu"></label><br>
            <label><input class="inputbox" type="text" name="fnev" placeholder="Felhasználónév"></label><br>
            <label><input class="inputbox" type="text" name="fname" placeholder="Vezetéknév"></label>
            <label><input class="inputbox" type="text" name="lname" placeholder="Keresztnév"></label><br>
            <label><input class="inputbox" type="password" name="jelszo" placeholder="Jelszó"></label><br>
            <label><input class="headerbutton" type="submit" name="regisztracio" value="Regisztráció"></label>
        </form>
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
