
$(
    document).ready(function() {
        $('#buscar_bar').keyup(function(e) {
            let search = $('#buscar_bar').val();
            
            if(e == 13){
      return false;
    }
            
            $.ajax({
                url: 'assets/php/prove.php',
                type: 'POST',
                data: { search },
                success: function(response) {
                    $('#container').html(response);
                }
            })
            
        })
    }
);