<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);
        for($i = 0; $i <= 100; $i++){
            echo PHP_EOL;
            for($j = 0;$j <= 100; $j++){
                echo $i * $j;
            }
        }
?>

