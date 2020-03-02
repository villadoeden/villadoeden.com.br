(function($){
    "use strict"; // Start of use strict


    /* ---------------------------------------------
     Scripts initialization
     --------------------------------------------- */


    $(window).load(function(){

        $(window).trigger("scroll");
        $(window).trigger("resize");

        // Hash menu forwarding
        if ((window.location.hash) && ($(window.location.hash).length)){
            var hash_offset = $(window.location.hash).offset().top;
            $("html, body").animate({
                scrollTop: hash_offset
            });
        }

    });

    $(document).ready(function(){

        $(window).trigger("resize");
        init_classic_menu();

    });

    $(window).resize(function(){
        init_classic_menu_resize();

    });

    $('.scroll-down').click(function() {
        $('html, body').animate({
            scrollTop: $("#arrow").offset().top - 80
        }, 2000);
    });



    /* ---------------------------------------------
     Sections helpers
     --------------------------------------------- */



    // Function for block height 100%
    function height_line(height_object, height_donor){
        height_object.height(height_donor.height());
        height_object.css({
            "line-height": height_donor.height()  + "px"
        });
    }

    // Function equal height
    !function(a){
        a.fn.equalHeights = function(){
            var b = 0, c = a(this);
            return c.each(function(){
                var c = a(this).innerHeight();
                c > b && (b = c)
            }), c.css("height", b)
        }, a("[data-equal]").each(function(){
            var b = a(this), c = b.data("equal");
            b.find(c).equalHeights()
        })
    }(jQuery);





    /* ---------------------------------------------
     Nav panel classic
     --------------------------------------------- */

    var mobile_nav = $(".mobile-nav");
    var desktop_nav = $(".desktop-nav");

    function init_classic_menu_resize(){

        // Mobile menu max height
        $(".mobile-on .desktop-nav > ul").css("max-height", $(window).height() - $(".main-nav").height() - 20 + "px");

        // Mobile menu style toggle
        if ($(window).width() <= 924) {
            $(".main-nav").addClass("mobile-on");
        }
        else
            if ($(window).width() > 1024) {
                $(".main-nav").removeClass("mobile-on");
                desktop_nav.show();
            }
    }

    function init_classic_menu(){


        // Navbar sticky

        $(".js-stick").sticky({
            topSpacing: 0
        });



        // Transpaner menu

        if ($(".main-nav").hasClass("transparent")){
           $(".main-nav").addClass("js-transparent");
        }

        $(window).scroll(function(){


        });



        // Sub menu

        var mnHasSub = $(".mn-has-sub");
        var mnThisLi;

        $(".mobile-on .mn-has-sub").find(".fa:first").removeClass("fa-angle-right").addClass("fa-angle-down");

        mnHasSub.click(function(){

            if ($(".main-nav").hasClass("mobile-on")) {
                mnThisLi = $(this).parent("li:first");
                if (mnThisLi.hasClass("js-opened")) {
                    mnThisLi.find(".mn-sub:first").slideUp(function(){
                        mnThisLi.removeClass("js-opened");
                        mnThisLi.find(".mn-has-sub").find(".fa:first").removeClass("fa-angle-up").addClass("fa-angle-down");
                    });
                }
                else {
                    $(this).find(".fa:first").removeClass("fa-angle-down").addClass("fa-angle-up");
                    mnThisLi.addClass("js-opened");
                    mnThisLi.find(".mn-sub:first").slideDown();
                }

                return false;
            }
            else {

            }

        });

        mnThisLi = mnHasSub.parent("li");
        mnThisLi.hover(function(){

            if (!($(".main-nav").hasClass("mobile-on"))) {

                $(this).find(".mn-sub:first").stop(true, true).fadeIn("fast");
            }

        }, function(){

            if (!($(".main-nav").hasClass("mobile-on"))) {

                $(this).find(".mn-sub:first").stop(true, true).delay(100).fadeOut("fast");
            }
        });

        // Mobile menu toggle

        mobile_nav.click(function(){

            if (desktop_nav.hasClass("js-opened")) {
                desktop_nav.slideUp("slow", "easeOutExpo").removeClass("js-opened");
                $(this).removeClass("active");
            }
            else {
                desktop_nav.slideDown("slow", "easeOutQuart").addClass("js-opened");
                $(this).addClass("active");

                // Fix for responsive menu
                if ($(".main-nav").hasClass("not-top")){
                    $(window).scrollTo(".main-nav", "slow");
                }

            }

        });

        desktop_nav.find("a:not(.mn-has-sub)").click(function(){
            if (mobile_nav.hasClass("active")) {
                desktop_nav.slideUp("slow", "easeOutExpo").removeClass("js-opened");
                mobile_nav.removeClass("active");
            }
        });




    }

    // BOOK A TABLE NOW
    $(function () {
        $(".book-now-wrapper .toggle").on("click", function () {
            $(".book-now").toggleClass("open", 150);

            var reserva = document.getElementById("btn").innerText;

            if (reserva == 'RESERVAS') {
                document.getElementById("btn").innerHTML="FECHAR";
            }
            if (reserva == 'FECHAR') {
                document.getElementById("btn").innerHTML="RESERVAS";
            }
        });
    });

    $(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });

        $(".btn-info-full").click(function (e) {

            //get input field values
            var checkin = $('input[name=check-in]').val();
            var checkout = $('input[name=check-out]').val();
            var room = $('select[name=room]').val();

            var adultos = $('input[name=adultos]').val();
            var crianca = $('input[name=crianca]').val();
            var crianca6 = $('input[name=crianca6]').val();

            var nome = $('input[name=nome-p]').val();
            var email = $('input[name=email-p]').val();

            var formcomplete = true;
            var requeridInput = [];

            if (checkin == "") {
                $('input[name=check-in]').css('border-color', '#e41919');
                formcomplete = false;
                requeridInput.push(" check-in ");
            }
            if (checkout == "") {
                $('input[name=check-out]').css('border-color', '#e41919');
                formcomplete = false;
                requeridInput.push(" check-out ");
            }
            if (room == "") {
                $('input[name=room]').css('border-color', '#e41919');
                formcomplete = false;
                requeridInput.push(" acomodação ");
            }
            if (adultos == "") {
                $('input[name=adultos]').css('border-color', '#e41919');
                formcomplete = false;
                requeridInput.push(" nº de adultos ");
            }
            if (crianca == "") {
                $('input[name=crianca]').css('border-color', '#e41919');
                formcomplete = false;
                requeridInput.push(" nº de criança ");
            }
            if (crianca6 == "") {
                $('input[name=crianca6]').css('border-color', '#e41919');
                formcomplete = false;
                requeridInput.push(" nº de criança até 6 anos");
            }
            if (nome == "") {
                $('input[name=nome-p]').css('border-color', '#e41919');
                formcomplete = false;
                requeridInput.push(" nome ");
            }
            if (email == "") {
                $('input[name=email-p]').css('border-color', '#e41919');
                formcomplete = false;
                requeridInput.push(" email ");
            }

            if (formcomplete == false) {
                $("#msg").removeClass("hidden");

                $("#campos").text(requeridInput);
            }
            else {

                var $active = $('.wizard .nav-tabs li.active');
                $active.next().removeClass('disabled');
                nextTab($active);

                $("#st1").addClass("disabled");
                $("#st2").addClass("disabled");
                $("#st3").addClass("disabled");

                document.getElementById('sidebar_form').submit();

            }

        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }
        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }

    });

    $(document).ready(function() {

        jQuery("#slider1").revolution({
            sliderLayout: "carousel",
            delay: 6500,
            hideAllCaptionAtLimit: 650,				// Hide all The Captions if Width of Browser is less then this value
            navigation: {
                keyboardNavigation: "on",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",

                bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_ontablet: true,
                    style: "metis",
                    hide_onleave: false,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 60,
                    space: 10,
                    tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                },
                touch: {
                    touchenabled: "on",
                    swipe_treshold: 75,
                    swipe_min_touches: 1,
                    drag_block_vertical: false,
                    swipe_direction: "horizontal"
                },
            },
            gridwidth: 1920,
            gridheight: 697,
            shuffle:"on"



        });
    });


    (function() {
        (function(e){"use strict";var t=function(t,n){this._el=e(t);if(this.repeat())return true;this._settings=n;this._powerOn=false;this._loopTimeout=0;this._el.html(this.buildHTML());this._items=this._el.find("span.novacancy");this._blinkArr=this.arrayMake();this.bindEvent();this.writeCSS();if(this._settings.autoOn)this.blinkOn()};t.prototype.repeat=function(){var e=this._el;if(e[0].novacancy){return true}else{e[0].novacancy=true;return false}};t.prototype.writeCSS=function(){var t=this.css();var n=e("<style>"+t+"</style>");e("body").append(n)};t.prototype.selector=function(){var e=this._el;var t=e[0].tagName;if(e[0].id)t+="#"+e[0].id;if(e[0].className)t+="."+e[0].className;return t};t.prototype.css=function(){var e=this.selector();var t=this._settings;var n="text-shadow: "+t.glow.toString()+";";var r="color: "+t.color+";"+n;var i="color: "+t.color+"; opacity: 0.3;";var s="";s+=e+" .novacancy.on { "+r+" }"+"\n";s+=e+" .novacancy.off { "+i+" }"+"\n";return s};t.prototype.rand=function(e,t){return Math.floor(Math.random()*(t-e+1)+e)};t.prototype.isNumber=function(e){return!isNaN(parseFloat(e))&&isFinite(e)};t.prototype.blink=function(e){var t=this._settings;var n=this;this.off(e);e[0].blinking=true;setTimeout(function(){n.on(e);e[0].blinking=false;n.reblink(e)},this.rand(t.blinkMin,t.blinkMax))};t.prototype.reblink=function(e){var t=this._settings;var n=this;setTimeout(function(){if(n.rand(1,100)<=t.reblinkProbability){n.blink(e)}},this.rand(t.blinkMin,t.blinkMax))};t.prototype.on=function(e){e.removeClass("off").addClass("on")};t.prototype.off=function(e){e.removeClass("on").addClass("off")};t.prototype.buildHTML=function(){var t=this._el;var n="";e.each(t.contents(),function(t,r){if(r.nodeType==3){var i=r.nodeValue.split("");e.each(i,function(e,t){n+='<span class="novacancy on">'+t+"</span>"})}else{n+=r.outerHTML}});return n};t.prototype.arrayMake=function(){var t=this._el;var n=this._settings;var r=this._items;var i=r.length;var s=this.randomArray(i);var o;var u;var a=n.off;var f=n.blink;var l=this;a=Math.min(a,i);a=Math.max(0,a);u=s.splice(0,a);e.each(u,function(t,n){l.off(e(r[n]))});f=f===0?i:f;f=Math.min(f,i-a);f=Math.max(0,f);o=s.splice(0,f);return o};t.prototype.randomArray=function(e){var t=[];var n;var r;var i;for(n=0;n<e;++n){t[n]=n}for(n=0;n<e;++n){r=parseInt(Math.random()*e,10);i=t[r];t[r]=t[n];t[n]=i}return t};t.prototype.loop=function(){if(!this._powerOn)return;var t=this._el;var n=this._settings;var r=this._blinkArr;var i=this._items;if(r.length===0)return;var s;var o;var u=this;s=r[this.rand(0,r.length-1)];o=e(i[s]);if(!o[0].blinking)this.blink(o);this._loopTimeout=setTimeout(function(){u.loop()},this.rand(n.loopMin,n.loopMax))};t.prototype.blinkOn=function(){if(!this._powerOn){var e=this._settings;var t=this;this._powerOn=true;this._loopTimeout=setTimeout(function(){t.loop()},this.rand(e.loopMin,e.loopMax))}};t.prototype.blinkOff=function(){if(this._powerOn){this._powerOn=false;clearTimeout(this._loopTimeout)}};t.prototype.bindEvent=function(){var e=this._el;var t=this;e.on("blinkOn",function(e){t.blinkOn()});e.on("blinkOff",function(e){t.blinkOff()})};var n=function(t){var n=e.extend({reblinkProbability:1/3,blinkMin:.01,blinkMax:.5,loopMin:.5,loopMax:2,color:"ORANGE",glow:["0 0 80px Orange","0 0 30px Red","0 0 6px Yellow"],off:0,blink:0,autoOn:true},t);n.reblinkProbability*=100;n.blinkMin*=1e3;n.blinkMax*=1e3;n.loopMin*=1e3;n.loopMax*=1e3;return n};e.fn.novacancy=function(r){return e.each(this,function(e,i){new t(this,n(r))})}})(jQuery);
        $(function() {
            $('#error').novacancy({
                'reblinkProbability': 0.1,
                'blinkMin': 0.2,
                'blinkMax': 0.6,
                'loopMin': 8,
                'loopMax': 10,
                'color': '#ffffff',
                'glow': ['0 0 80px #ffffff', '0 0 30px #008000', '0 0 6px #0000ff']
            });
            return $('#code').novacancy({
                'blink': 1,
                'off': 1,
                'color': 'Red',
                'glow': ['0 0 80px Red', '0 0 30px FireBrick', '0 0 6px DarkRed']
            });
        });

    }).call(this);


    $(document).ready(function() {

        jQuery("#slider2").revolution({
            sliderType:"standard",
            sliderLayout:"auto",
            dottedOverlay:"none",
            delay:12000,
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                onHoverStop:"off",
                tabs: {
                    style:"hesperiden",
                    enable:true,
                    width:350,
                    height:80,
                    min_width:250,
                    wrapper_padding:20,
                    wrapper_color:"#ffffff",
                    wrapper_opacity:"1",
                    tmp:'<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title">{{title}}</span></div><div class="tp-tab-image"></div>',
                    visibleAmount: 5,
                    hide_onmobile: false,
                    hide_onleave:false,
                    hide_delay:200,
                    direction:"horizontal",
                    span:false,
                    position:"outer-bottom",
                    space:0,
                    h_align:"left",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:0
                },
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "hesperiden",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: false,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    }
                }
            },
            gridwidth:1920,
            gridheight:700,
            lazyType:"smart",
            shadow:0,
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
                simplifyAll:"off",
                nextSlideOnWindowFocus:"off",
                disableFocusListener:false,
            }



        });

    });




    $('#yspa').owlCarousel({

        loop: true,
        margin: 30,
        autoplay: false,
        items: 3,

        responsiveClass:true,
        responsive:{
            320:{
                items:1,
                autoplay: true
            },
            768:{
                items:2,
                autoplay: true
            },
            1000:{
                items:3
            }
        }
    });

    $('.owl-carousel').owlCarousel({

        loop: true,
        margin: 85,
        autoplay: false,
        items: 3,

        responsiveClass:true,
        responsive:{
            320:{
                items:1,
                autoplay: true
            },
            600:{
                items:2,
                autoplay: true
            },
            1000:{
                items:3
            }
        }
    });


})(jQuery); // End of use strict


