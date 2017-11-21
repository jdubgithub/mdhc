jQuery(function () {
    setupRegHandler();
});

function setupRegHandler() {

    jQuery('input#submit_login').on(
            'click',
            function (clkevt) {
                var form_builder_url = 'pt-reg-login.php';
                var formId = 'form#formLogin';

                var inputArray = jQuery(formId).find('input');

                jQuery(formId).find('.error').text('Please complete all the form fields.');

                for (ipt in inputArray) {
                    // console.log('ipt = ', inputArray[ipt]);

                    if ((inputArray[ipt].required && jQuery(inputArray[ipt]).val() === '')
                            || (inputArray[ipt].attributes && inputArray[ipt].attributes.regex && !jQuery(inputArray[ipt]).val().match(
                                    inputArray[ipt].attributes.regex))) {
                        // console.log('ipt = ', inputArray[ipt]);

                        jQuery(formId).find('.success_box').show();
                        jQuery(formId).find('.success_box .box').hide();
                        jQuery(formId).find('.error').show();

                        jQuery(formId).find('.error').append('<br>Invalid field: ' + inputArray[ipt].name);

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

                    jQuery(formId).parent().find('.success_box').show();
                    jQuery(formId).parent().find('.success_box .error').hide();
                    jQuery(formId).parent().find('.box').show();

                    jQuery(formId).find('.error').append('<br>data = ' + success_data);

                    jQuery('html, body').animate({
                        scrollTop : jQuery(formId).offset().top - 300
                    }, 'fast');
                }).always(function (always_data) {
                    console.log('always data = ', always_data);
                    // / return always_data;
                }).error(function (error_data) {
                    console.log('error_data = ', error_data);
                    // return error_data;
                }).success(function (data) {
                    console.log('data = ', data);
                    // return data;
                }).then(
                        function (response) {
                            console.log('then response = ', response);

                            jQuery(formId).parent().find('.box').text('');

                            if (response && JSON.parse(response).length > 0) {
                                jQuery(formId).parent().find('.box').append(
                                        'Welcome ' + JSON.parse(response)[0].first_name + ' ' + JSON.parse(response)[0].last_name + '!');
                                createDefaultSession(undefined, {
                                    first_name : JSON.parse(response)[0].first_name,
                                    last_name : JSON.parse(response)[0].last_name
                                });
                                // jQuery('.menu_container').fadeIn(3000);
                                window.location = '/Switchboard.php';
                            } else {
                                jQuery('.menu_container').hide();
                                jQuery(formId).parent().find('.box').append('Invalid email address/password.  Please try again.');
                            }
                            // return response;
                        });
                clkevt.preventDefault();

                return pData;
            });

    jQuery('input#submit_reg').on(
            'click',
            function (clkevt) {
                console.log(clkevt);
                var form_builder_url = 'pt-reg-login.php'
                var formId = 'form#formRegister';

                var inputArray = jQuery('#formRegister').find('input');

                jQuery('#formRegister').parent().find('.error').text('Please complete all the form fields.');

                for (ipt in inputArray) {

                    if ((inputArray[ipt].required && jQuery(inputArray[ipt]).val() === '') || 
                            (inputArray[ipt].attributes && inputArray[ipt].attributes.regex && 
                                    !jQuery(inputArray[ipt]).val().match(inputArray[ipt].attributes.regex.value))) {
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
                }, function (data) {
                    jQuery('#formRegister .loading').animate({
                        opacity : 0
                    }, 250);
                    
                    if (data && JSON.parse(data).error) {
                        console.log('data from reg post = ', data);

                        jQuery('#formRegister').parent().find('.success_box').show();
                        jQuery('#formRegister').parent().find('.success_box .box').hide();
                        jQuery('#formRegister').parent().find('.error').show();

                        jQuery('#formRegister').parent().find('.error').append('<br>' + JSON.parse(data).error);

                        jQuery('html, body').animate({
                            scrollTop : jQuery('#formRegister').offset().top - 140
                        }, 'slow');

                        clkevt.preventDefault();

                        return false;
                    }

                    document.getElementById('formRegister').reset();

                    jQuery('#formRegister').parent().find('.success_box').show();
                    jQuery('#formRegister').parent().find('.success_box .error').hide();
                    jQuery('#formRegister').parent().find('.box').show();
                    jQuery('html, body').animate({
                        scrollTop : jQuery('#formRegister').offset().top - 300
                    }, 'fast');
                }).error(function (error_data) {
                    console.log('error_data = ', error_data);
                    // return error_data;
                }).success(function (data) {
                    console.log('success data = ', data);
                });

                clkevt.preventDefault();
                return;
            });
    console.log('set update reg handlers');
}