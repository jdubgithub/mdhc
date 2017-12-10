jQuery(function () {
    setupRegHandler();
});

function setupRegHandler() {

    jQuery('input#submit_login').on('click', function (clkevt) {
        var form_builder_url = 'pt-reg-login.php';
        var formId = 'form#formLogin';

        var inputArray = jQuery(formId).find('input');

        jQuery('.success_box').find('.error').text('Please complete all the form fields.');

        for (ipt in inputArray) {
            // console.log('ipt = ', inputArray[ipt]);

            if ((inputArray[ipt].required && inputArray[ipt].value === '')
                    || (inputArray[ipt].attributes && inputArray[ipt].attributes.regex && 
                            !inputArray[ipt].value.match(inputArray[ipt].attributes.regex.value))) {
                console.log('ipt = ', inputArray[ipt]);

                jQuery('.success_box').show();
                jQuery('.success_box').find('.box').hide();
                jQuery('.success_box').find('.error').show();
                jQuery('.success_box').find('.error').text('Invalid field: ' + inputArray[ipt].placeholder);

                jQuery('html, body').animate({
                    scrollTop : jQuery(formId).offset().top - 140
                }, 'slow');

                clkevt.preventDefault();

                return false;
            }
        }

        var pData = jQuery.post(form_builder_url, {
            Email : jQuery('#login_email_address').val(),
            Password : jQuery('#login_password').val(),
            formname : formId
        }, function (data) {
            var success_data = data;

            console.log('esponse data = ', data);

            jQuery(formId + '.loading').animate({
                opacity : 0
            }, 250);

            document.getElementById('formLogin').reset();

            jQuery('.success_box').show();
            jQuery('.success_box').find('.error').hide();
            jQuery('.success_box').find('.box').show();

            jQuery('.success_box').find('.error').append('<br>data = ' + success_data);

            jQuery('html, body').animate({
                scrollTop : jQuery(formId).offset().top - 300
            }, 'fast');
        })
        .error(function (error_data) {
            jQuery('.success_box').show();
            jQuery('.success_box').find('.box').hide();
            jQuery('.success_box').find('.error').show();
            jQuery('.success_box').find('.error').text(JSON.parse(error_data.responseText).error);

            console.log('in errro funciton and error data = ', error_data);

            return false;
        })
        .then(function (response) {
            console.log('then response = ', response);

            jQuery('.success_box').find('.box').text('');

            if (response && JSON.parse(response).length > 0) {
                jQuery('.success_box').find('.box').append('Welcome ' + JSON.parse(response)[0].first_name + ' ' + JSON.parse(response)[0].last_name + '!');
                createDefaultSession(undefined, {
                    first_name : JSON.parse(response)[0].first_name,
                    last_name : JSON.parse(response)[0].last_name
                });
                window.location = '/Switchboard.php';
            } else {
                jQuery('.menu_container').hide();
                jQuery('.success_box').find('.box').append('Invalid email address/password.  Please try again.');
            }
            // return response;
        });
        clkevt.preventDefault();

        return pData;
    });

    jQuery('input#submit_reg').on('click', function (clkevt) {
        console.log(clkevt);
        var form_builder_url = 'pt-reg-login.php'
            var formId = 'form#formRegister';

        var inputArray = jQuery('#formRegister').find('input');

        jQuery('#success_box').find('.error').text('');
        jQuery('#success_box').find('.error').text('Please complete all the form fields.');

        for (ipt in inputArray) {

            if ((inputArray[ipt].required && jQuery(inputArray[ipt]).val() === '') || 
                    (inputArray[ipt].attributes && inputArray[ipt].attributes.regex && 
                            !jQuery(inputArray[ipt]).val().match(inputArray[ipt].attributes.regex.value))) {
                console.log('ipt = ', inputArray[ipt]);

                jQuery('.success_box').show();
                jQuery('.success_box').find('.box').hide();
                jQuery('.success_box').find('.error').show();
                jQuery('.success_box').find('.error').text('Invalid field: ' + inputArray[ipt].placeholder);

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
        }, function (data) {
            jQuery('#formRegister .loading').animate({
                opacity : 0
            }, 250);

            if (data && JSON.parse(data).error) {
                console.log('data from reg post = ', data);

                jQuery('html, body').animate({
                    scrollTop : jQuery('#formRegister').offset().top - 140
                }, 'slow');

                clkevt.preventDefault();

                return false;
            }

            document.getElementById('formRegister').reset();

            jQuery('.success_box').show();
            jQuery('.success_box').find('.error').hide();
            jQuery('.success_box').find('.box').show();
            jQuery('html, body').animate({
                scrollTop : jQuery('#formRegister').offset().top - 300
            }, 'fast');
        }).error(function (error_data) {
            jQuery('.success_box').show();
            jQuery('.success_box').find('.box').hide();
            jQuery('.success_box').find('.error').show();
            jQuery('.success_box').find('.error').text(JSON.parse(error_data.responseText).error);

            console.log('in errro funciton and error data = ', error_data);

            return false;
            // return error_data;
        })
        .success(function() {

        })
        .then(onAlways());

        clkevt.preventDefault();
        return;
    });
    
    function onAlways(dta) {
        console.log('on always and dta = ', dta);
        
        return false;
    }

    console.log('set update reg handlers');
}