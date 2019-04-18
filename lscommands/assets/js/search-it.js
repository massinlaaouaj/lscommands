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
                        console.log("<p class='content'>mayus</p>");
                        $('#mayus').html("<b><p class='content'>ALERT MAYUS DETECT</p></b>");
                    }
                    
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