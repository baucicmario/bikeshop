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

?>
