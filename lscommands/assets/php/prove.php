<?php

    //Recoguida de datos
    $key = $_POST["search"];
    $dir = 'C:\xampp\htdocs\lscommands\commands\bash\allcommands.txt';
    

    if(!empty($key)) {
        
        //Quita el espacio
        $key = trim($key," ");
        
        //Convierte en minusculas la palabra a buscar y assigna el "$ ", para diferenciar de las otras menciones
        $key = strtolower("$ $key");
        
        header('Content-Type: text/plain');
        $content = file_get_contents($dir);
        $pattern = preg_quote($key, '/');
        $pattern = "/^.*$pattern.*\$/m";
        
        //
        if(preg_match_all($pattern,$content,$matches)) {
            
            //Convierte el array en string i a medida que lo va haciendo, es decir, encontrando la frase hace un salto de línea
            $mostrar = implode("<br>",$matches[0]);
            
            echo $mostrar;
            
        }
    }

?>