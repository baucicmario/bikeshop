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

?>
