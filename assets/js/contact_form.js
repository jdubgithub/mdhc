jQuery('#contactform').on('click', function(evt) {
	alert('hi again');	
});

jQuery(function() {

	/*
		    jQuery('#contactform').on('click', {function() { 
		    	  alert('hi');
		    }}).jQuery('#contactform').validationEngine('init');
		    */

			// jQuery('#contactform a#contact_form_formsend')
			
			jQuery('#contact_form_formsend').on('click', function(clkevt) {
						
						// var form_builder_url = jQuery('#contact_form_url').val();
				
				console.log(clkevt);
						
						var form_builder_url = 'sendmail.php'

							var inputArray = jQuery('#contactform').find('input');

						for (ipt in inputArray) {
							if (inputArray[ipt].required && inputArray[ipt].value === '') {
							    
		jQuery( '#contactform') .parent() .find( '.send_btn').fadeOut(3000); 
	//jQuery( '#contactform') .parent() .find( '.send_btn') .delay( 4000) .hide();					    
								var error = inputArray[ipt].placeholder + ' is required.';
								
								jQuery( '#contactform') .parent() .find( 'span.error').show();

/*								
								document .getElementById('contactform').reset();
*/
								jQuery( '#contactform') .parent() .find( '.box') .show(); 
								jQuery( '#contactform') .parent() .find( '.success_box').hide(); 
								jQuery( '#contactform') .parent() .find( '.error') .fadeIn( 'fast');
								jQuery( 'html, body') .animate( { scrollTop : jQuery( '#contactform') .offset().top - 185 }, 'slow');
								jQuery( '#contactform') .parent() .find( '.success_box') .delay( 7000) .fadeOut( 1000); 

								return;
							}
						}

							jQuery.post(
									form_builder_url,
									{
										PtFName : jQuery('#PtFName').val(), 
										PtLName: jQuery( '#PtLName').val(),
										DOB : jQuery( '#DOB').val(),
										Phone : jQuery( '#Phone').val(),
										Email : jQuery('#Email').val(),
										Subject : jQuery( '#Subject') .val(),
										Message : jQuery( '#Message') .val(),
										formname : 'contact_form',
										formtype : 'contactf'
									},
									function() {
		
		document .getElementById('contactform').reset();								
		jQuery( '#contactform') .parent() .find( '.send_btn') .hide(); 								
										jQuery( '#contactform .loading') .animate(
												{
													opacity : 0
												},
												250);
										
          								jQuery( '#contactform') .parent() .find( '.error') .hide();

										jQuery( '#contactform') .parent() .find( '.box') .hide(); 
									
										jQuery( '#contactform') .parent() .find( '.success_box') .fadeIn( 'fast');
										
								jQuery( 'html, body') .animate( { scrollTop : jQuery( '#contactform') .offset().top - 185 }, 'slow');
										
										jQuery( '#contactform') .parent() .find( '.success_box') .delay( 5000) .fadeOut( 1000); 

										jQuery( '#contactform') .parent() .find( '.send_btn') .delay( 5000) .fadeIn( 1000);

										});
							return false;
						});
					});



			// jQuery('#form_contact_form_widget_001').validationEngine('init');
			
