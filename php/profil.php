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
</header>
<?php

    $felh= $_SESSION["user"]["userName"];
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
      $extensions= array("jpeg","jpg","png");
      
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"../user/".$file_name);
          edituser("../user/user.txt", $felh,"profilPicture",$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

?>

<body >
   <div style="background-color: #3E4750; height: 500px; margin: auto;padding: 150px 0;border-radius: 18px; margin-top: 20px;">
        
        <div style="margin: auto;border-radius: 72px;background-color: #252D30; width:40%;padding:30px;">
            <img style="max-width:200px;max-height:200px;border-radius: 12px;" src="../user/<?php echo $_SESSION["user"]["profilPicture"];?>">
            <h2 style="color: white;">Profilkép csere</h2>
            <form style="color: white;border-radius: 12px;background-color: #FFCD30; padding: 15 0;"action = "" method = "POST" enctype = "multipart/form-data">
                <input type = "file" name = "image" />
                <input type = "submit"/>
            </form>
            <button onclick="window.location.href='../php/kijelentkezes.php'" class="headerbutton">Kijelentkezés</button>
        </div>
    </div>

</body>



<?php
include "../php/footer.php";
?>
