function clickStaff(employee, title) {
	console.log('clicked employee: ', employee);

    // var data = '<div id="bk-staffmodal" class="staff-content">' +
             
    var data = '<video width="420" height="340" id="bkvideo" controls autoplay>' +
                '<source src="videos/' + employee + '.mp4" type="video/mp4"></source></video> ';
    
     jQuery( function() {
       jQuery(data).dialog({
    	     show: {effect: 'fade', duration: 500},
    	     hide: {effect: 'fade', duration: 500},
    	     height: 240,
    	     width: 380,
    	     title: title,
    	     modal: true,
    	     close: function( event, ui ) {
    	    	   // jQuery(data).dialog("destroy");
    	     }
       });
     } );
    
     /*
    jQuery('#bkvideo').on('click', function(evnparam) {
    	    evnparam.preventDefault();
    	    evnparam.stopPropagation();
    	    jQuery(this).show()
    	    console.log('bkvideo clicked', evnparam);
    	    return false;
    });
    */
}
