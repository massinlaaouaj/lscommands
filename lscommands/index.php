<!DOCTYPE html>
<html>
    <head>
        <title>LS COMMANDS</title>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/style/main.css">
        <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon" borde="0">
    </head>
    
    <script src="assets/js/terminal_bash.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
    
    <script src="assets/js/search-it.js"></script>
    <script src="assets/js/colors.js"></script>
        
    <body>
        
        <div class="table">
            <table>
                <tr>
                    <td style="background-color: white; width: 40px; height: 20px" onclick="background('white')"></td>
                    <td style="background-color: black ; width: 40px; height: 20px" onclick="background('black')"></td>
                    <td style="background-color: gray; width: 40px; height: 20px" onclick="background('gray')"></td>
                    <td style="background-color: #F7F55F; width: 40px; height: 20px" onclick="background('#F7F55F')"></td>
                    <td style="background-color: #66a1ee; width: 40px; height: 20px" onclick="background('#66a1ee')"></td>
                </tr>
            </table>
        
            <select name="language" id="language" class="select">
                <option selected value="bash">Bash</option>
                <option value="cmd">Windows CMD</option>
		<option value="html">HTML</option>
		<option value="css">CSS</option>
		<option value="all">I don't know, search in all libraries</option>
            </select>
        </div>
        
        
        
        <h1 class="titulo">LS COMMANDS</h1>
        
        <div class="searchbar">
            <form>
                <input id="buscar_bar" name="searchbar" class="search" type="search" placeholder="Write here your command to search" name="search" autofocus>
            </form>
        </div>
        
        <div id="mayus" class="searchbar"></div>
        
        <div class="searchbar">
            
            <div id="container" class="content"></div>
        </div>
        
        <a onclick="mostrar()" id="img-float" class="cmd-float" href="#"><img class="image-cmd" src="img/cmd%20logo.png" width="45px" height="40px"></a>
        
        <div id="consola">
            <object class="terminal_bash" data="http://cb.vu" width="300" height="300"></object>
        </div>
    </body></html>
