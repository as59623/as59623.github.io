$(function () {
    "use strict";
    /*====Initializing stellar.js Plugin====*/
    $('.section').stellar({
        horizontalScrolling: false
    });
    $(window).on('load', function () {
        $('body').addClass('loaded');


        /*=========================================================================
        	Portfolio Grid
        =========================================================================*/

        var grid = $('#portfolio-grid');
        grid.shuffle({
            itemSelector: '.item'
        });

        $('#portfolio-filters1 > ul > li > a').on('click', function (e) {
            e.preventDefault();
            var groupName = $(this).attr('data-group');
            $('#portfolio-filters1 > ul > li > a').removeClass('active');
            $(this).addClass('active');
            grid.shuffle('shuffle', groupName);
        });

        $('a.image-link').magnificPopup({
            type: 'image',
            removalDelay: 300,
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true
            }
        });
    });

    /*=========================================================================
    	Links Navigation System
    =========================================================================*/
    /*
    $('#portfolio-filters > ul > li > a[data-section]').on('click', function (e) {
        e.preventDefault();
        $('body').removeClass('section-show');
        $('section.active').removeClass('active');
        var section = $('#' + $(this).data('section'));
        if (section.size() != 0) {
            $('body').addClass('section-show');
            section.addClass('active');
        }
    });
*/
    $('.front-person-links > ul > li > a[data-section]').on('click', function (e) {
        e.preventDefault();
        var section = $('#' + $(this).data('section'));
        if (section.size() != 0) {
            $('body').addClass('section-show');
            section.addClass('active');
        }
    });

    $('.indexlist > li > a[data-section]').on('click', function (e) {
        e.preventDefault();
        var section = $('#' + $(this).data('section'));
        if (section.size() != 0) {
            $('body').addClass('section-show');
            section.addClass('active');
        }
    });

    $('.close-btn').on('click', function () {
        $("#aboutid").prop("src","about.html");
        $("#about1id").prop("src","about1.html");
        $("#about2id").prop("src","about2.html");
        $("#about3id").prop("src","about3.html");
        $("#about4id").prop("src","about4.html");
        $("#aluminid").prop("src","alumin.html");
        $("#alumin2id").prop("src","alumin2.html");
        $("#alumin3id").prop("src","alumin3.html");
        $("#alumin4id").prop("src","alumin4.html");
        $("#alumin5id").prop("src","alumin5.html");
        $("#alumin6id").prop("src","alumin6.html");
        $("#alumin7id").prop("src","alumin7.html");
        $("#alumin8id").prop("src","alumin8.html");
        $("#newsid").prop("src","news.html");
        $("#news1id").prop("src","news1.html");
        $("#news2id").prop("src","news2.html");
        $("#news3id").prop("src","news3.html");
        $("#news4id").prop("src","news4.html");
        $("#news5id").prop("src","news5.html");
        $("#news6id").prop("src","news6.html");
        $("#news7id").prop("src","news7.html");
        $("#news8id").prop("src","news8.html");
        $("#receptionid").prop("src","reception.html");
        $("#reception2id").prop("src","reception2.html");
        $("#reception3id").prop("src","reception3.html");
        $("#downloadid").prop("src","download.html");
        $("#contactid").prop("src","contact.html");
        $('body').removeClass('section-show');
        $('section.active').removeClass('active');
    });
    /*=========================================================================
    	Testimonials Slider
    =========================================================================*/
    $('.testimonials-slider').owlCarousel({
        singleItem: true
    });



    /*=========================================================================
    	Skill Bar's Percent Initialization from attribute data-percent
    =========================================================================*/
    $('.skill-bar').each(function () {
        var $this = $(this),
            percent = parseInt($this.data('percent'), 10);

        $this.find('.bar').css('width', percent + '%');
    });




    /*=========================================================================
    	Contact Form
    =========================================================================*/
    function isJSON(val) {
        var str = val.replace(/\\./g, '@').replace(/"[^"\\\n\r]*"/g, '');
        return (/^[,:{}\[\]0-9.\-+Eaeflnr-u \n\r\t]*$/).test(str);
    }
    $('#contact-form').validator().on('submit', function (e) {

        if (!e.isDefaultPrevented()) {
            // If there is no any error in validation then send the message

            e.preventDefault();
            var $this = $(this),

                //You can edit alerts here
                alerts = {

                    success: "<div class='form-group' >\
						<div class='alert alert-success alert-dismissible' role='alert'> \
							<button type='button' class='close' data-dismiss='alert' aria-label='Close' > \
								<i class='ion-ios-close-empty' ></i> \
							</button> \
							<strong>Message Sent!</strong> We'll be in touch as soon as possible\
						</div>\
					</div>",


                    error: "<div class='form-group' >\
						<div class='alert alert-danger alert-dismissible' role='alert'> \
							<button type='button' class='close' data-dismiss='alert' aria-label='Close' > \
								<i class='ion-ios-close-empty' ></i> \
							</button> \
							<strong>Error!</strong> Sorry, an error occurred. Try again.\
						</div>\
					</div>"

                };

            $.ajax({

                url: 'mail.php',
                type: 'post',
                data: $this.serialize(),
                success: function (data) {

                    if (isJSON(data)) {

                        data = $.parseJSON(data);

                        if (data['error'] == false) {

                            $('#contact-form-result').html(alerts.success);

                            $('#contact-form').trigger('reset');

                        } else {

                            $('#contact-form-result').html(
                                "<div class='form-group' >\
								<div class='alert alert-danger alert-dismissible' role='alert'> \
									<button type='button' class='close' data-dismiss='alert' aria-label='Close' > \
										<i class='ion-ios-close-empty' ></i> \
									</button> \
									" + data['error'] + "\
								</div>\
							</div>"
                            );

                        }


                    } else {
                        $('#contact-form-result').html(alerts.error);
                    }

                },
                error: function () {
                    $('#contact-form-result').html(alerts.error);
                }
            });
        }
    });


});
