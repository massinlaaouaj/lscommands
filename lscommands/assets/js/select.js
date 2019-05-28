$(document).ready(function() {
	
		/*$('#language').val(function() {
            //let lenguage = $(this).val();
			let lenguage = $('#language option:selected').val();
			lenguage = lenguage.toString();
            console.log("="+lenguage);
                        
            $.ajax({
                url: 'assets/php/prove.php',
				dataType: 'text',
                type: 'post',
				contentType: 'application/x-www-form-urlencoded',
				data: $(this).serialize(),
                success: function(data) {
                    console.log("-"+data);
                }
            })
            
        });*/
	
	$('#language').val(function() {
        let lenguage = $(this).serialize(); //Recongue el valor i lo guarda en la variable
        console.log("=="+lenguage); //Efectivamente lo guarda i lo veo en la consola

        $.ajax({
            url: 'assets/php/prove.php',
			dataType: 'text',
            type: "post",
			contentType: 'application/x-www-form-urlencoded',
            data: $(this).serialize(),
            success: function(data) {
                console.log("-"+data); //Hace el success correctamente
            }
        })
    });
	
	let lenguage = $('#language').val();;
	$('#language').change(function(e) {
		lenguage = $(this).val();
	});
	
	
})