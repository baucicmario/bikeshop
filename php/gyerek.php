<?php
    session_start();
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
    include "../php/kozos.php";

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
                                    <form action="../php/gyerek.php" method="get" enctype="multipart/form-data" autocomplete="off">
                                        <label><input type="submit" class="szuro" name="szuro" value="Szűrés" ></label>
                                        <div>
                                            <a>KERÉKMÉRET</a>
                                        </div>
                                        <label class="container2"><input type="checkbox" name="meret[]" value="10">10" <span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="meret[]" value="20">20"<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="meret[]" value="24">24"<span class="checkmark"></span></label><br>
                                        <div>
                                            <a>TÍPUS</a>
                                        </div>
                                        <label class="container2"><input type="checkbox" name="tipus[]" value="futo">FUTÓKERÉKPÁR<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="tipus[]" value="tri">TRICIKRI<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="tipus[]" value="bmx">BMX<span class="checkmark"></span></label><br>
                                        <label class="container2"><input type="checkbox" name="tipus[]" value="mtb">MTB KERÉKPÁR<span class="checkmark"></span></label><br>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </th>
                </tr>
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
                    filter("../bikes/gyerek.txt", $meret, $tipus);
                } else {
                    $meret=[];

            ?>
                <?php screenbikes("../bikes/gyerek.txt"); }?>
        </div>
    </div>
</main>
<?php
include "../php/footer.php";
?>

</body>
</html>
