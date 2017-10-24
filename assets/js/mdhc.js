(function($) {
	function clickStaff(employee, title) {
		console.log('clicked employee: ', employee);

		// var data = '<div id="bk-staffmodal" class="staff-content">' +

		var data = '<video width="420" height="340" id="bkvideo" controls autoplay controlsList="nodownload">'
				+ '<source src="videos/'
				+ employee
				+ '.mp4" type="video/mp4"></source></video> ';

		jQuery(function() {
			jQuery(data).dialog({
				show : {
					effect : 'fade',
					duration : 500
				},
				hide : {
					effect : 'fade',
					duration : 500
				},
				height : 440,
				width : 697,
				title : title,
				resizable : false,
				draggable : false,
				modal : true
			});
		});

		jQuery('#bkvideo').on('click', function(evnparam) {
			evnparam.preventDefault();
			evnparam.stopPropagation();
			jQuery(this).show()
			console.log('bkvideo clicked', evnparam);
			return false;
		});

	}

	jQuery('.wpb_column').find('.vc_toggle').on('click', function(evt) {
		alert('hi');
		jQuery(this).closest('.vc_toggle_content').fadeIn('1000');
	});
});