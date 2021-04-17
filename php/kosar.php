<?php
    session_start();
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

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
    <?php
    include "../php/header.php";
    ?>

</header>

<main>
    <div>
        <div>
            <section class="container" style="padding-left: 180px">
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
<?php
include "../php/footer.php";
?>
</body>
</html>

