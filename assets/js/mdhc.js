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
            modal : true,
            close : function (event, ui) {
                jQuery('#bkvideo').get(0).pause();
            }
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
    
    var globalVid = {};
    var d1;
    var showQuestions = true;
    
    this.clickVid = function (vid, title, globalVid) {
        if (testsCompleted) {
            showQuestions = !JSON.parse(testsCompleted).map(function(currTest) { return Object.values(currTest)[0];}).includes(vid);
        }
        return clickVid(vid, title, globalVid);
    };
    
    function clickVid(vid, title, globalVid) {
        console.log('clicked video: ', vid);

        var vidWithHashTag = '#' + vid;

        var data = '<video class="portal vid" preload="auto" id="' + vid + '" controls autoplay controlsList="nodownload">' + 
                   '<source src="PtPortal/Videos2/' + vid + '.mp4" type="video/mp4"></source></video> ';
        

        d1 = jQuery(data).dialog({
            show : {
                effect : 'fade',
                duration : 1000
            },
            hide : {
                effect : 'fade',
                duration : 200
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
            loop: false,
            id : vid
        });

        if (showQuestions) {
            var video = document.getElementById(vid);
            var supposedCurrentTime = 0;

             video.addEventListener('timeupdate', function() { 
                 if (!video.seeking) { 
                     supposedCurrentTime = video.currentTime; 
                 } 
             });

             video.addEventListener('seeking', function() { 
                 var delta = video.currentTime - supposedCurrentTime; 
                 if (Math.abs(delta) > 0.01) { 
                     console.log("Seeking is disabled"); 
                     video.currentTime = supposedCurrentTime; 
                 } 
             });
        }
        
        globalVidQnA  = eval(vid);
        globalVid = globalVidQnA[vid];

        jQuery(vidWithHashTag).on( 'ended', function (eevt, globalVid) {
            jQuery(vidWithHashTag)[0].pause();
            
            // showQuestions = true;
            
            if (testsCompleted) {
                showQuestions = !JSON.parse(testsCompleted).map(function(currTest) {return Object.values(currTest)[0];}).includes(vid);
            }

            if (showQuestions) {
            
                jQuery(this).dialog('close');

                var currVidQnA = eval(vid);
                currVidQnA = currVidQnA[vid];

                globalVid = currVidQnA;

                var data2 = '<form method="post" id="vid_test"><div class="vid-q-n-a"><div class="questions-container"><ol>';

                for (key in Object.keys(currVidQnA)) {
                    if (parseInt(key) === 0) {
                        data2 += '<span class="h6">' + currVidQnA[key].title + '</span>';
                    }
                    else {
                        data2 += '<li><div class="vid-question-section"><span class="vid-question">' + currVidQnA[key].question + '</span><span class="vid-answers">';
                        for (ans in currVidQnA[key].answers) {
                            var currAns = currVidQnA[key].answers[ans]; 
                            data2 += '<span class="vid-answer"><input type="radio" name="q' + key + '" value="'+currAns+'"/> ' + currAns + '</span>';
                        }
                        data2 += '</span></div></li>';
                    }
                }

                var qnAToCloseVar = '#' + vid + 'qna';

                data2 += '</ol></div>' + 
                '<div class="success"><br><br></div>' +
                '<input type="submit" id="answers_btn" class="submit_qna" name="submit_qna"/></div></form>';

                var theModal = jQuery(data2).dialog({
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
        title : 'Easy test you have to pass to get credit. Use your notes or call the office for help.',
                    resizable : false,
                    draggable : false,
                    modal : true,
                    close : function (event, ui) {
                        console.log('close clicked = ', event);
                    },
                    id : vid + 'qna'
                });

                jQuery(theModal).find('input#answers_btn').on('click', function(evtdata, globalVid) {
                    evtdata.preventDefault();

                    var formData = jQuery('#vid_test').find('input');

                    var crct = [];
                    var incrct = [];

                    var currAns;

                    var vidKey = Object.keys(parent.globalVidQnA)[0];
                    var currVidQnA = parent.globalVidQnA[vidKey];

                    formData.each(function(key, vl) {
                        if (vl.name !== 'submit_qna') {
                            var isChecked = jQuery(vl).is(':checked');

                            var theAnswer = currVidQnA[parseInt(vl.name.split('q')[1])].answer.trim();

                            if (isChecked && (theAnswer === vl.value)) {
                                crct.push(vl.name);
                                jQuery(vl).parent().parent().parent().css('color', 'black');
                            }
                            else if (!isChecked && (theAnswer === vl.value)) {
                                incrct.push(vl.name);
                                jQuery(vl).parent().parent().parent().css('color', 'red');
                            }
                        }
                    });

                    if (incrct.length === 0) {
                        this.disabled = true;

                        jQuery.post('/PtPortal/user_tests.php', {
                            test_name : vidKey,
                            test_id : vidKey,
                            score : 100,
                            correct : JSON.stringify(crct),
                            incorrect : JSON.stringify(incrct),
                            formname : 'vid_test',
                            user_id: user_id
                        }).done(function (data) {
                            console.log('dta = ', data);

                            return data;
                            /*
                        jQuery('#vid_test .loading').animate({
                            opacity : 0
                        }, 250);
                             */

                            /*
                        jQuery('html, body').animate({
                            scrollTop : jQuery('#vid_test').offset().top - 300
                        }, 'fast');
                        jQuery('html, body').animate({
                            click : jQuery('#vid_test').find('button .ui-dialog')
                        }, 'fast');
                             */
                        });
                        console.log('Good job.  Click the x in the upper right to close this window.');
                        jQuery('.vid-q-n-a .success').text('Good job.  You passed.  Click the x to close this window.');

                    }
                    evtdata.preventDefault();

                    return false;
                });
            }

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

