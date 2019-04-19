<?php

    //Recoguida de datos
    $key = $_POST["search"];
    $dir = 'C:\xampp\htdocs\lscommands\commands\bash\allcommands.txt';
    
    if (!empty($key)) {
        
        //Para delimitar con '/', i guardarlo en un array, cada vez que se divide
        $key = explode('/',$key);
        
        //Contar cuantos valores tiene el array
        $length = count($key);
        
        //Bucle para recorrer el array
        for ($i=0;$i < $length;$i++) {
        
            //Quita el espacio
            $key[$i] = trim($key[$i]," ");
            
            //Convierte en minusculas la palabra a buscar y assigna el "$ ", para diferenciar de las otras menciones
            $key[$i] = strtolower("$ $key[$i]");
            
            header('Content-Type: text/plain');
            $content = file_get_contents($dir);
            $pattern = preg_quote($key[$i], '/');
            $pattern = "/^.*$pattern.*\$/m";
            
            if(preg_match_all($pattern,$content,$matches)) {
            
                //Convierte el array en string i a medida que lo va haciendo, es decir, encontrando la frase hace un salto de línea
                $mostrar = implode("<br>",$matches[0]);

                echo $mostrar . "<br>";
            
            }
        }
    }
?>