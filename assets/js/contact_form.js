$('#contactform').on('click', function(evt) {
	alert('hi again');	
});

this.validateForm = function() {

		    // jQuery('#contactform').onclick({function() {

		    jQuery('#contactform').on('click', {function() { 
		    	  alert('hi');
		    }}).jQuery('#contactform').validationEngine('init');

			jQuery('#contactform a#contact_form_formsend')
			.click(
					function() {
						var form_builder_url = jQuery(
								'#contact_form_url').val();

						jQuery('#contactform .loading')
						.animate({
							opacity : 1
						}, 250);

						if (jQuery('#contactform')
								.validationEngine('validate')) {
							jQuery
							.post(
									form_builder_url,
									{
										contact_name : jQuery(
												'#contact_name')
												.val(),
												contact_email : jQuery(
														'#contact_email')
														.val(),
														contact_url : jQuery(
																'#contact_url')
																.val(),
																contact_subject : jQuery(
																'#contact_subject')
																.val(),
																contact_message : jQuery(
																'#contact_message')
																.val(),
																formname : 'contact_form',
																formtype : 'contactf'
									},
									function() {
										jQuery(
										'#contactform .loading')
										.animate(
												{
													opacity : 0
												},
												250);

										document
										.getElementById(
												'contactform')
												.reset();

										jQuery(
										'#contactform')
										.parent()
										.find(
												'.box')
												.hide();
										jQuery(
										'#contactform')
										.parent()
										.find(
												'.success_box')
												.fadeIn(
												'fast');
										jQuery(
										'html, body')
										.animate(
												{
													scrollTop : jQuery(
															'#contactform')
															.offset().top - 100
												},
										'slow');
										jQuery(
										'#contactform')
										.parent()
										.find(
												'.success_box')
												.delay(
														5000)
														.fadeOut(
																1000);
									});

							return false;
						} else {
							jQuery('#contactform .loading')
							.animate({
								opacity : 0
							}, 250);

							return false;
						}
					});

			jQuery('#form_contact_form_widget_001').validationEngine(
			'init');

			jQuery(
			'#form_contact_form_widget_001 a#contact_form_widget_001_wformsend')
			.click(
					function() {
						var form_builder_url = jQuery(
								'#contact_form_widget_001_wurl')
								.val();

						jQuery(
						'#form_contact_form_widget_001 .loading')
						.animate({
							opacity : 1
						}, 250);

						if (jQuery(
						'#form_contact_form_widget_001')
						.validationEngine('validate')) {
							jQuery
							.post(
									form_builder_url,
									{
										contact_email : jQuery(
												'#field_003')
												.val(),
												contact_name : jQuery(
														'#field_003')
														.val(),
														contact_subject : 'N/A - Quick Contacts Form',
														contact_message : jQuery(
														'#field_004')
														.val(),
														formname : 'contact_form_widget_001',
														formtype : 'widget'
									},
									function() {
										jQuery(
										'#form_contact_form_widget_001 .loading')
										.animate(
												{
													opacity : 0
												},
												250);
										document
										.getElementById(
												'form_contact_form_widget_001')
												.reset();
										jQuery(
										'#form_contact_form_widget_001')
										.parent()
										.find(
												'.widgetinfo')
												.hide();
										jQuery(
										'#form_contact_form_widget_001')
										.parent()
										.find(
												'.widgetinfo')
												.fadeIn(
												'fast');
										jQuery(
										'html, body')
										.animate(
												{
													scrollTop : (jQuery(
															'#form_contact_form_widget_001')
															.offset().top - 100)
												},
										'slow');
										jQuery(
										'#form_contact_form_widget_001')
										.parent()
										.find(
												'.widgetinfo')
												.delay(
														5000)
														.fadeOut(
																1000);
									});

							return false;
						} else {
							jQuery(
									'#form_contact_form_widget_001 .loading')
									.animate({
										opacity : 0
									}, 250);

							return false;
						}
					});
		};