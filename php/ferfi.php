<?php
    session_start();
    include "../php/kozos.php";
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
<style>
    <?php
    include "../css/headerfooter.css";
    include "../css/catalog.css";
    ?>
</style>
<header>
    <?php
    include "../php/header.php";
    ?>
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
                                    <form action="ferfi.php" method="get" enctype="multipart/form-data" autocomplete="off">
                                        <label><input type="submit" class="szuro" name="szuro" value="Szűrés" ></label>
                                        <div>
                                            <a style="color: white;">KERÉKMÉRET</a>
                                        </div>
                                        <div><label class="container2"><input type="checkbox" name="meret[]" value="26">26" <span class="checkmark"></span></label></div><br>
                                        <label class="container2"><input type="checkbox" name="meret[]" value="27">27"<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="meret[]" value="29">29"<span class="checkmark"></span></label><br>
                                        <div>
                                            <a style="color: white;" >TÍPUS</a>
                                        </div>
                                        <label class="container2"><input type="checkbox" name="tipus[]" value="mtb">MTB KERÉKPÁR<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="tipus[]" value="varos">VÁROSI KERÉKPÁR<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="tipus[]" value="orszag">ORSZÁGÚTI KERÉKPÁR<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="tipus[]" value="cru">CRUISER KERÉKPÁR<span class="checkmark"></span></label><br>
                                    </form>
                                </div>
            </table>
            <?php
            if(isset($_GET["szuro"]) && !empty($_GET["szuro"])){
                if(!empty($_GET["meret"])) {
                    $meret = $_GET["meret"];
                } else {
                    $meret = [];
                }
                if(!empty($_GET["tipus"])) {
                    $tipus = $_GET["tipus"];
                } else {
                    $tipus = [];
                }
                filter("../bikes/ferfi.txt", $meret, $tipus);
            } else {
                $meret=[];

                ?>
                <?php screenbikes("../bikes/ferfi.txt"); }?>
        </div>
    </div>
</main>
<?php
include "../php/footer.php";
?>

</body>
</html>
