<?php

    //Recoguida de datos
    $language = $_POST["language"];
	
	//Comprueva que opción escoguió el usuario en el select
	switch ($language) {
		
		case "bash":
            $dir = '../../commands/bash/bash.txt';
			$symbol_before = "$ ";
			$symbol_after = "";
		break;
			
		case "cmd":
			$dir = '../../commands/WindowsCMD/cmd.txt';
			$symbol_before = "   ";
			$symbol_after = "";
		break;
		
		case "html":
			$dir = '../../commands/html/html.txt';
			$symbol_before = "&lt; ";
			$symbol_after = "";
		break;
        
        case "sql":
			$dir = '../../commands/SQL/SQL.txt';
			$symbol_before = "&quot;";
			$symbol_after = "";
		break;
        
        case "all":
			$dir = '../../commands/all_commands/all_commands.txt';
			$symbol_before = "";
			$symbol_after = "";
		break;
	}
	
    $key = $_POST["search"];
    
    //Si el usuario ha escrito algo, entra
    if (!empty($key)) {
		
        //Para delimitar con '/', i guardarlo en un array, cada vez que se divide
        $key = explode('/',$key);
        
        //Contar cuantos valores tiene el array, en el caso de detener el delimitador sumaria
        $length = count($key);
         
        //Bucle para recorrer el array
        for ($i=0;$i < $length;$i++) {
        
            //Quita el espacio
            $key[$i] = trim($key[$i]," ");
            
            //Convierte en minúsculas la palabra a buscar y assigna el simbolo correspondiente para cada lenguaje "$symbol_before" i "$symbol_after", para diferenciar de las otras menciones			
            $key[$i] = strtolower($symbol_before . $key[$i] . $symbol_after);
			
			
            header('Content-Type: text/plain');
            $content = file_get_contents($dir);
			//En caso de ser cmd, el contenido del cmd.txt, serà en minusculas
			if ($language == "cmd" || $language == "sql") {
				$content = strtolower($content);
			}
			
            $pattern = preg_quote($key[$i], '/');
            $pattern = "/^.*$pattern.*\$/m";
			
            if (preg_match_all($pattern,$content,$matches)) {
            	
                //Convierte el array en string i a medida que lo va haciendo, es decir, encontrando la frase hace un salto de línea
                $mostrar = implode("<br><br>",$matches[0]);

                echo $mostrar . "<br>";
                
            }
        }
    }
?>