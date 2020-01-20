$(function () {
	
	
    $('.text-temporaire:visible').fadeTo(6000, 1, function() {
        $(this).fadeTo(3000, 0.9, function() {
            $(this).fadeTo(10,0.01);
        });
        $(this).hover(function() {
            $(this).fadeTo(10, 0.01);
        });
        /*$('.text-temporaire:visible').mouseout(function() {
            $(this).fadeTo(10,0.01);
        });*/
    });


    /*
     * 
     */
    $('.btn-delete-line').each(function(index, element) { 
        $(this).click(function() {
            Url = $(this).attr('ref');
            Parent =  $(this).parent('td').parent('tr');
            popup.confirm(
                { content : ' Voullez-vous supprimer ? ', 
                  default_btns : { ok : 'OUI', cancel : 'Annuler' }
                }, 
                function(param){
                  if(param.proceed){
                    document.location = Url;					
                  }
                } 
            ); 
                
                
        });
    });
    
    
    /*
     *form create util	 

    $('#pass, #pass_confirm').keyup(function() {
            if($('#pass_confirm').val() != '') {
                    if($('#pass_confirm').val() != $('#pass').val() ) {
                            $('#pwd_no_match').show();
                            $('#submit-form-util').attr('disabled', 'disabled');
                    }
                    else {
                            $('#pwd_no_match').hide(); 
                            $('#submit-form-util').removeAttr('disabled');
                    }
            }
    });
    */
    
	
});


/*
function upload_img(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#img_id').attr('src', e.target.result);
			$('#img_id').show();
		}
		reader.readAsDataURL(input.files[0]);
	}
}*/