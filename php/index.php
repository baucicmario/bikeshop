<?php
    session_start();
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
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
        <?php
            include "../php/header.php";
        ?>
    </header>
    <main>
        <hr/>
       <div>
           <section>
                    <table class="promotable">
                        <tr>
                            <th style="width: 20%; text-align: left;">
                                <a href="https://www.ktm.com/en-hu.html">
                                    <img class="promo" src="../img/PROMO.jpg" alt="kiemelt Termékre">
                                </a>
                            </th>
                            <th style="text-align: left; padding-left: 10px;color: #FFCD30;">
                                <div>
                                    <div>
                                        <a style="font-size: 42px; color: #FFCD30;" class="promop">Akció minden KTM mountainbikera!</a>
                                        <div style="text-align: center;">
                                            <p>AKÁR 150000 Ft ért</p>
                                        </div>
                                    </div>
                                </div>
                            </th>

                        </tr>

                    </table>
           </section>
       </div>
        <hr/>

        <table class="categorytable">
            <tr>
                <th class="graybox">
                    <a href="ferfi.php">
                        <img class="image" src="../img/man_on_bike.jpg" alt="kép">
                    </a>
                </th >
                <th class="graybox">
                    <a href="no.php">
                        <img class="image" src="../img/woman_on_bike.jpg" alt="kép">
                    </a>
                </th>
                <th class="graybox">
                    <a href="gyerek.php">
                    <img class="image" src="../img/kid_on_bike.jpg" alt="kép">
                </a></th>
            </tr>
            <tr style="background-color:#FFCD30;">
              <td style="border-radius: 30px;">Férfi</td>
              <td style="border-radius: 30px;">Női</td>
              <td style="border-radius: 30px;">Gyerek</td>
            </tr>
          </table>
    </main>
    <?php
        include "../php/footer.php";
    ?>


</body>
</html>
