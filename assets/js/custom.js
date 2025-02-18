(function($) {

    "use strict";
    $(document).ready(function() {

        /*------------------------
        Page Loader
        --------------------------*/
        jQuery("#load").fadeOut();
        jQuery("#loading").delay(0).fadeOut("slow");

        $(window).on('resize', function() {
            $(".equal-height").matchHeight();
        });
        
        $(".equal-height").matchHeight();
        
        /*------------------------
        Back To Top
        --------------------------*/
        $('#back-to-top').fadeOut();
        $(window).on("scroll", function() {
            if ($(this).scrollTop() > 250) {
                $('#back-to-top').fadeIn(1400);
            } else {
                $('#back-to-top').fadeOut(400);
            }
        });
        // scroll body to 0px on click
        $('#top').on('click', function() {
            $('top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });


        /*------------------------
        Tooltip
        --------------------------*/

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });


        /*------------------------
        Accordion
        --------------------------*/
        $('.iq-accordion .iq-ad-block .ad-details').hide();
        $('.iq-accordion .iq-ad-block:first').addClass('ad-active').children().slideDown('slow');
        $('.iq-accordion .iq-ad-block').on("click", function() {
            if ($(this).children('div').is(':hidden')) {
                $('.iq-accordion .iq-ad-block').removeClass('ad-active').children('div').slideUp('slow');
                $(this).toggleClass('ad-active').children('div').slideDown('slow');
            }
        });


        /*------------------------
        Header
        --------------------------*/
        // $(window).on('scroll', function() {
        //     if ($(window).scrollTop() > 100) {
        //         $('header').addClass('menu-sticky');
        //     } else {
        //         $('header').removeClass('menu-sticky');
        //     }
        // });

        /*------------------------
        Magnific Popup
        --------------------------*/

        /*if ($(".popup-gallery").exists()) {*/
        $('.popup-gallery').magnificPopup({
            delegate: 'a.popup-img',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                }
            }
        });
        /*}*/

        /*if ($(".popup-youtube, .popup-vimeo, .popup-gmaps").exists()) {*/
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
        /*}*/



        /*------------------------
        Countdown
        --------------------------*/
        $('#countdown').countdown({
            date: '12/31/2024 23:59:59',
            day: 'Day',
            days: 'Days'
        });


        /*------------------------
        counter
        --------------------------*/
        $('.timer').countTo();

        /*------------------------
        Owl Carousel
        --------------------------*/
        $('.owl-carousel').each(function() {
            var $carousel = $(this);
            $carousel.owlCarousel({
                items: $carousel.data("items"),
                loop: $carousel.data("loop"),
                margin: $carousel.data("margin"),
                nav: $carousel.data("nav"),
                dots: $carousel.data("dots"),
                autoplay: $carousel.data("autoplay"),
                autoplayTimeout: $carousel.data("autoplay-timeout"),
                navText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],
                responsiveClass: true,
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: $carousel.data("items-mobile-sm")
                    },
                    // breakpoint from 480 up
                    480: {
                        items: $carousel.data("items-mobile")
                    },
                    // breakpoint from 786 up
                    786: {
                        items: $carousel.data("items-tab")
                    },
                    // breakpoint from 1023 up
                    1023: {
                        items: $carousel.data("items-laptop")
                    },
                    1199: {
                        items: $carousel.data("items")
                    }
                }
            });
        });


        /*------------------------
        Wow Animation
        --------------------------*/
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true
        });
        wow.init();

        /*------------------------
        Progress Bar
        --------------------------*/

        $('.iq-progress-bar > span').each(function() {
            var $this = $(this);
            var width = $this.data('percent');
            $this.css({
                'transition': 'width 2s'
            });
            
            setTimeout(function() {
                $this.appear(function() {
                    $this.css('width', width + '%');
                });
            }, 500);
        });


        /*----------------------form validation----------------------*/
        var baseUrl = home_base_url;
        $('#modalResponse').hide();
    
        $.fn.inputFilter = function (callback, errMsg) {
            return this.on("input keydown keyup mousedown mouseup select contextmenu drop focusout", function (e) {
                if (callback(this.value)) {
                    if (["keydown", "mousedown", "focusout"].indexOf(e.type) >= 0) {
                        $(this).removeClass("input-error");
                        this.setCustomValidity("");
                    }
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    $(this).addClass("input-error");
                    this.setCustomValidity("");
                    this.reportValidity();
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                } else {
                    this.value = "";
                }
            });
        };
    
        $("#contactForm #name, #getintouchForm #getintouchname").inputFilter(function (value) { return /^[a-zA-Z- ]*$/.test(value); }, "");
        $(".telephoneInput").inputFilter(function (value) { return /^-?\d*$/.test(value); }, "");
    
        $('input[type="email"]').on("keyup", function (e) {
            var emailtext = $(this).val();
            emailtext = emailtext.replace("@-", "@").replace("-@", "@");
            $(this).val(emailtext);
        });

        /*-------------------------------------Contact Us----------------------------------------------------*/
        if ($('#contactForm #number').length) {
            var contactNumber = document.querySelector("#contactForm #number");
            var contactFormNumber = window.intlTelInput(contactNumber, {
                separateDialCode: true,
                autoHideDialCode: false,
                preferredCountries: [""],
                dropdownContainer: document.body,
                autoPlaceholder: '',
                initialCountry: "auto",
                geoIpLookup: function(callback) {
                    fetch("https://ipapi.co/json")
                    .then(function(res) { return res.json(); })
                    .then(function(data) { callback(data.country_code); })
                    .catch(function() { callback("us"); });
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.1.3/js/utils.js"
            });
        }

        var enterEmail = 'Please enter email address.'; 
        var enterValidEmail = 'Please enter valid email address.'; 
        var entername = 'Please enter full name.'; 
        var enterNumber = 'Please enter a phone number.';
        var enterValidNumber = 'Please enter a valid number.';
        var enterMessage = 'Please enter message.';

        $('#contactForm #email').focusout(function () {
            var mailValue = $.trim($(this).val());
            if ((mailValue == '')) {
                $('#contactForm #emailError').show().addClass('has-error').text(enterEmail);
            } else if (!isEmail($('#contactForm #email').val())) {
                $('#contactForm #emailError').show().addClass('has-error').text(enterValidEmail);
            } else if ((mailValue != '') && (isEmail($('#contactForm #email').val()))) {
                $('#contactForm #emailError').hide().removeClass('has-error').text('');
            }
        });

        $('#contactForm #name').focusout(function () {
            var nameValue = $.trim($(this).val());
            if (nameValue == '') {
                $('#contactForm #nameError').show().addClass('has-error').text(entername);
            } else if (nameValue != '') {
                $('#contactForm #nameError').hide().removeClass('has-error').text('');
            }
        });

        $('#contactForm #number').focusout(function () {
            var dialcode = $(this).parents('.telephone').find('.iti__selected-dial-code').text();
            $("#contactForm #dialcode").val(dialcode);
            var numberValue = $.trim($(this).val());
            if (numberValue == '') {
                $('#contactForm #numberError').show().addClass('has-error').text(enterNumber);
            } else if (numberValue != '') {
                var telInput = $(this);
                if ($.trim(telInput.val())) {
                    if (contactFormNumber.isValidNumber()) {
                        telInput.removeClass("inavlidcontact");
                        $('#contactForm #numberError').hide().removeClass('has-error').text('');
                    } else {
                        telInput.addClass("inavlidcontact");
                        $('#contactForm #numberError').show().addClass('has-error').text(enterValidNumber);
                    }
                }
            }
        });

        $('#contactForm #message').focusout(function () {
            var messageValue = $.trim($(this).val());
            if (messageValue == '') {
                $('#contactForm #messageError').show().addClass('has-error').text(enterMessage);
            } else if (messageValue != '') {
                $('#contactForm #messageError').hide().removeClass('has-error').text('');
            }
        });

        $("#contactForm #contactSubmit").on("click", function (event) {
            event.preventDefault();
            $('#contactForm #email').trigger("focusout");
            $('#contactForm #name').trigger("focusout");
            $('#contactForm #number').trigger("focusout");
            $('#contactForm #message').trigger("focusout");
            var mail = $.trim($("#contactForm #email").val());
            var name = $.trim($("#contactForm #name").val());
            var number = $.trim($("#contactForm #number").val());
            var telInput = $.trim($("#contactForm #number"));
            var message = $.trim($("#contactForm #message").val());
            var dialcode = $.trim($("#contactForm #dialcode").val());

            if ((mail != '') && (isEmail($('#contactForm #email').val())) && (number != '') && (contactFormNumber.isValidNumber() != false) && (name != '') && (message != '')) {
                $('#contactForm #emailError').text('').removeClass('has-error').hide();
                $('#contactForm #nameError').text('').removeClass('has-error').hide();
                $('#contactForm #numberError').text('').removeClass('has-error').hide();
                $('#contactForm #messageError').text('').removeClass('has-error').hide();
                number = dialcode + number;
                var name = name;
                enquiry(name, mail, number, message);
            }
        });

        function enquiry(name, mail, number, message) {
            $('#contactSubmit').prop("disabled", true);
            $('#modalResponse').hide();
            $('#modalResponse').html('');
            $('#contactForm #loader').show();
            $.ajax({
                url: baseUrl + "create-lead",
                type: "POST",
                data: { 'email': mail, 'name': name,'phone': number, 'message': message, 'type':'' },
                dataType: "JSON",
                success: function (jsonStr) {
                    var res_data = JSON.stringify(jsonStr);
                    var response = JSON.parse(res_data);
                    if ((response['class'] != null) && (response['class'] == 'sucMsg')) {
                        $('#contactForm')[0].reset();
                        $('#contactForm #loader').hide();
                        $('#modalResponse').show().attr('class', '').attr('class', 'alert alert-success').html(response['msg']);
                    } else {
                        $('#contactForm #loader').hide();
                        $('#modalResponse').show().attr('class', '').attr('class', 'alert alert-warning').html(response['msg']);
                    }
                    setTimeout(function () {
                        $('#modalResponse').hide().attr('class', '').html('');
                        $('#contactForm #contactSubmit').prop("disabled", false);
                    }, 4000);
                }
            });
        }

        /*-------------------------------------Contact Us----------------------------------------------------*/
        if ($('#getintouchForm #getintouchnumber').length) {
            var getintouchNumber = document.querySelector("#getintouchForm #getintouchnumber");
            var getintouchFormNumber = window.intlTelInput(getintouchNumber, {
                separateDialCode: true,
                autoHideDialCode: false,
                preferredCountries: ["IN"],
                dropdownContainer: document.body,
                autoPlaceholder: '',
                initialCountry: "auto",
                geoIpLookup: function(callback) {
                    fetch("https://ipapi.co/json")
                    .then(function(res) { return res.json(); })
                    .then(function(data) { callback(data.country_code); })
                    .catch(function() { callback("us"); });
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.1.3/js/utils.js"
            });
        }

        setTimeout(function(){ 
            $('#getintouchnumber').css("padding-left", "unset");
        }, 1000);
        
        var enterGITEmail = 'Please enter email address.'; 
        var enterGITValidEmail = 'Please enter valid email address.'; 
        var enterGITName = 'Please enter full name.'; 
        var enterGITNumber = 'Please enter a phone number.';
        var enterGITValidNumber = 'Please enter a valid number.';
        var enterGITMessage = 'Please enter message.';

        $('#getintouchForm #getintouchemail').focusout(function () {
            var mailValue = $.trim($(this).val());
            if ((mailValue == '')) {
                $('#getintouchForm #getintouchemailError').show().addClass('has-error').text(enterGITEmail);
            } else if (!isEmail($('#getintouchForm #getintouchemail').val())) {
                $('#getintouchForm #getintouchemailError').show().addClass('has-error').text(enterGITValidEmail);
            } else if ((mailValue != '') && (isEmail($('#getintouchForm #getintouchemail').val()))) {
                $('#getintouchForm #getintouchemailError').hide().removeClass('has-error').text('');
            }
        });

        $('#getintouchForm #getintouchname').focusout(function () {
            var nameValue = $.trim($(this).val());
            if (nameValue == '') {
                $('#getintouchForm #getintouchnameError').show().addClass('has-error').text(enterGITName);
            } else if (nameValue != '') {
                $('#getintouchForm #getintouchnameError').hide().removeClass('has-error').text('');
            }
        });

        $('#getintouchForm #getintouchnumber').focusout(function () {
            $('#getintouchnumber').css("padding-left", "unset");
            var getintouchdialcode = $(this).parents('.telephone').find('.iti__selected-dial-code').text();
            $("#getintouchForm #getintouchdialcode").val(getintouchdialcode);
            var numberValue = $.trim($(this).val());
            if (numberValue == '') {
                $('#getintouchForm #getintouchnumberError').show().addClass('has-error').text(enterGITNumber);
            } else if (numberValue != '') {
                var telInput = $(this);
                if ($.trim(telInput.val())) {
                    if (getintouchFormNumber.isValidNumber()) {
                        telInput.removeClass("inavlidcontact");
                        $('#getintouchForm #getintouchnumberError').hide().removeClass('has-error').text('');
                    } else {
                        telInput.addClass("inavlidcontact");
                        $('#getintouchForm #getintouchnumberError').show().addClass('has-error').text(enterGITValidNumber);
                    }
                }
            }
        });

        $('#getintouchForm #getintouchmessage').focusout(function () {
            var messageValue = $.trim($(this).val());
            if (messageValue == '') {
                $('#getintouchForm #getintouchmessageError').show().addClass('has-error').text(enterGITMessage);
            } else if (messageValue != '') {
                $('#getintouchForm #getintouchmessageError').hide().removeClass('has-error').text('');
            }
        });

        $("#getintouchForm #getintouchSubmit").on("click", function (event) {
            event.preventDefault();
            $('#getintouchnumber').css("padding-left", "unset");
            $('#getintouchForm #getintouchemail').trigger("focusout");
            $('#getintouchForm #getintouchname').trigger("focusout");
            $('#getintouchForm #getintouchnumber').trigger("focusout");
            $('#getintouchForm #getintouchmessage').trigger("focusout");
            var mail = $.trim($("#getintouchForm #getintouchemail").val());
            var name = $.trim($("#getintouchForm #getintouchname").val());
            var number = $.trim($("#getintouchForm #getintouchnumber").val());
            var telInput = $.trim($("#getintouchForm #getintouchnumber"));
            var message = $.trim($("#getintouchForm #getintouchmessage").val());
            var dialcode = $.trim($("#getintouchForm #getintouchdialcode").val());

            if ((mail != '') && (isEmail($('#getintouchForm #getintouchemail').val())) && (number != '') && (getintouchFormNumber.isValidNumber() != false) && (name != '') && (message != '')) {
                $('#getintouchForm #getintouchemailError').text('').removeClass('has-error').hide();
                $('#getintouchForm #getintouchnameError').text('').removeClass('has-error').hide();
                $('#getintouchForm #getintouchnumberError').text('').removeClass('has-error').hide();
                $('#getintouchForm #getintouchmessageError').text('').removeClass('has-error').hide();
                number = dialcode + number;
                var name = name;
                getintouchenquiry(name, mail, number, message);
            }
        });

        function getintouchenquiry(name, mail, number, message) {
            $('#getintouchSubmit').prop("disabled", true);
            $('#getintouchModalResponse').hide();
            $('#getintouchModalResponse').html('');
            $('#getintouchForm #getintouchloader').show();
            $.ajax({
                url: baseUrl + "create-lead",
                type: "POST",
                data: { 'email': mail, 'name': name,'phone': number, 'message': message, 'type':'getintouch' },
                dataType: "JSON",
                success: function (jsonStr) {
                    var res_data = JSON.stringify(jsonStr);
                    var response = JSON.parse(res_data);
                    if ((response['class'] != null) && (response['class'] == 'sucMsg')) {
                        $('#getintouchForm')[0].reset();
                        $('#getintouchForm #getintouchloader').hide();
                        $('#getintouchModalResponse').show().attr('class', '').attr('class', 'alert alert-success').html(response['msg']);
                    } else {
                        $('#getintouchForm #getintouchloader').hide();
                        $('#getintouchModalResponse').show().attr('class', '').attr('class', 'alert alert-warning').html(response['msg']);
                    }
                    setTimeout(function () {
                        $('#getintouchModalResponse').hide().attr('class', '').html('');
                        $('#getintouchForm #getintouchSubmit').prop("disabled", false);
                    }, 4000);
                }
            });
        }

        /*-----------------------------------language current URL-----------------------------------------*/
        function isEmail(emailid) {
            var pattern = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
            return pattern.test(emailid);
        }
        /*------------------------------------------End form------------------------------------------------*/
    });

})(jQuery);