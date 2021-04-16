<?php
    session_start();
    if(!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
        header("Location: ../php/belepes.php");
    }
    $_SESSION["currentpage"] = "profil.php";
?>

<header>
    <?php
    include "../php/header.php";
    include "kozos.php";
    ?>
    <style>
        <?php include "../css/headerfooter.css"; ?>
    </style>
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

<?php
    echo $_SESSION["user"]["userName"];


?>
    <img src="<?php echo $_SESSION["user"]["profilPicture"];?>">
    <button onclick="window.location.href='../php/kijelentkezes.php'" class="headerbutton">Kijelentkezés</button>

<?php
include "../php/footer.php";
?>
