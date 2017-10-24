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
								var error = inputArray[ipt].placeholder + ' is required.';
								jQuery( '#contactform') .parent() .find( 'span.error').show();
								
								
								document .getElementById('contactform').reset();

								jQuery( '#contactform') .parent() .find( '.box') .show(); 
								jQuery( '#contactform') .parent() .find( '.success_box').hide(); 
								jQuery( '#contactform') .parent() .find( '.error') .fadeIn( 'fast');
								jQuery( 'html, body') .animate( { scrollTop : jQuery( '#contactform') .offset().top - 140 }, 'slow');
								jQuery( '#contactform') .parent() .find( '.success_box') .delay( 5000) .fadeOut( 1000); 

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
										contact_subject : jQuery( '#contact_subject') .val(),
										message : jQuery( '#message') .val(),
										formname : 'contact_form',
										formtype : 'contactf'
									},
									function() {
										jQuery( '#contactform .loading') .animate(
												{
													opacity : 0
												},
												250);

										document .getElementById('contactform').reset();

          								jQuery( '#contactform') .parent() .find( '.error') .hide();

										jQuery( '#contactform') .parent() .find( '.box') .hide(); 
										jQuery( '#contactform') .parent() .find( '.success_box') .fadeIn( 'fast');
										jQuery( 'html, body') .animate( { scrollTop : jQuery( '#contactform') .offset().top - 100 }, 'slow');
										jQuery( '#contactform') .parent() .find( '.success_box') .delay( 5000) .fadeOut( 1000); 
										});

							return false;
						});
					});

			// jQuery('#form_contact_form_widget_001').validationEngine('init');
