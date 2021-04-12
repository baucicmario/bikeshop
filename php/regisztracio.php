<?php
    session_start();
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
                <a href="fooldal.html">Főoldal</a>
                <a href="ferfi.html">Férfi kerékpár</a>
                <a href="no.html">Női kerékpár</a>
                <a href="gyerek.html">Gyerek kerékpár</a>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="loginpage">
        <form action="regisztracio.html" method="post" enctype="multipart/form-data" autocomplete="off">
            <label><input class="inputbox" type="email" name="email" placeholder="email@email.hu"></label><br>
            <label><input class="inputbox" type="text" name="fnev" placeholder="Felhasználónév"></label><br>
            <label><input class="inputbox" type="text" name="fname" placeholder="Vezetéknév"></label>
            <label><input class="inputbox" type="text" name="lname" placeholder="Keresztnév"></label><br>
            <label><input class="inputbox" type="password" name="jelszo" placeholder="Jelszó"></label><br>
            <label><input class="headerbutton" type="submit" name="regisztracio" value="Regisztráció"></label>
        </form>
    </div>
</main>
<?php
include "../php/footer.php";
?>
</body>
</html>
