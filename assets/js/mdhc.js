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

    function clickVid(vid, title) {
        console.log('clicked video: ', vid);

        var vidWithHashTag = '#' + vid;

        var data = '<video preload="auto" id="' + vid + '" controls autoplay controlsList="nodownload">' + 
                   '<source src="PtPortal/Videos2/' + vid + '.mp4" type="video/mp4"></source></video> ';

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

            var data2 = '<ol><li>Did you watch the video? <input type="radio" name="question1" value="1"/> ' +
            '<input type="radio" name="question1" value="0"/></li>' +
            '<li>Did you blah blah blah? <input type="radio" name="question2" value="1"> ' +
            '<input type="radio" name="question2" value="0"></li>' +
            '<li>Did you yada yada yada? <input type="radio" name="question3" value="1"> ' +
            '<input type="radio" name="question3" value="0"></li> ' +
            '<li>Did you this that and the other? <input type="radio" name="question4" value="1"> ' +
            '<input type="radio" name="question4" value="0"></li></ol>';

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
