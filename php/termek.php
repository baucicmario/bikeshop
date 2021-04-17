<?php
    include "kozos.php";
?>

<!--<form action="termek.php" method="get">
    <label>
        <input type="text" name="kep">
    </label>kep<br>
    <label>
        <input type="text" name="nev">
    </label>nev<br>
    <label>
        <input type="text" name="ar">
    </label>ar<br>
    <label>
        <input type="checkbox" name="meret[]" value="10">
    </label>10
    <label>
        <input type="checkbox" name="meret[]" value="20">
    </label>20
    <label>
        <input type="checkbox" name="meret[]" value="24">
    </label>24
    <label>
        <input type="checkbox" name="meret[]" value="26">
    </label>26
    <label>
        <input type="checkbox" name="meret[]" value="27">
    </label>27
    <label>
        <input type="checkbox" name="meret[]" value="29">
    </label>29<br>
    <label>
        <input type="text" name="szin">
    </label>szin<br>
    <label>
        <input type="radio" name="tipus" value="mtb">
    </label>mtb
    <label>
        <input type="radio" name="tipus" value="varos">
    </label>varos
    <label>
        <input type="radio" name="tipus" value="tura">
    </label>tura
    <label>
        <input type="radio" name="tipus" value="cru">
    </label>cru<br>
    <input type="submit" name="submit">
</form>-->

<?php
    $kep = "";
    $nev = "";
    $ar = "";
    $meret = [];
    $szin = 0;
    $tipus = "";



    if(isset($_GET["submit"])){
        $kep = "../img/no/".$_GET["kep"].".png";
        $nev = $_GET["nev"];
        $ar = $_GET["ar"]." Ft";
        if(isset($_GET["meret"])){
            $meret = $_GET["meret"];
        }
        $szin = $_GET["szin"];
        $tipus = $_GET["tipus"];
    }

    $data = [
        "kep"=>$kep,
        "nev"=>$nev,
        "ar"=>$ar,
        "meret"=>$meret,
        "szin"=>$szin,
        "tipus"=>$tipus
    ];

    for ($i = 0; $i < 5; $i++){
        ?> <div> egy </div> <?php
    }
?>
