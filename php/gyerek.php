<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Gyerek kerékpár - Kerékpár webshop</title>
    <link href="../css/headerfooter.css" rel="stylesheet">
    <link href="../css/gyerek.css" rel="stylesheet">
    <link href="../css/catalog.css" rel="stylesheet">
</head>
<body>
<header>
    <?php
    include "../php/header.php";
    ?>
    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Menu
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../html/fooldal.html">Főoldal</a>
                <a href="../html/ferfi.html">Férfi kerékpár</a>
                <a href="../html/no.html">Női kerékpár</a>
                <a href="../html/gyerek.html">Gyerek kerékpár</a>
            </div>
        </div>
    </div>
</header>

<main>
    <div>

        <hr>
        <h1 style="background-color: #3E4750; border-radius: 30px; color: azure;" >Gyerek Kerékpárok</h1>
    </div>
    <div>
        <div class="logpage">
            <table id="logpage">
                <tr>
                    <th style="background-color: #252D30; border-radius: 30px; vertical-align: top;">
                        <ul>
                            <li >
                                <div>
                                    <a style="color: white;">KERÉKMÉRET</a>
                                </div>
                                <div>
                                    <form action="../html/ferfi.html" method="get" enctype="multipart/form-data" autocomplete="off">
                                        <label class="container2"><input type="checkbox" name="gy10">10" <span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="gy12">12"<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="gy14">14"<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="gy16">16"<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="gy20">20"<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="gy24">24"<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="gy26">26"<span class="checkmark"></span></label><br>

                                    </form>
                                </div>
                            </li>
                            <li >
                                <div>
                                    <a style="color: white;">ÉLETKOR</a>
                                </div>
                                <div>
                                    <form action="../html/ferfi.html" method="get" enctype="multipart/form-data" autocomplete="off">
                                        <label class="container2"><input type="checkbox" name="gykor12-36">12-36 HÓNAP<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="gykor16-">1-6 ÉVES KORIG<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="gykor6-9">6-19 ÉVES KORIG<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="gykor9-14">9-14 ÉVES KORIG<span class="checkmark"></span></label><br>
                                    </form>
                                </div>
                            </li>
                            <li >
                                <div>
                                    <a style="color: white;">TÍPUS</a>
                                </div>
                                <div>
                                    <form action="../html/ferfi.html" method="get" enctype="multipart/form-data" autocomplete="off">
                                        <label class="container2"><input type="checkbox" name="gyfuto">FUTÓKERÉKPÁR<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="gytri">TRICIKRI<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="gybmx">BMX<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="gymtb">MTB KERÉKPÁR<span class="checkmark"></span></label><br>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </th>

                </tr>
            </table>
            <div style="width: 75%; background-color: #EBECEE; border-radius: 30px; display: inline-block">
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
                                    <span>10</span>
                                </div>
                                <div class="color">
                                    <h3>Szín :</h3>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <a href="#" >KOSÁRBA</a>
                            </div>
                        </article>
                    </section>
                    <section class="container">
                        <article class="card">
                            <div class="imgBox">
                                <img src="../img/gyerek/futo2.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>BTWIN FUTÓKERÉKPÁR</h2>
                                <h3>19 290 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>10</span>
                                </div>
                                <div class="color">
                                    <h3>Szín :</h3>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <a href="#" >KOSÁRBA</a>
                            </div>
                        </article>
                    </section>
                    <section class="container">
                        <article class="card">
                            <div class="imgBox">
                                <img src="../img/gyerek/futo3.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>BTWIN FUTÓKERÉKPÁR</h2>
                                <h3>19 290 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>10</span>
                                </div>
                                <div class="color">
                                    <h3>Szín :</h3>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <a href="#" >KOSÁRBA</a>
                            </div>
                        </article>
                    </section>
                    <section class="container">
                        <article class="card">
                            <div class="imgBox">
                                <img src="../img/gyerek/mtb1.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>BTWIN MTB KERÉKPÁR</h2>
                                <h3>49 990 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>20</span>
                                    <span>24</span>
                                </div>
                                <div class="color">
                                    <h3>Szín :</h3>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <a href="#" >KOSÁRBA</a>
                            </div>
                        </article>
                    </section>
                    <section class="container">
                        <article class="card">
                            <div class="imgBox">
                                <img src="../img/gyerek/mtb2.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>BTWIN MTB KERÉKPÁR</h2>
                                <h3>59 980 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>20</span>
                                    <span>24</span>
                                </div>
                                <div class="color">
                                    <h3>Szín :</h3>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <a href="#" >KOSÁRBA</a>
                            </div>
                        </article>
                    </section>
                    <section class="container">
                        <article class="card">
                            <div class="imgBox">
                                <img src="../img/gyerek/mtb3.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>BTWIN MTB KERÉKPÁR</h2>
                                <h3>59 980 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>20</span>
                                    <span>24</span>
                                </div>
                                <div class="color">
                                    <h3>Szín :</h3>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <a href="#" >KOSÁRBA</a>
                            </div>
                        </article>
                    </section>
                    <section class="container">
                        <article class="card">
                            <div class="imgBox">
                                <img src="../img/gyerek/bmx1.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>BTWIN BMX KERÉKPÁR</h2>
                                <h3>59 690 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>20</span>
                                </div>
                                <div class="color">
                                    <h3>Szín :</h3>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <a href="#" >KOSÁRBA</a>
                            </div>
                        </article>
                    </section>
                    <section class="container">
                        <article class="card">
                            <div class="imgBox">
                                <img src="../img/gyerek/bmx2.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>BTWIN BMX KERÉKPÁR</h2>
                                <h3>69 990 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>20</span>
                                </div>
                                <div class="color">
                                    <h3>Szín :</h3>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <a href="#" >KOSÁRBA</a>
                            </div>
                        </article>
                    </section>
                    <section class="container">
                        <article class="card">
                            <div class="imgBox">
                                <img src="../img/gyerek/tri1.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>SMOBY TRICIKRI</h2>
                                <h3>10 990 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>10</span>
                                </div>
                                <div class="color">
                                    <h3>Szín :</h3>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <a href="#" >KOSÁRBA</a>
                            </div>
                        </article>
                    </section>
                    <section class="container">
                        <article class="card">
                            <div class="imgBox">
                                <img src="../img/gyerek/tri3.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>SMOBY TRICIKRI</h2>
                                <h3>10 990 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>10</span>
                                </div>
                                <div class="color">
                                    <h3>Szín :</h3>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <a href="#" >KOSÁRBA</a>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include "../php/footer.php";
?>

</body>
</html>
