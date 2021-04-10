<?php?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Kosár - Kerékpár webshop</title>
    <link href="../css/kosar.css" rel="stylesheet">
    <link href="../css/headerfooter.css" rel="stylesheet">
    <link href="../css/catalog.css" rel="stylesheet">
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
    <div>
        <div>
            <section class="container">
                <article class="card">
                    <div class="imgBox">
                        <img src="../img/gyerek/futo1.png" alt="termék képe">
                    </div>
                    <div class="contentBox">
                        <h2>BTWIN FUTÓKERÉKPÁR</h2>
                        <h3>19 290 Ft</h3>
                        <div class="size">
                            <h3>Méret :</h3>
                            <span id="sizecart">10</span>
                        </div>
                        <div class="color">
                            <h3>Szín :</h3>
                            <span id="colorcart"></span>
                        </div>
                        <a href="#">TÖRLÉS</a>
                    </div>
                </article>
            </section>
        </div>
        <div class="cartcontainer">
            <div class="price">
                <h2>Összesen: </h2>
                <div>
                    <a><h3>19 290 Ft</h3></a>
                </div>
            </div>
            <div>
                <button class="headerbutton" id="buy">Fizetés</button>
            </div>
        </div>
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

