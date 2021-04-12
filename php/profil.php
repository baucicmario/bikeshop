<?php
    session_start();
    if(!isset($_SESSION["user"])) {
        header("Location: ../php/belepes.php");
    }
?>

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
                <a href="index.php">Főoldal</a>
                <a href="ferfi.php">Férfi kerékpár</a>
                <a href="no.php">Női kerékpár</a>
                <a href="gyerek.php">Gyerek kerékpár</a>
            </div>
        </div>
    </div>
</header>

<?php
    echo $_SESSION["user"]["fnev"];
?>

<?php
include "../php/footer.php";
?>
