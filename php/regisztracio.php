<?php
    session_start();
    $emailErr=false;
    $fnevErr=false;
    $jelszoErr=false;
    $jelszoErr2=false;
    $ures=false;
    $sikeres=false;
    include "../php/kozos.php";
    if(isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
        header("Location: ../php/profil.php");
    }
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció - Kerékpár webshop</title>
    <link href="../css/regisztracio.css" rel="stylesheet">
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
                <a style="<?= ($activePage == 'index') ? 'background-color: #FFCD30; border-radius: 12px':''; ?>" href="index.php">Főoldal</a>
                <a style="<?= ($activePage == 'ferfi') ? 'background-color: #FFCD30; border-radius: 12px':''; ?>" href="ferfi.php">Férfi kerékpár</a>
                <a style="<?= ($activePage == 'no') ? 'background-color: #FFCD30; border-radius: 12px':''; ?>" href="no.php">Női kerékpár</a>
                <a style="<?= ($activePage == 'gyerek') ? 'background-color: #FFCD30; border-radius: 12px':''; ?>" href="gyerek.php">Gyerek kerékpár</a>
            </div>
        </div>
    </div>
</header>

<main>
    <?php
    $fiokok = loaduser("../user/user.txt");

    $errors = [];
    $email = "";
    $userName = "";
    $firstName = "";
    $lastName = "";
    $jelszo = "";
    $jelszo2 = "";
    $profilPicture = "";

    if(isset($_POST["regisztracio"])) {
        $email = $_POST["email"];
        $userName = $_POST["userName"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $jelszo = $_POST["jelszo"];
        $jelszo2 = $_POST["jelszo2"];
        $profilPicture = "../user/" . $_POST["profilPicture"];

        foreach ($fiokok as $fiok) {
            if($fiok["email"] === $email) {
                $emailErr=true;
            }

            if($fiok["userName"] === $userName){
                $fnevErr=true;
            }
        }

        if(strlen($jelszo) < 5) {
            $fnevErr=true;
        }

        if(!preg_match('/[A-Za-z]/',$jelszo) || !preg_match('/[0-9]/',$jelszo)){
            $jelszoErr=true;
        }

        if($jelszo !== $jelszo2) {
            $jelszoErr2=true;
        }



        if(!$emailErr && !$jelszoErr && !$fnevErr && !$jelszoErr2 && !$ures){

            $data = [
                "email"=>$email,
                "userName"=>$userName,
                "firstName"=>$firstName,
                "lastName"=>$lastName,
                "jelszo"=>$jelszo,
                "profilPicture"=>$profilPicture
            ];
            $sikeres=true;
            saveuser("../user/user.txt", $data);
        } else {
            if(empty($_POST["email"]) || empty($_POST["userName"]) || empty($_POST["firstName"]) || empty($_POST["lastName"]) ||
                empty($_POST["jelszo"]) || empty($_POST["jelszo"])){
                $ures=true;
            }
        }

    }
    ?>
    <div class="loginpage">
        <form action="regisztracio.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div>
                <?php if(isset($_POST["regisztracio"]) && $sikeres) : ?> <h2>Sikeres regisztráció!</h2><?php endif; ?>
                <?php if(isset($_POST["regisztracio"]) && $ures) : ?> <div class="alert" >Minden mezőt kikell tölteni!</div><?php endif; ?>
                <label><input class="inputbox" type="email" name="email" placeholder="email@email.hu"></label><br>
                <?php if(isset($_POST["regisztracio"]) && $emailErr) : ?> <div class="alert">Ezzel az emaillel már van regisztrált fiók!</div><?php endif; ?>
            </div>
            <div>
                <label><input class="inputbox" type="text" name="userName" placeholder="Felhasználónév"></label><br>
                <?php if(isset($_POST["regisztracio"]) && $fnevErr) : ?> <div class="alert">A felhasználónév már foglalt!</div><?php endif; ?>
            </div>
            <div>
                <label><input class="inputbox" type="text" name="firstName" placeholder="Vezetéknév"></label>
            </div>
            <div>
                <label><input class="inputbox" type="text" name="lastName" placeholder="Keresztnév"></label><br>
            </div>
            <div>
                <label><input class="inputbox" type="password" name="jelszo" placeholder="Jelszó"></label><br>
                <?php if(isset($_POST["regisztracio"]) && $jelszoErr) : ?> <div class="alert">A jelszónak legalább 6 hosszúnak kell lennie, és számot és betűt is tartalmaznia kell!</div><?php endif; ?>
            </div>
            <div>
                <label><input class="inputbox" type="password" name="jelszo2" placeholder="Jelszó újra"></label><br>
                <?php if(isset($_POST["regisztracio"]) && $jelszoErr) : ?> <div class="alert">A két jelszó nem egyezik!</div><?php endif; ?>
            </div>
            <label><input hidden type="hidden" name="profilPicture" value="default.jpg"></label>
            <label><input class="headerbutton" type="submit" name="regisztracio" value="Regisztráció"></label>
        </form>
    </div>
</main>
<?php
include "../php/footer.php";
?>
</body>
</html>
