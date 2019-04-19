$(document).ready(function() {
    
        //
        $('#buscar_bar').keyup(function(e) {
            let search = $('#buscar_bar').val();
            
            var mayus=/[A-Z]/g;
            
            $.ajax({
                url: 'assets/php/prove.php',
                type: 'POST',
                data: { search },
                success: function(response) {
                    
                    //Para mostrar y detectar si ha escrito una letra en mayusculas
                    if (search.match(mayus)) {
                        
                        //Mostrar el mensaje de alerta cuando la letra es mayuscula y printarlo en el div con id "mayus"
                        $('#mayus').html("<b><p class='content'>ALERT MAYUS DETECT</p></b>");
                        
                      //Se deja en blanco si no hay mayus, para que no quede el mensaje cuando borremos la letra mayus
                    } else{
                        
                        $('#mayus').html("");
                    }
                    
                    //Printar en el div con id "container" el resultado del post, que pedimos al prove.php
                    $('#container').html(response);
                }
            })
            
        })
    
        //Para deshabilitar la teclat Enter
        $('#buscar_bar').keypress(function(e) {
            if (e.which == 13) {
                return false;
            }
        });
    }
);