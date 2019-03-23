<?php

    $key = $_POST["searchbar"];
    $dir = 'C:\xampp\htdocs\LSCOMMANDS\commands\bash\allcommands.txt';

    $key = "$ $key ";

    header('Content-Type: text/plain');
    $content = file_get_contents($dir);
    $pattern = preg_quote($key, '/');
    $pattern = "/^.*$pattern.*\$/m";

    if(preg_match_all($pattern, $content, $matches)) {
        
        echo implode($matches[0]);
        
    } else {
        
       echo "Command not found";
        
    }

?>