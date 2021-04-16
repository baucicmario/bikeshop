<?php
    session_start();
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Férfi kerékpár - Kerékpár webshop</title>
    <link href="../css/headerfooter.css" rel="stylesheet">
    <link href="../css/ferfi.css" rel="stylesheet">
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
                <a style="<?= ($activePage == 'index') ? 'background-color: #FFCD30; border-radius: 12px':''; ?>" href="index.php">Főoldal</a>
                <a style="<?= ($activePage == 'ferfi') ? 'background-color: #FFCD30; border-radius: 12px':''; ?>" href="ferfi.php">Férfi kerékpár</a>
                <a style="<?= ($activePage == 'no') ? 'background-color: #FFCD30; border-radius: 12px':''; ?>" href="no.php">Női kerékpár</a>
                <a style="<?= ($activePage == 'gyerek') ? 'background-color: #FFCD30; border-radius: 12px':''; ?>" href="gyerek.php">Gyerek kerékpár</a>

            </div>
        </div>
    </div>
</header>

<main>
    <div>

        <hr>
        <h1 style="background-color: #3E4750; border-radius: 30px; color: azure;" >Férfi Kerékpárok</h1>
    </div>
    <div>
        <div class="logpage">
            <table id="logpage">
                <tr>
                    <th style="background-color: #252D30; border-radius: 30px; vertical-align: top;">
                        <ul>
                            <li>
                                <div>
                                    <a style="color: white;">KERÉKMÉRET</a>
                                </div>
                                <div>
                                    <form action="ferfi.html" method="get" enctype="multipart/form-data" autocomplete="off">
                                        <div><label class="container2"><input type="checkbox" name="f26">26" <span class="checkmark"></span></label></div><br>
                                        <label class="container2"><input type="checkbox" name="f27,5">27"<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="f29">29"<span class="checkmark"></span></label><br>

                                    </form>
                                </div>
                            </li>
                            <li >
                                <div>
                                    <a style="color: white;" >TÍPUS</a>
                                </div>
                                <div>
                                    <form action="ferfi.html" method="get" enctype="multipart/form-data" autocomplete="off">
                                        <label class="container2"><input type="checkbox" name="fMTB">MTB KERÉKPÁR<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="fvarosi">VÁROSI KERÉKPÁR<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="forszag">ORSZÁGÚTI KERÉKPÁR<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="fcrusier">CRUISER KERÉKPÁR<span class="checkmark"></span></label><br>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </th>

            </table>
            <div style="width: 75%; background-color: #EBECEE; border-radius: 30px; display: inline-block;">
                <div>
                    <section class="container">
                        <article class="card">
                            <div class="imgBox">
                                <img src="../img/ferfi/mtb1.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>ROCKRIDER MTB KERÉKPÁR</h2>
                                <h3>99 990 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>26</span>
                                    <span>27</span>
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
                                <img src="../img/ferfi/mtb2.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>ROCKRIDER MTB E.KERÉKPÁR</h2>
                                <h3>630 000 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>27</span>
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
                                <img src="../img/ferfi/orszag1.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>TRIBAN ORSZÁGÚTI KERÉKPÁR</h2>
                                <h3>229 290 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>27</span>
                                    <span>29</span>
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
                                <img src="../img/ferfi/orszag2.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>TRIBAN ORSZÁGÚTI KERÉKPÁR</h2>
                                <h3>229 290 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>27</span>
                                    <span>29</span>
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
                                <img src="../img/ferfi/orszag3.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>VAN RYSEL ORSZÁGÚTI KERÉKPÁR</h2>
                                <h3>720 990 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>27</span>
                                    <span>29</span>
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
                                <img src="../img/ferfi/crusier1.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>CSEPEL CRUSIER</h2>
                                <h3>78 930 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>26</span>
                                    <span>27</span>
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
                                <img src="../img/ferfi/crusier2.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>CSEPEL CRUSIER</h2>
                                <h3>89 780 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>26</span>
                                    <span>27</span>
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
                                <img src="../img/ferfi/varos1.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>ELOPS E.KERÉKPÁR</h2>
                                <h3>250 000 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>27</span>
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
                                <img src="../img/ferfi/varos2.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>ELOPS VÁROSI KERÉKPÁR</h2>
                                <h3>78 920 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>27</span>
                                    <span>29</span>
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
                                <img src="../img/ferfi/varos3.png" alt="termék képe">
                            </div>
                            <div class="contentBox">
                                <h2>ELOPS VÁROSI KERÉKPÁR</h2>
                                <h3>87 350 Ft</h3>
                                <div class="size">
                                    <h3>Méret :</h3>
                                    <span>27</span>
                                    <span>29</span>
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
