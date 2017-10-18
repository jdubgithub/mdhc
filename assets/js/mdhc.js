function clickStaff(employee) {
	console.log('clicked employee: ', employee);

    var data = '<div id="bk-staffmodal" class="staff-content">' +
                 '<video controls autoplay>' +
                   '<source src="videos/RKshort.mp4" type="video/mp4">' +
                   '<source src="movie.ogg" type="video/ogg">' +
                   'Your browser does not support the video tag.' + 
                 '</video> ' + 
               '</div>';
    
    var contact = {
    		open: function() { 
    			alert('hi'); 
    			return this; 
    			},
    		close: function() { 
    			alert('byb'); 
    			return this;
    			},
    		show: function() { 
    			alert('show'); 
    			return this;
    			}
    }

    jQuery(data).modal({
        closeHTML: "<a href='#' title='Close' class='modal-close'>x</a>",
        position: ["5%",],
        overlayId: 'staffmodal-overlay',
        containerId: 'staffmodal-container',
        onOpen: contact.open,
        onShow: contact.show,
        onClose: contact.close
    });
}

/*
jQuery(document).ready(function() {
	jQuery('#bk-staffmodal').on('click', function() {
		jQuery.modal('#bk-staffmodal').show();
	});
	// 	console.log('clicked');
	// 	jQuery(selected_header).toggleClass('current_page_item');
	// });
	// var selected_header = '.header_select';
	// jQuery(selected_header).on('click', function() {
		// jQuery(selected_header).removeClass('current_page_item');
		// jQuery(pageId).toggleClass('current_page_item');
	// });
});
*/