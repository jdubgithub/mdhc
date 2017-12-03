function clickStaff(employee, title) {
    console.log('clicked employee: ', employee);

    // var data = '<div id="bk-staffmodal" class="staff-content">' +

    var data = '<video width="420" height="340" id="bkvideo" controls autoplay controlsList="nodownload">' + '<source src="videos/'
            + employee + '.mp4" type="video/mp4"></source></video> ';

    jQuery(function () {
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

    jQuery('#bkvideo').on('click', function (evnparam) {
        evnparam.preventDefault();
        evnparam.stopPropagation();
        jQuery(this).show()
        console.log('bkvideo clicked', evnparam);
        return false;
    });
}

jQuery(function () {
    setupRegHandler();
});

function setupRegHandler() {

    jQuery('input#submit_reg').on('click', function (clkevt) {
        console.log(clkevt);
        var form_builder_url = 'pt-reg-login.php';

        var inputArray = jQuery('#formRegister').find('input');

        jQuery('#formRegister').parent().find('.error').text('Please complete all the form fields.');

        for (ipt in inputArray) {
            if ((inputArray[ipt].required && jQuery(inputArray[ipt]).val() === '')
                    || (inputArray[ipt].attributes && inputArray[ipt].attributes.regex && !jQuery(inputArray[ipt]).val().match(
                            inputArray[ipt].attributes.regex))) {
                console.log('ipt = ', inputArray[ipt]);

                jQuery('#formRegister').parent().find('.success_box').show();
                jQuery('#formRegister').parent().find('.success_box .box').hide();
                jQuery('#formRegister').parent().find('.error').show();

                jQuery('#formRegister').parent().find('.error').append('<br>Invalid field: ' + inputArray[ipt].name);

                jQuery('html, body').animate({
                    scrollTop : jQuery('#formRegister').offset().top - 140
                }, 'slow');

                clkevt.preventDefault();

                return false;
            }
        }

        jQuery.post(form_builder_url, {
            PtFName : jQuery('#first_name').val(),
            PtLName : jQuery('#last_name').val(),
            DOB : jQuery('#dob').val(),
            Phone : jQuery('#phone').val(),
            Email : jQuery('#email_address').val(),
            Password : jQuery('#password').val(),
            formname : 'formRegister'
        }, function () {
            jQuery('#formRegister .loading').animate({
                opacity : 0
            }, 250);

            document.getElementById('formRegister').reset();

            jQuery('#formRegister').parent().find('.success_box').show();
            jQuery('#formRegister').parent().find('.success_box .error').hide();
            jQuery('#formRegister').parent().find('.box').show();
            jQuery('html, body').animate({
                scrollTop : jQuery('#formRegister').offset().top - 300
            }, 'fast');
        });
        clkevt.preventDefault();
        return false;
    });
}


jQuery(function () {
    this.clickVid = function (vid, title) {
        return clickVid(vid, title);
    };
    
    /*
    jQuery('.submit_qna').on('click', function(evtButton) {
         console.log('button clicked');
         jQuery(evtButton).dialog('close');
    });
    */
    
    function clickVid(vid, title) {
        console.log('clicked video: ', vid);

        var vidWithHashTag = '#' + vid;

        var data = '<video class="portal vid" preload="auto" id="' + vid + '" controls autoplay controlsList="nodownload">' + 
                   '<source src="PtPortal/Videos2/' + vid + '.mp4" type="video/mp4"></source></video> ';

        var d1 = jQuery(data).dialog({
            show : {
                effect : 'fade',
                duration : 2000
            },
            hide : {
                effect : 'fade',
                duration : 2000
            },
            height : 540,
            width : 880,
            title : title,
            resizable : false,
            draggable : false,
            modal : true,
            close : function (event, ui) {
                console.log('close clicked = ', event);
                jQuery('#' + vid).get(0).pause();
            },
            id : vid
            // classes: {'ui-dialog-titlebar': 'vid-titlebar'}
            // classes: {'ui-dialog': 'portal vid ui-dialog-close-vid',
            //          'ui-dialog-titlebar': 'vid-titlebar'}
        });
        
        var startTime = new Date();
        

        jQuery(vidWithHashTag).on( 'ended', function (eevt) {
            jQuery(vidWithHashTag)[0].pause();
            console.log('ended', eevt, this);
            
            jQuery(this).dialog('close');
            
            var currVidQnA = eval(vid);
            currVidQnA = currVidQnA[vid];
            
            var data2 = '<div class="vid-q-n-a"><ol>';
            
            for (key in Object.keys(currVidQnA)) {
                if (parseInt(key) === 0) {
                    data2 += '<span class="h6">' + currVidQnA[key].title + '</span>';
                }
                else {
                    console.log(key, currVidQnA[key]);

                    data2 += '<li class="vid-question-section"><span class="vid-question">' + currVidQnA[key].question + '</span>';
                    for (ans in currVidQnA[key].answers) {
                       var currAns = currVidQnA[key].answers[ans]; 
                       data2 += '<span class="vid-answer"><input type="radio" name="q' + key + '" value="'+currAns+'"/> ' + currAns + '</span>';
                    }
                    data2 += '</li>';
                }
            }

            var qnAToCloseVar = '#' + vid + 'qna';
            
            data2 += '</ol><button class="submit_qna" name="submit_qna">Submit</button></div>';

            jQuery(data2).dialog({
                show : {
                    effect : 'fade',
                    duration : 500
                },
                hide : {
                    effect : 'fade',
                    duration : 500
                },
                height : 540,
                width : 797,
                title : 'Congratulations!',
                resizable : false,
                draggable : false,
                modal : true,
                close : function (event, ui) {
                    console.log('close clicked = ', event);
                },
                id : vid + 'qna'
            });


        });
    }
});


jQuery(function () {
    this.clickAudios = function (vid, title) {
        return clickAudios(vid, title);
    };

    function clickAudios(vid, title) {
        console.log('clicked video: ', vid);

        var vidWithHashTag = '#' + vid;

        var data = '<video preload="auto" id="' + vid + '" controls autoplay controlsList="nodownload">' + 
                   '<source src="PtPortal/Audios/' + vid + '.mp4" type="video/mp4"></source></video> ';

        var d1 = jQuery(data).dialog({
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
            modal : true,
            close : function (event, ui) {
                console.log('close clicked = ', event);
                jQuery('#' + vid).get(0).pause();
            },
            id : vid
        });

        var startTime = new Date();

        jQuery(vidWithHashTag).on( 'ended', function (eevt) {
            jQuery(vidWithHashTag)[0].pause();
            console.log('ended', eevt, this);
            
            var currVidQnA = eval(vid);
            currVidQnA = currVidQnA[vid];
            
            var data2 = '<ol>';
            
            for (key in Object.keys(currVidQnA)) {
                if (!currVidQnA[key]) {
                    data2 += '<strong>' + currVidQnA[""].title + '</strong>';
                }
                else {
                    console.log(key, currVidQnA[key]);

                    data2 += '<li>' + currVidQnA[key].question;
                    for (ans in currVidQnA[key].answers) {
                       var currAns = currVidQnA[key].answers[ans]; 
                       data2 += '&nbsp; <input type="radio" name="q' + key + '" value="'+currAns+'"/> ' + currAns + '&nbsp;';
                    }
                    data2 += '</li>';
                }
            }
            
            data2 += '</ol>';

            jQuery(data2).dialog({
                show : {
                    effect : 'fade',
                    duration : 500
                },
                hide : {
                    effect : 'fade',
                    duration : 500
                },
                height : 540,
                width : 797,
                title : 'Congratulations!',
                resizable : false,
                draggable : false,
                modal : true,
                close : function (event, ui) {
                    console.log('close clicked = ', event);
                },
                id : vid + 'qna'
            });

        });
    }
});

