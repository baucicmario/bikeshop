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
?>
