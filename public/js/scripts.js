// Administry Power DashBoard Main Application Document

/*jslint browser: true*/
/*global $, jQuery, alert*/


// ========================================================================
// ========================================================================
// ========================================================================
// Table of contents
// ========================================================================
// ========================================================================
// ========================================================================

// 1. Main Interface Functions
//    ---Metis Menu
//    ---OakenWidgets
// 2. Layout Hooks
//    ---Hooks
//    ---Colors Styles
//    ---Material Design Button Toggle
//    ---Scroll Top 
//    ---OutSide Click Detector 
//    ---Sidebar Toggle and Sidebar XS Toggle
//    ---Userbar Toggle
// 3. Bootstrap Hooks
//    ---Tooltips
//    ---Popovers
//    ---Toggle Chevrons
//    ---Hover Dropdown
//    ---Keep open Bootstrap Dropdown on click
//    ---Megamenu Bootstrap JS elements
//    ---Custom Animation For Dropdowns
// 4. Modal Manipulations
//    ---Lock Screen Modal
//    ---Sign Out Modal
//    ---Bootstrap 3 Lightbox
// 5. Forms
//    ---File Upload Button and file counter
//    ---Parsley form wizard example
//    ---Bootstrap Wizard
//    ---WYSIWYG Editors
// 6. Forms Pickers
//    ---JQuery KnobInput Init
//    ---Stepper
//    ---Datepickers
//    ---DateTimepickers
//    ---Monthpicker
//    ---Color Picker
//    ---Bootstrap Wizard
//    ---JQuery UI Sliders
// 7. Other Elements
//    ---List-Grid View
//    ---Autocloseable Alerts
//    ---Nestable Lists Init
//    ---Quotes Marquee
//    ---Isotope Filtering
//    ---Get Current Date
//    ---NiceScrolls
//    ---Chat functions
//    ---Sparkline Charts
//    ---Carousels


(function () {
    "use strict";

    $(document).ready(function () {


        // ========================================================================
        //	1. Main Interface Functions
        // ========================================================================


        // MetisMenu - Main Adminstry Left menu

        if ($('#side-menu').length) {
            $('#side-menu').metisMenu({
                doubleTapToGo: false
            });
        }

        // OakenWidgets

        // OakenWidgets
        $('.oaken-clear').hide();
        if ($('.oakenwidgets').length) {
            $('.oakenwidgets').oakenwidgets();
            $('.oaken-clear').show();
        }


        // ========================================================================
        //	2. Layout Hooks (as shown at layout.html)
        // ========================================================================

        // Hooks

        $("#breadcrumbs-toggle").click(function (e) {
            e.preventDefault();
            $('.breadcrumb').toggleClass('hide');
        });

        $("#navbar-inverse-toggle").click(function (e) {
            e.preventDefault();
            $('.main-top-navbar').toggleClass('navbar-inverse');
        });

        $("#enable-userbar-material-toggle").click(function (e) {
            e.preventDefault();
            $('.material-button-anim').toggleClass('show');
            $('.btn.userbar-toggle').toggleClass('hide');
            $('.userbar-wrapper').toggleClass('enable-material');
            $('.userbar-wrapper .nav-tabs').toggleClass('hide');
        });

        // Load Color Styles


        $("#load-yellow-styles").click(function (e) {
            e.preventDefault();
            $(document.body).attr('class', 'yellow-body');
        });

        $("#load-green-styles").click(function (e) {
            e.preventDefault();
            $(document.body).attr('class', 'green-body');
        });


        $("#load-blue-styles").click(function (e) {
            e.preventDefault();
            $(document.body).attr('class', 'blue-body');
        });


        $("#load-khaki-styles").click(function (e) {
            e.preventDefault();
            $(document.body).attr('class', 'khaki-body');
        });


        $("#load-pink-styles").click(function (e) {
            e.preventDefault();
            $(document.body).attr('class', 'pink-body');
        });


        $("#load-default-styles").click(function (e) {
            e.preventDefault();
            $(document.body).removeClass();
        });


        // Material Design Toggle

        $(".material-button-toggle").click(function () {
            $(this).toggleClass('open');
            $('.option').toggleClass('scale-on');
            $('.material-button-anim').toggleClass('open');
        });

        // Scroll Top

        $('.scrollToTop').click(function () {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        // Outside div click-touch detector

        $.fn.clickOutsideThisElement = function (callback) {
            return this.each(function () {
                var self = this;
                $(document).on('click touchstart', function (e) {
                    if (!$(e.target).closest(self).length) {
                        callback.call(self, e);
                    }
                });
            });
        };


        $(".userbar-wrapper").clickOutsideThisElement(function () {
            $('body').removeClass('userbar-wrapper-opened');
            $('.option').removeClass('scale-on');
            $(".material-button-toggle").removeClass('open');
        });


        // Sidebar Toggle and Sidebar XS Toggle

        $(".sidebar-toggle").click(function (e) {
            $('body').toggleClass('sidebar-wrapper-closed');
        });


        $(".sidebar-toggle-xs").click(function (e) {
            $('body').toggleClass('sidebar-wrapper-open-xs');
            e.stopPropagation();
        });


        // Userbar Toggle

        $(".userbar-toggle").click(function (e) {
            $('body').toggleClass('userbar-wrapper-opened');
            e.stopPropagation();

        });

        // ========================================================================
        //	3. Bootstrap Hooks
        // ========================================================================

        // Tooltip

        if ($('.tooltiped').length) {
            $('.tooltiped').tooltip();
        }

        // Popover

        if ($('.popovered').length) {
            $('.popovered').popover({
                'html': 'true'
            });
        }

        if ($('.popover-hovered').length) {
            $('.popover-hovered').popover({
                'html': 'true',
                trigger: 'hover'
            });
        }

        // Special Hook if element already have data attribute

        $('[data-tooltip="tooltip"]').tooltip();

        //	Toggle Accordion Chevrons

        function toggleChevron(e) {
            $(e.target)
                .prev('.panel-heading')
                .find('i.indicator')
                .toggleClass('fa-chevron-up fa-chevron-down');
        }
        $('#accordion').on('hidden.bs.collapse', toggleChevron);
        $('#accordion').on('shown.bs.collapse', toggleChevron);


        function toggleChevronTitle(e) {
            $(e.target)
                .prev('.accordion-faq-toggle')
                .find('i.indicator')
                .toggleClass('fa-chevron-circle-up fa-chevron-circle-down');
        }
        $('#accordion-faq').on('hidden.bs.collapse', toggleChevronTitle);
        $('#accordion-faq').on('shown.bs.collapse', toggleChevronTitle);


        // Hover Dropdown - makes dropdown open on hover event

        if ($('.megamenu-hover .dropdown-toggle').length) {
            $('.megamenu-hover .dropdown-toggle').dropdownHover({
                delay: 50,
                hoverDelay: 50
            });
        }

        //	Keep open Bootstrap Dropdown on click

        $('.keep_open').click(function (event) {
            event.stopPropagation();
        });


        // Megamenu Bootstrap JS elements

        $('.dropdown').on('show.bs.dropdown', function () {
            var $this = $(this);
            setTimeout(function () {

                // carousels
                var $carousel = $('.carousel', $this).carousel();
                $('[data-slide], [data-slide-to]', $carousel).click(function (e) {
                    e.preventDefault();
                    $(this).trigger('click.bs.carousel.data-api');
                });
            }, 10);
        });

        $('.dropdown-menu a[data-toggle="tab"]').click(function (e) {
            e.stopPropagation();
            $(this).tab('show');
        });

        //	Custom Animation For Dropdowns (in and Out Animations) (bootbites.com/)  


        var dropdownSelectors = $('.dropdown, .dropup');

        // Custom function to read dropdown data
        function dropdownEffectData(target) {
            // @todo - page level global?
            var effectInDefault = null,
                effectOutDefault = null,
                dropdown = $(target),
                dropdownMenu = $('.dropdown-menu', target),
                parentUl = dropdown.parents('ul.nav');

            // If parent is ul.nav allow global effect settings
            if (parentUl.size() > 0) {
                effectInDefault = parentUl.data('dropdown-in') || null;
                effectOutDefault = parentUl.data('dropdown-out') || null;
            }

            return {
                target: target,
                dropdown: dropdown,
                dropdownMenu: dropdownMenu,
                effectIn: dropdownMenu.data('dropdown-in') || effectInDefault,
                effectOut: dropdownMenu.data('dropdown-out') || effectOutDefault
            };
        }

        // Custom function to start effect (in or out)
        function dropdownEffectStart(data, effectToStart) {
            if (effectToStart) {
                data.dropdown.addClass('dropdown-animating');
                data.dropdownMenu.addClass('animated');
                data.dropdownMenu.addClass(effectToStart);
            }
        }

        // Custom function to read when animation is over
        function dropdownEffectEnd(data, callbackFunc) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            data.dropdown.one(animationEnd, function () {
                data.dropdown.removeClass('dropdown-animating');
                data.dropdownMenu.removeClass('animated');
                data.dropdownMenu.removeClass(data.effectIn);
                data.dropdownMenu.removeClass(data.effectOut);

                // Custom callback option, used to remove open class in out effect
                if (typeof callbackFunc === 'function') {
                    callbackFunc();
                }
            });
        }

        // Bootstrap API hooks
        // =========================
        dropdownSelectors.on({
            "show.bs.dropdown": function () {
                // On show, start in effect
                var dropdown = dropdownEffectData(this);
                dropdownEffectStart(dropdown, dropdown.effectIn);
            },
            "shown.bs.dropdown": function () {
                // On shown, remove in effect once complete
                var dropdown = dropdownEffectData(this);
                if (dropdown.effectIn && dropdown.effectOut) {
                    dropdownEffectEnd(dropdown, function () {});
                }
            },
            "hide.bs.dropdown": function (e) {
                // On hide, start out effect
                var dropdown = dropdownEffectData(this);
                if (dropdown.effectOut) {
                    e.preventDefault();
                    dropdownEffectStart(dropdown, dropdown.effectOut);
                    dropdownEffectEnd(dropdown, function () {
                        dropdown.dropdown.removeClass('open');
                    });
                }
            }
        });
        // ========================================================================
        //	4. Modal Manipulations
        // ========================================================================

        //	Lock Modal

        $(".lockme").click(function (e) {
            e.preventDefault();
            $('#lockscreen').modal();
            $('#yesilock').click(function () {
                window.open('pages-lock.html', '_self');
                $('#lockscreen').modal('hide');
            });

        });

        //	Sign Out Modal

        $(".goaway").click(function (e) {
            e.preventDefault();
            $('#signout').modal();
            $('#yesigo').click(function () {
                window.open('pages-login.html', '_self');
                $('#signout').modal('hide');
            });
        });

        //	Bootstrap 3 Lightbox (Ekko Lightbox)

        $(document).delegate('*[data-toggle="lightbox"]', 'click', function (event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                always_show_close: true
            });
        });



        // ========================================================================
        //	5. Forms
        // ========================================================================

        //	File Upload Button and files counter

        $(document).on('change', '.btn-file :file', function () {
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/[\w\W]*\//, '');
            input.trigger('fileselect', [numFiles, label]);
        });

        $('.btn-file :file').on('fileselect', function (event, numFiles, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;

            if (input.length) {
                input.val(log);
            } else {
                if (log) {
                    alert(log);
                }
            }
        });


        //	Parsley Form Example

        $('.next').on('click', function () {
            var current = $(this).data('currentBlock'),
                next = $(this).data('nextBlock');
            // only validate going forward. If current group is invalid, do not go further
            // .parsley().validate() returns validation result AND show errors
            if (next > current) {
                if (false === $('#basic-wizard').parsley().validate('block' + current)) {
                    return;
                }
            }
            // validation was ok. We can go on next step.
            $('.block' + current)
                .removeClass('show')
                .addClass('hidden');

            $('.block' + next)
                .removeClass('hidden')
                .addClass('show');
        });

        //	Bootstrap Wizard

        if ($('#rootwizard-pills').length) {
            $('#rootwizard-pills').bootstrapWizard({
                onTabShow: function (tab, navigation, index) {
                    var $total = navigation.find('li').length,
                        $current = index + 1,
                        $percent = ($current / $total) * 100;
                    $('#rootwizard-pills').find('#rootwizard-pills-progress').css({
                        width: $percent + '%'
                    });
                }

            });
        }

        if ($('#rootwizard-navs').length) {
            $('#rootwizard-navs').bootstrapWizard({
                onTabShow: function (tab, navigation, index) {
                    var $total = navigation.find('li').length,
                        $current = index + 1,
                        $percent = ($current / $total) * 100;
                    $('#rootwizard-navs').find('#progressbar-navs').css({
                        width: $percent + '%'
                    });
                }
            });
        }


        if ($('#rootwizard').length) {
            $('#rootwizard').bootstrapWizard({
                onTabShow: function (tab, navigation, index) {

                    // Dynamically change percentage completion on progress bar
                    var tabCount = navigation.find('li').length,
                        current = index + 1,
                        percentDone = (current / tabCount) * 100;
                    $('#rootwizard').find('#progressbar').css({
                        width: percentDone + '%'
                    });

                    // Optional: Show Done button when on last tab;
                    // It is invisible by default.
                    $('#rootwizard').find('.last').toggle(current >= tabCount);

                    // Optional: Hide Next button if on last tab;
                    // otherwise it shows but is disabled
                    $('#rootwizard').find('.next').toggle(current < tabCount);
                }
            });
        }


        if ($('#rootwizard-2').length) {
            $('#rootwizard-2').bootstrapWizard({
                onTabShow: function (tab, navigation, index) {

                    // Dynamically change percentage completion on progress bar
                    var tabCount = navigation.find('li').length,
                        current = index + 1;


                    // Optional: Show Done button when on last tab;
                    // It is invisible by default.
                    $('#rootwizard-2').find('.last').toggle(current >= tabCount);

                    // Optional: Hide Next button if on last tab;
                    // otherwise it shows but is disabled
                    $('#rootwizard-2').find('.next').toggle(current < tabCount);
                }
            });
        }

        $('#rootwizard, #rootwizard-2').on('show.bs.tab', function (event) {

            // wizard
            var $wizard = $(this),
                $navEars = $('ul.nav', $wizard),
                // current and next tab's indexes
                tabToMoveToIdx = $navEars.children().index($(event.target).parent()) + 1,
                tabToMoveFromIdx = $navEars.children().index($(event.relatedTarget).parent()) + 1;

            if (tabToMoveToIdx > tabToMoveFromIdx) { // wee need to validate it

                if (tabToMoveToIdx - tabToMoveFromIdx > 1) {
                    return false; // allow only nearest tab transitions
                }

                if (!$('form', $wizard).parsley().validate('tab-' + tabToMoveFromIdx)) {
                    $(event.relatedTarget).parent().removeClass('validated-tab');
                    return false; // stay as you are!
                } else {
                    $(event.relatedTarget).parent().addClass('validated-tab');
                }
            }
        });

        //	WYSIWYG Editors 


        if ($('#summernote').length) {
            $('#summernote').summernote({
                height: 300
            });
        }


        if ($('#wysihtml5').length) {
            $('#wysihtml5').wysihtml5({
                toolbar: {
                    "fa": true,
                    "size": "sm"
                }
            });
        }

        if ($('#wysihtml5-inbox-modal').length) {
            $('#wysihtml5-inbox-modal').wysihtml5({
                toolbar: {
                    "font-styles": false,
                    "fa": true,
                    "size": "sm"
                }
            });
        }


        // ========================================================================
        //	6. Form pickers
        // ========================================================================

        //	JQuery KnobInput Init (js\vendors\knob)

        if ($('#knob1').length) {
            $("#knob1").knob({
                height: '130'
            });
        }
        if ($('#knob2').length) {
            $("#knob2").knob({
                height: '130',
                font: 'Montserrat, Roboto, sans-serif'
            });
        }
        if ($('#knob3').length) {
            $("#knob3").knob({
                height: '130',
                font: 'Montserrat, Roboto, sans-serif'
            });
        }
        if ($('#knob4').length) {
            $("#knob4").knob({
                height: '130',
                font: 'Montserrat, Roboto, sans-serif'
            });
        }
        if ($('#knob5').length) {
            $("#knob5").knob({
                height: '130',
                font: 'Montserrat, Roboto, sans-serif'
            });
        }
        if ($('#knob6').length) {
            $("#knob6").knob({
                height: '130',
                font: 'Montserrat, Roboto, sans-serif'
            });
        }

        //	Stepper

        if ($('#s,#s3,#s4,#s5,#s6').length) {
            $('#s,#s3,#s4,#s5,#s6').stepper();
        }

        if ($('#s2').length) {
            $('#s2').stepper({
                wheel_step: 1,
                arrow_step: 0.2
            });
        }

        //	Datepickers

        // Inline datepicker
        if ($('#userbar-calendar').length) {
            $('#userbar-calendar').datepicker({
                dateFormat: 'dd.mm.yy',
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>'
            });
        }

        // Inline datepicker
        if ($('#widget-calendar').length) {
            $('#widget-calendar').datepicker({
                dateFormat: 'dd.mm.yy',
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>'
            });
        }

        if ($('#datepicker-1').length) {
            $("#datepicker-1").datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>'
            });
        }

        if ($('#datepicker-2').length) {
            $("#datepicker-2").datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                changeYear: true
            });
        }

        if ($('#datepicker-3').length) {
            $("#datepicker-3").datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>'
            });
        }

        if ($('#datepicker-3').length) {
            $("#datepicker-4").datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                changeMonth: true,
                changeYear: true
            });
        }

        if ($('#from').length) {
            $("#from").datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                defaultDate: "+1w",
                changeMonth: false,
                numberOfMonths: 2,
                onClose: function (selectedDate) {
                    $("#to").datepicker("option", "minDate", selectedDate);
                }
            });
        }

        if ($('#to').length) {
            $("#to").datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 2,
                onClose: function (selectedDate) {
                    $("#from").datepicker("option", "maxDate", selectedDate);
                }
            });
        }

        //	DateTimepickers


        if ($('#datetimepicker-1').length) {
            $('#datetimepicker-1').datetimepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa chevron-right"></i>'
            });
        }

        if ($('#datetimepicker-2').length) {
            $('#datetimepicker-2').timepicker();
        }


        if ($('#datetimepicker-3').length) {
            $('#datetimepicker-3').datetimepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                timeFormat: 'HH:mm z',
                timezone: 'MT',
                timezoneList: [{
                    value: 'ET',
                    label: 'Eastern'
                }, {
                    value: 'CT',
                    label: 'Central'
                }, {
                    value: 'MT',
                    label: 'Mountain'
                }, {
                    value: 'PT',
                    label: 'Pacific'
                }]
            });
        }

        if ($('#datetimepicker-4').length) {
            $('#datetimepicker-4').timepicker({
                prevText: '<i class="fa chevron-left"></i>',
                nextText: '<i class="fa chevron-right"></i>',
                timeFormat: 'HH:mm:ss',
                stepHour: 2,
                stepMinute: 10,
                stepSecond: 10
            });
        }

        if ($('#datetimepicker-5').length) {
            $('#datetimepicker-5').datetimepicker({
                altField: "#datetimepicker-5-alt",
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>'
            });
        }

        //	Monthpicker	

        if ($('#month-picker-1').length) {
            $("#month-picker-1").monthpicker({
                changeYear: false,
                stepYears: 1,
                prevText: '<i class="fa fa-angle-left"></i>',
                nextText: '<i class="fa fa-angle-right"></i>',
                showButtonPanel: true
            });
        }

        if ($('#month-picker-2').length) {
            $("#month-picker-2").monthpicker({
                changeYear: true,
                stepYears: 1,
                prevText: '<i class="fa fa-angle-left"></i>',
                nextText: '<i class="fa fa-angle-right"></i>',
                showButtonPanel: true
            });
        }

        //	Color Picker

        $.minicolors = {
            defaults: {
                animationSpeed: 50,
                animationEasing: 'swing',
                change: null,
                changeDelay: 0,
                control: 'hue',
                defaultValue: '',
                hide: null,
                hideSpeed: 100,
                inline: false,
                letterCase: 'lowercase',
                opacity: false,
                position: 'bottom left',
                show: null,
                showSpeed: 100,
                theme: 'bootstrap'
            }
        };

        if ($('#hue-demo').length) {
            $('#hue-demo').minicolors();
        }

        if ($('#saturation-demo').length) {
            $('#saturation-demo').minicolors({
                control: 'saturation'
            });
        }

        if ($('#brightness-demo').length) {
            $('#brightness-demo').minicolors({
                control: 'brightness'
            });
        }

        if ($('#wheel-demo').length) {
            $('#wheel-demo').minicolors({
                control: 'wheel'
            });
        }

        if ($('#opacity').length) {
            $('#opacity').minicolors({
                opacity: '.6',
                format: 'rgb'
            });
        }


        if ($('#letter-case').length) {
            $('#letter-case').minicolors({
                letterCase: 'uppercase'
            });
        }

        //	JQuery UI Sliders

        //Base Slider
        if ($('#ui-slider1').length) {
            $('#ui-slider1').slider({
                min: 0,
                max: 500,
                slide: function (event, ui) {
                    $('#ui-slider1-value').text(ui.value);
                }
            });
        }

        // Range slider
        if ($('#ui-slider2').length) {
            $('#ui-slider2').slider({
                min: 0,
                max: 500,
                range: true,
                values: [75, 300],
                slide: function (event, ui) {
                    $('#ui-slider2-value1').text(ui.values[0]);
                    $('#ui-slider2-value2').text(ui.values[1]);
                }
            });
        }

        // Step slider
        if ($('#ui-slider3').length) {
            $('#ui-slider3').slider({
                min: 0,
                max: 500,
                step: 100,
                slide: function (event, ui) {
                    $('#ui-slider3-value').text(ui.value);
                }
            });
        }

        // Price Slider (in shop filters)
        if ($('#shop-slider').length) {
            $("#shop-slider").slider({
                range: true,
                min: 5,
                max: 500,
                values: [11, 100],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });

            $("#amount").val("$" + $("#shop-slider").slider("values", 0) +
                " - $" + $("#shop-slider").slider("values", 1));
        }


        // ========================================================================
        //	7. Others Elements
        // ========================================================================

        // List-Grid View

        $('#list').click(function (event) {
            event.preventDefault();
            $('#products .item').addClass('list-group-item');
        });

        $('#grid').click(function (event) {
            event.preventDefault();
            $('#products .item').removeClass('list-group-item');
            $('#products .item').addClass('grid-group-item');
        });


        // Autocloseable Alerts

        $('.alert-autocloseable-success').hide();
        $('.alert-autocloseable-warning').hide();
        $('.alert-autocloseable-danger').hide();
        $('.alert-autocloseable-info').hide();

        $('#autoclosable-btn-success').click(function () {
            $('#autoclosable-btn-success').prop("disabled", true);
            $('.alert-autocloseable-success').show();
            $('.alert-autocloseable-success').delay(5000).fadeOut("slow", function () {
                // Animation complete.
                $('#autoclosable-btn-success').prop("disabled", false);
            });
        });


        $('#autoclosable-btn-warning').click(function () {
            $('#autoclosable-btn-warning').prop("disabled", true);
            $('.alert-autocloseable-warning').show();
            $('.alert-autocloseable-warning').delay(3000).fadeOut("slow", function () {
                // Animation complete.
                $('#autoclosable-btn-warning').prop("disabled", false);
            });
        });



        $('#autoclosable-btn-danger').click(function () {
            $('#autoclosable-btn-danger').prop("disabled", true);
            $('.alert-autocloseable-danger').show();
            $('.alert-autocloseable-danger').delay(5000).fadeOut("slow", function () {
                // Animation complete.
                $('#autoclosable-btn-danger').prop("disabled", false);
            });
        });


        $('#autoclosable-btn-info').click(function () {
            $('#autoclosable-btn-info').prop("disabled", true);
            $('.alert-autocloseable-info').show();
            $('.alert-autocloseable-info').delay(6000).fadeOut("slow", function () {
                // Animation complete.
                $('#autoclosable-btn-info').prop("disabled", false);
            });
        });


        //	Nestable Lists Init (js\vendors\nestable-lists)

        if ($('#nestable').length) {
            $('#nestable').nestable({
                group: 1
            });
        }

        if ($('#nestable2').length) {
            $('#nestable2').nestable({
                group: 1
            });
        }

        if ($('#nestable-menu').length) {
            $('#nestable-menu').on('click', function (e) {
                var target = $(e.target),
                    action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });
        }

        if ($('#nestable3').length) {
            $('#nestable3').nestable();
        }
        if ($('#nestable4').length) {
            $('#nestable4').nestable();
        }

        //	Quotes Marquee

        if ($('.quotes-marquee').length) {
            $('.quotes-marquee').marquee({
                //speed in milliseconds of the marquee
                duration: 15000,
                //gap in pixels between the tickers
                gap: 50,
                //time in milliseconds before the marquee will start animating
                delayBeforeStart: 0,
                //'left' or 'right'
                direction: 'left',
                //true or false - should the marquee be duplicated to show an effect of continues flow
                duplicated: true,
                pauseOnHover: true
            });
        }

        //	Portfolio and Gallery Isotope Filtering

        if ($('#gallery').length) {
            $('#gallery').imagesLoaded(function () {
                var $container = $('#gallery').isotope({
                    masonry: {}
                });
                // filter items on button click
                $('#filters').on('click', 'button', function () {
                    var filterValue = $(this).attr('data-filter');
                    $container.isotope({
                        filter: filterValue
                    });
                });

            });
        }

        // Get Current Date (Moment JS)

        if (document.getElementById("displayMoment")) {
            var NowMoment = moment(),
                eDisplayMoment = document.getElementById('displayMoment');
            eDisplayMoment.innerHTML = NowMoment.format("<p>D</p><p>MMMM</p> <p>dddd</p>");

        }

        //                
        //        NiceScrolls Will be removed with next release
        //
        //        if ($('.nicescrolled').length) {
        //            $(".nicescrolled").niceScroll({
        //                cursorwidth: 8,
        //                cursorborder: 0,
        //                cursorcolor: '#969ead'
        //            });
        //        }
        //
        //        if ($('.userbar-wrapper .tab-pane').length) {
        //            $(".userbar-wrapper .tab-pane").niceScroll({
        //                cursorwidth: 8,
        //                cursorborder: 0,
        //                cursorcolor: '#6686a7'
        //            });
        //        }
        //
        //        if ($('.sidebar-wrapper').length) {
        //            $(".sidebar-wrapper").niceScroll({
        //                cursorwidth: 0,
        //                cursorborder: 0,
        //                cursorcolor: '#969ead'
        //            });
        //        }
        //
        //        $(".sidebar-wrapper").on('touchstart', function (event) {
        //            $(".sidebar-wrapper").niceScroll().resize();
        //        });
        //
        //
        //        if ($('.chat-app .chat-users-menu').length) {
        //            $(".chat-app .chat-users-menu").niceScroll({
        //                cursorwidth: 8,
        //                cursorborder: 0,
        //                cursorcolor: '#969ead'
        //            });
        //        }
        //
        //        if ($('.sidebar-wrapper, .chat-users-menu').length) {
        //            $(".sidebar-wrapper, .chat-users-menu").mouseover(function () {
        //                $(".sidebar-wrapper, .chat-users-menu").niceScroll().resize();
        //            });
        //        }

        //	Chat

        $('.chat-toggler').click(function (e) {
            $(".chat-message-form").toggleClass("chat-message-form-toggle", "fast");
            $(".chat-users-menu").toggleClass("chatbar-toggle", "fast");
            $(".chat-messages").toggleClass("chat-messages-toggle", "fast");
            $(".chat-header").toggleClass("chat-header-toggle", "fast");
        });


        $(".chat-overlay-button").click(function (e) {
            e.preventDefault();
            $('.chat-overlay').toggleClass('chat-closed chat-opened', 'fast');
        });


        $("#b1").bind('click mouseover', function () {
            $(".chat-app .chat-messages").css('background-image', 'url("images/backgrounds/1.png")');
        });


        $("#b2").bind('click mouseover', function () {
            $(".chat-app .chat-messages").css('background-image', 'url("images/backgrounds/2.png")');
        });

        $("#b3").bind('click mouseover', function () {
            $(".chat-app .chat-messages").css('background-image', 'url("images/backgrounds/3.png")');
        });

        $("#b4").bind('click mouseover', function () {
            $(".chat-app .chat-messages").css('background-image', 'url("images/backgrounds/4.png")');
        });

        $("#b5").bind('click mouseover', function () {
            $(".chat-app .chat-messages").css('background-image', 'url("images/backgrounds/5.png")');
        });


        // Sparklines (js\vendors\sparkline)

        // Sparklines at Bottom Horisontal Menu

        if ($('.piechart-1').length) {
            $('.piechart-1').sparkline('html', {
                disableHiddenCheck: true,
                defaultPixelsPerValue: 1,
                type: 'line',
                width: '125',
                height: '40',
                lineColor: '#fff',
                fillColor: '#5fb6c7',
                lineWidth: 3,
                spotColor: '#ffffff',
                minSpotColor: '#000',
                maxSpotColor: '#000',
                highlightSpotColor: '#a6c172',
                spotRadius: 5,
                drawNormalOnTop: false
            });
        }
        if ($('.piechart-2').length) {
            $('.piechart-2').sparkline('html', {
                disableHiddenCheck: true,
                type: 'line',
                width: '125',
                height: '40',
                lineColor: '#9ab946',
                fillColor: false,
                lineWidth: 5,
                spotColor: '#ffffff',
                minSpotColor: '#000',
                maxSpotColor: '#000',
                highlightSpotColor: '#a6c172',
                spotRadius: 3,
                drawNormalOnTop: false
            });
        }

        if ($('.piechart-3').length) {
            $('.piechart-3').sparkline('html', {
                disableHiddenCheck: true,
                defaultPixelsPerValue: 1,
                type: 'line',
                width: '125',
                height: '40',
                lineColor: '#fff',
                fillColor: '#5fb6c7',
                lineWidth: 5,
                spotColor: '#ffffff',
                minSpotColor: '#000',
                maxSpotColor: '#000',
                highlightSpotColor: '#a6c172',
                spotRadius: 3,
                drawNormalOnTop: false
            });
        }

        if ($('.piechart-4').length) {
            $('.piechart-4').sparkline('html', {
                disableHiddenCheck: true,
                defaultPixelsPerValue: 1,
                type: 'line',
                width: '125',
                height: '40',
                lineColor: '#fff',
                fillColor: '#5fb6c7',
                lineWidth: 5,
                spotColor: '#ffffff',
                minSpotColor: '#000',
                maxSpotColor: '#000',
                highlightSpotColor: '#a6c172',
                spotRadius: 3,
                drawNormalOnTop: false
            });
        }

        if ($('.piechart-5').length) {
            $('.piechart-5').sparkline('html', {
                disableHiddenCheck: true,
                type: 'pie',
                width: '40',
                height: '40',
                sliceColors: ['#fff', '#9ab946', '#000', '#109618', '#a4b7bf', '#506066', '#667880', '#8ca0a8']
            });
        }

        if ($('.piechart-6').length) {
            $('.piechart-6').sparkline('html', {
                disableHiddenCheck: true,
                type: 'pie',
                width: '40',
                height: '40',
                sliceColors: ['#fff', '#9ab946', '#f87aa0', '#109618', '#a4b7bf', '#506066', '#667880', '#8ca0a8']
            });
        }

        // Carousels

        $(function (carouselProgress) {
            //Events that reset and restart the timer animation when the slides change
            $(".transition-timer-carousel").on("slide.bs.carousel", function (event) {
                //The animate class gets removed so that it jumps straight back to 0%
                $(".transition-timer-carousel-progress-bar", this)
                    .removeClass("animate").css("width", "0%");
            }).on("slid.bs.carousel", function (event) {
                //The slide transition finished, so re-add the animate class so that
                //the timer bar takes time to fill up
                $(".transition-timer-carousel-progress-bar", this)
                    .addClass("animate").css("width", "100%");
            });

            //Kick off the initial slide animation when the document is ready
            $(".transition-timer-carousel-progress-bar", ".transition-timer-carousel")
                .css("width", "100%");
        });


        $('#custom_carousel').on('slide.bs.carousel', function (evt) {
            $('#custom_carousel .controls li.active').removeClass('active');
            $('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
        });



    });
}(jQuery));
