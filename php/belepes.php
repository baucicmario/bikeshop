<?php
    session_start();
    include "kozos.php";
    if(isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
        header("Location: ../php/profil.php");
    }
    $err = true;
    $msg = "";

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Belépés - Kerékpár webshop</title>
    <link href="../css/belepes.css" rel="stylesheet">
    <link href="../css/headerfooter.css" rel="stylesheet">
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
                <a href="index.php">Főoldal</a>
                <a href="ferfi.php">Férfi kerékpár</a>
                <a href="no.php">Női kerékpár</a>
                <a href="gyerek.php">Gyerek kerékpár</a>
            </div>
        </div>
    </div>
</header>

<main>

    <?php
    $accounts = loaduser("../user/user.txt");

    $user = "";
    $password = "";
    $success_login = false;

    if (isset($_POST["login"])) {

        $user = $_POST["userName"];
        $password = $_POST["jelszo"];
        $GLOBALS["msg"] = "Hibás felhasználónév vagy jelszó!";
        $user_data = array();


        foreach ($accounts as $account) {
            if ($user === $account["userName"] && $password === $account["jelszo"]) {
                $user_data["userName"] = $account["userName"];
                $user_data["profilPicture"] = $account["profilPicture"];
                $GLOBALS["err"] = false;
                $success_login = true;
                break;
            }
        }

        if($success_login){
            $_SESSION["user"] = $user_data;
            header("Location: ../php/profil.php");
        }

    }

    ?>
    <style>
        <?php include "../css/belepes.css"; ?>
    </style>
    <?php if($GLOBALS["err"] && isset($_POST["login"])):?>
    <div class="alert">
        <?php echo $GLOBALS["msg"] ?>
    </div>
    <?php endif; ?>

    <div class="loginpage">
        <form  action="belepes.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <label><input class="inputbox" type="text" placeholder="Felhasználónév" name="userName"></label><br>
            <label><input class="inputbox" type="password" placeholder="Jelszó" name="jelszo"></label><br>
            <label><input class="headerbutton" type="submit" name="login" value="Bejelentkezés"></label><br>
        </form>

        <button onclick="window.location.href='../php/regisztracio.php'" class="headerbutton">Regisztráció</button><br>
    </div>
</main>
<?php
    include "../php/footer.php";
?>
</body>
</html>
