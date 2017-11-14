function clickStaff(employee, title) {
	console.log('clicked employee: ', employee);

    // var data = '<div id="bk-staffmodal" class="staff-content">' +
             
    var data = '<video width="420" height="340" id="bkvideo" controls autoplay controlsList="nodownload">' +
                '<source src="videos/' + employee + '.mp4" type="video/mp4"></source></video> ';
    
     jQuery( function() {
       jQuery(data).dialog({
             show: {effect: 'fade', duration: 500},
    	     hide: {effect: 'fade', duration: 500},
    	     height: 440,
    	     width: 697,
    	     title: title,
             resizable: false,
             draggable: false,
    	     modal: true
        });
     } );
    
    jQuery('#bkvideo').on('click', function(evnparam) {
    	    evnparam.preventDefault();
    	    evnparam.stopPropagation();
    	    jQuery(this).show()
    	    console.log('bkvideo clicked', evnparam);
    	    return false;
    });
               
}

jQuery(function() {
    setupRegHandler();
});

function setupRegHandler() {

	jQuery('input#submit_reg').on('click', function(clkevt) {
		console.log(clkevt);
		var form_builder_url = 'pt-reg-login.php'

		var inputArray = jQuery('#formRegister').find('input');

		jQuery( '#formRegister').parent().find( '.error').text('Please complete all the form fields.');

		for (ipt in inputArray) {
     		console.log('ipt = ', inputArray[ipt]);

			if ((inputArray[ipt].required && jQuery(inputArray[ipt]).val() === '') ||
				(inputArray[ipt].attributes && inputArray[ipt].attributes.regex && !jQuery(inputArray[ipt]).val().match(inputArray[ipt].attributes.regex))) {
				console.log('ipt = ', inputArray[ipt]);

				jQuery( '#formRegister').parent().find( '.success_box').show(); 
				jQuery( '#formRegister').parent().find( '.success_box .box').hide(); 
				jQuery( '#formRegister').parent().find( '.error').show();

				jQuery( '#formRegister').parent().find( '.error').append('<br>Invalid field: ' + inputArray[ipt].name);

				jQuery( 'html, body').animate( { scrollTop : jQuery( '#formRegister') .offset().top - 140 }, 'slow');

				clkevt.preventDefault();

				return false;
			}
		}

		jQuery.post(form_builder_url,
				{
			PtFName : jQuery('#first_name').val(), 
			PtLName: jQuery( '#last_name').val(),
			DOB : jQuery( '#dob').val(),
			Phone : jQuery( '#phone').val(),
			Email : jQuery('#email_address').val(),
			Password : jQuery('#password').val(),
			formname : 'formRegister'
				},
				function() {
					jQuery( '#formRegister .loading') .animate(
							{
								opacity : 0
							},
							250);

					document .getElementById('formRegister').reset();

     				jQuery( '#formRegister').parent().find( '.success_box').show(); 
     				jQuery( '#formRegister').parent().find( '.success_box .error').hide(); 
					jQuery( '#formRegister') .parent() .find( '.box') .show(); 
					jQuery( 'html, body') .animate( { scrollTop : jQuery( '#formRegister') .offset().top - 300 }, 'fast');
				}
		);
		clkevt.preventDefault();
		return false;
	});
}


function clickVid(employee, title) {
	console.log('clicked employee: ', employee);
             
    var data = '<video width="420" height="340" id="bkvideo" controls autoplay controlsList="nodownload">' +
                '<source src="PtPortal/Videos2/' + employee + '.mp4" type="video/mp4"></source></video> ';
    
     jQuery( function() {
       jQuery(data).dialog({
             show: {effect: 'fade', duration: 500},
    	     hide: {effect: 'fade', duration: 500},
    	     height: 440,
    	     width: 697,
    	     title: title,
             resizable: false,
             draggable: false,
    	     modal: true
        });
     } );
    
    jQuery('#bkvideo').on('click', function(evnparam) {
    	    evnparam.preventDefault();
    	    evnparam.stopPropagation();
    	    jQuery(this).show()
    	    console.log('bkvideo clicked', evnparam);
    	    return false;
    });
               
}



function clickAudios(employee, title) {
	console.log('clicked employee: ', employee);
             
    var data = '<video width="420" height="340" id="bkvideo" controls autoplay controlsList="nodownload">' +
                '<source src="PtPortal/Audios/' + employee + '.mp4" type="video/mp4"></source></video> ';
    
     jQuery( function() {
       jQuery(data).dialog({
             show: {effect: 'fade', duration: 500},
    	     hide: {effect: 'fade', duration: 500},
    	     height: 440,
    	     width: 697,
    	     title: title,
             resizable: false,
             draggable: false,
    	     modal: true
        });
     } );
    
    jQuery('#bkvideo').on('click', function(evnparam) {
    	    evnparam.preventDefault();
    	    evnparam.stopPropagation();
    	    jQuery(this).show()
    	    console.log('bkvideo clicked', evnparam);
    	    return false;
    });
               
}









