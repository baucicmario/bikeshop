<?php
    session_start();
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
    <div class="loginpage">
        <form action="regisztracio.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div>
                <label><input class="inputbox" type="email" name="email" placeholder="email@email.hu"></label><br>
                <div>Hali</div>
            </div>
            <div>
                <label><input class="inputbox" type="text" name="userName" placeholder="Felhasználónév"></label><br>
                <div>Hali</div>
            </div>
            <div>
                <label><input class="inputbox" type="text" name="firstName" placeholder="Vezetéknév"></label>
                <div>Hali</div>
            </div>
            <div>
                <label><input class="inputbox" type="text" name="lastName" placeholder="Keresztnév"></label><br>
                <div>Hali</div>
            </div>
            <div>
                <label><input class="inputbox" type="password" name="jelszo" placeholder="Jelszó"></label><br>
                <div>Hali</div>
            </div>
            <div>
                <label><input class="inputbox" type="password" name="jelszo2" placeholder="Jelszó újra"></label><br>
                <div>Hali</div>
            </div>
            <label><input hidden type="hidden" name="profilPicture" value="default.jpg"></label>
            <label><input class="headerbutton" type="submit" name="regisztracio" value="Regisztráció"></label>
        </form>
    </div>
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
                    $errors[] = "Ezzel az emaillel már van regisztrált fiók!";
                }

                if($fiok["userName"] === $userName){
                    $errors[] = "A felhasználónév már foglalt!";
                }
            }

            if(strlen($jelszo) < 5) {
                $errors[] = "A jelszó túl rövid!";
            }

            if(!preg_match('/[A-Za-z]/',$jelszo) || !preg_match('/[0-9]/',$jelszo)){
                $errors[] = "A jelszónak betűt és számot is tartalmaznia kell!";
            }

            if($jelszo !== $jelszo2) {
                $errors[] = "A két jelszó nem egyezik!";
            }

            if(empty($_POST["email"]) || empty($_POST["userName"]) || empty($_POST["firstName"]) || empty($_POST["lastName"]) ||
                empty($_POST["jelszo"]) || empty($_POST["jelszo"])){
                $errors = "Minden mezőt kikell tölteni!";
            }

            if(empty($errors)){
                $data = [
                    "email"=>$email,
                    "userName"=>$userName,
                    "firstName"=>$firstName,
                    "lastName"=>$lastName,
                    "jelszo"=>$jelszo,
                    "profilPicture"=>$profilPicture
                ];

                saveuser("../user/user.txt", $data);
            } else {
                foreach ($errors as $err) {
                    echo $err . "<br>";
                }
            }

        }
    ?>
</main>
<?php
include "../php/footer.php";
?>
</body>
</html>
