<?php

    function loaduser ($filename) {
        $user = [];

        $file = fopen($filename, 'r');

        while (($line = fgets($file)) !== false) {
            $user[] = unserialize($line);
        }

        fclose($file);
        return $user;
    }

    function saveuser ($fileName, $user) {
        $file = fopen($fileName,"a");

        fwrite($file, serialize($user)."\n");

        fclose($file);
    }

    function be ($fileName, $termek) {
        $file = fopen($fileName, "a");

        fwrite($file, serialize($termek)."\n");
        fclose($file);
    }

    function edituser ($fileName, $user,$tipus,$adat) {
        $file = fopen($fileName,"r");

        while (($line = fgets($file)) !== false) {
            $users[] = unserialize($line);
        }

        file_put_contents("$fileName", "");

        foreach ($users as $fiok) {

            if($fiok["userName"] === $user) {

                $fiok["$tipus"]="$adat";
            }

            saveuser("../user/user.txt", $fiok);
        }
}

    function loadbike ($filename) {
        $bike = [];

        $file = fopen($filename, 'r');

        while (($line = fgets($file)) !== false) {
            $bike[] = unserialize($line);
        }

        fclose($file);
        return $bike;
    }
?>
<?php function screenbikes ($file) { ?>
    <div style="width: 75%; background-color: #EBECEE; border-radius: 30px; display: inline-block">
            <?php
            $bikes = loadbike($file);
            foreach ($bikes as $bike) {
                ?>

                <section class="container">
                    <article class="card">
                        <div class="imgBox">
                            <img src=<?php echo $bike["kep"]; ?> alt="termék képe">
                        </div>
                        <div class="contentBox">
                            <h2><?php echo $bike["nev"];?></h2>
                            <h3><?php echo $bike["ar"]; ?></h3>
                            <div class="size">
                                <h3>Méret :</h3>
                                <?php foreach ($bike["meret"] as $item) { ?> <span><?php echo $item; ?></span><?php } ?>
                            </div>
                            <div class="color">
                                <h3>Szín :</h3>
                                <?php
                                for($i = 0; $i < $bike["szin"];$i++){
                                    ?> <span></span> <?php } ?>
                            </div>
                            <a href="#" >KOSÁRBA</a>
                        </div>
                    </article>
                </section>
            <?php } ?>
        </div>
    </div>
<?php } ?>

<?php function filter ($file, $meret, $tipus) { ?>
    <div style="width: 75%; background-color: #EBECEE; border-radius: 30px; display: inline-block">
        <?php
        $MERET=false;
        $TIPUS=false;
        $bikes = loadbike($file);
        if(is_array($meret) || is_object($meret)) $MERET=true;
        if(is_array($tipus) || is_object($tipus)) $TIPUS=true;
                if ($MERET){
                    foreach ($bikes as $bike){
                        foreach ($bike["meret"] as $bm){
                            foreach ($meret as $m) {
                                if($bm === $m){
                                    ?>
                                    <section class="container">
                                    <article class="card">
                                        <div class="imgBox">
                                            <img src=<?php echo $bike["kep"]; ?> alt="termék képe">
                                        </div>
                                        <div class="contentBox">
                                            <h2><?php echo $bike["nev"];?></h2>
                                            <h3><?php echo $bike["ar"]; ?></h3>
                                            <div class="size">
                                                <h3>Méret :</h3>
                                                <?php foreach ($bike["meret"] as $item) { ?> <span><?php echo $item; ?></span><?php } ?>
                                            </div>
                                            <div class="color">
                                                <h3>Szín :</h3>
                                                <?php
                                                for($i = 0; $i < $bike["szin"];$i++){
                                                    ?> <span></span> <?php } ?>
                                            </div>
                                            <a href="#" >KOSÁRBA</a>
                                        </div>
                                    </article>
                                    </section><?php
                                }
                            }
                        }
                    }
                }
                if ($TIPUS){
                    if(empty($termek)){
                        foreach ($bikes as $bike){
                            foreach ($tipus as $t){
                                if($bike["tipus"] === $t){
                                    ?>
                                    <section class="container">
                                    <article class="card">
                                        <div class="imgBox">
                                            <img src=<?php echo $bike["kep"]; ?> alt="termék képe">
                                        </div>
                                        <div class="contentBox">
                                            <h2><?php echo $bike["nev"];?></h2>
                                            <h3><?php echo $bike["ar"]; ?></h3>
                                            <div class="size">
                                                <h3>Méret :</h3>
                                                <?php foreach ($bike["meret"] as $item) { ?> <span><?php echo $item; ?></span><?php } ?>
                                            </div>
                                            <div class="color">
                                                <h3>Szín :</h3>
                                                <?php
                                                for($i = 0; $i < $bike["szin"];$i++){
                                                    ?> <span></span> <?php } ?>
                                            </div>
                                            <a href="#" >KOSÁRBA</a>
                                        </div>
                                    </article>
                                    </section><?php
                                }
                            }

                        }
                    }
            }
        ?>
    </div>
    </div>
<?php } ?>

