/* ========= INFORMATION ============================

 - document:  Slick Modals - HTML5 and CSS3 powered modal popups
 - version:   4.0

 ==================================================== */

!function(i){i.fn.slickModals=function(o){var n=i.extend({cookieTriggerClass:"setSlickCookie",cookieName:"slickCookie"},o);return this.each(function(){function o(o){"center"===o?i(y).children(".slickWindow").css({margin:"auto"}):"bottomCenter"===o||"topCenter"===o?i(y).children(".slickWindow").css({"margin-left":"auto","margin-right":"auto"}):"right"!==o&&"left"!==o||i(y).children(".slickWindow").css({"margin-top":"auto","margin-bottom":"auto"})}function e(){i(y).children(".slickWindow").addClass(n.popupAnimationEffect)}function t(){i(y).children(".slickWindow").removeClass(n.popupAnimationEffect)}function a(){n.contentAnimate&&i(y).find(".slickWindow .slickContent").addClass(n.contentAnimateEffect+" animated").css({"-webkit-animation-duration":n.contentAnimateSpeed+"s","animation-duration":n.contentAnimateSpeed+"s","-webkit-animation-delay":n.contentAnimateDelay+"s","animation-delay":n.contentAnimateDelay+"s"})}function s(){n.contentAnimate&&i(y).find(".slickWindow .slickContent").removeClass(n.contentAnimateEffect)}function c(){W.addClass("blurred").css({"-webkit-filter":"blur("+n.blurBgRadius+")",filter:"blur("+n.blurBgRadius+")"})}function l(){W.addClass("scaled").css({"-webkit-transform":"scale("+n.scaleBgValue+")",transform:"scale("+n.scaleBgValue+")"})}function d(){"blur"===n.pageEffect?c():"scale"===n.pageEffect?l():"both"===n.pageEffect&&(c(),l()),"blur"!==n.pageEffect&&"scale"!==n.pageEffect&&"both"!==n.pageEffect||W.css({"-webkit-transition-duration":n.overlayTransitionSpeed+"s","transition-duration":n.overlayTransitionSpeed+"s"})}function r(){(W.hasClass("blurred")||W.hasClass("scaled"))&&W.removeClass("blurred scaled").css({"-webkit-transform":"",transform:"","-webkit-filter":"",filter:""})}function u(){void 0!==n.onSlickLoad&&n.onSlickLoad()}function p(){void 0!==n.onSlickClose&&n.onSlickClose()}function f(){if(!v)if("delayed"===n.popupType)setTimeout(b,n.delayTime);else if("exit"===n.popupType){var o=!1;i(document).on("mouseleave",function(i){i.clientY<0&&!o&&(o=!0,b())})}else if("scrolled"===n.popupType){var e=!1;i(document).scroll(function(){i(this).scrollTop()>n.scrollTopDistance&&!e&&(e=!0,b())})}}function m(){n.videoSupport&&n.videoAutoPlay&&A.length>0&&A.attr("src",B+"?autoplay=1")}function k(){n.videoSupport&&n.videoStopOnClose&&A.length>0&&A.attr("src",B+"?autoplay=0")}function w(){switch(days=n.cookieDays,CookieDate=new Date,CookieDate.setTime(CookieDate.getTime()+24*days*60*60*1e3),n.cookieScope){case"domain":scopeSetting="/";break;case"page":scopeSetting=window.location.href}days>0?document.cookie=n.cookieName+"=true; path="+scopeSetting+"; expires="+CookieDate.toGMTString():0===days&&(document.cookie=n.cookieName+"=true; path="+scopeSetting+";")}function g(){n.autoClose&&(setTimeout(C,n.autoCloseDelay),n.setCookie&&w())}function h(o,e,t){var a={id:i(y).attr("id"),name:n.modalName,summary:n.modalSummary,click:e,impression:o,time:t,isAjax:1,origin:window.location.origin||window.location.protocol+"//"+window.location.hostname+(window.location.port?":"+window.location.port:"")};i.ajax({url:n.fileLocation,type:"POST",data:JSON.stringify(a),dataType:"text",contentType:"application/json; charset=utf-8",error:function(){console.log("Data was not saved.")}})}function b(){i(y).addClass("isActive"),d(),e(),a(),u(),m(),g(),n.enableStats&&(P.Start(),h(D=1,M,E))}function C(){i(y).removeClass("isActive"),r(),t(),s(),p(),k(),n.enableStats&&(P.Stop(),h(D=0,M,E),M=0,E=0)}var y=this,v=document.cookie.indexOf(n.cookieName)>=0,S=window.location.pathname,T=-1===i.inArray(S,n.hideOnPages),A=i(y).find('iframe[src*="youtube.com"]'),B=A.attr("src"),W=i("body > *").not(".slickModal, script"),D=0,E=0,M=0,P={interval:null,Start:function(){this.interval=setInterval(function(){E+=1},1e3)},Stop:function(){window.clearTimeout(this.interval)}};T&&(n.mobileBreakPoint=parseInt(n.mobileBreakPoint),function(){i(y).css({"-webkit-transition-duration":n.overlayTransitionSpeed+"s","transition-duration":n.overlayTransitionSpeed+"s"})}(),function(){n.overlayBg&&(i(y).prepend('<div class="slickOverlay"></div>'),n.overlayClosesModal&&i(y).children(".slickOverlay").addClass("closeModal"),i(y).children(".slickOverlay").addClass(n.cookieTriggerClass).css({background:n.overlayBgColor,"-webkit-transition-duration":n.overlayTransitionSpeed+"s","transition-duration":n.overlayTransitionSpeed+"s"}))}(),function(){n.addCloseButton&&(i(y).children(".slickWindow").prepend('<div class="slickCloseBtn close closeModal '+n.buttonStyle+'"></div>'),n.setCookie&&i(y).find(".slickWindow").children(".closeModal").addClass(n.cookieTriggerClass))}(),function(){n.enableESC&&i(window).bind("keydown",function(i){27===i.keyCode&&C()})}(),i(window).width()>n.mobileBreakPoint?f():i(window).width()<=n.mobileBreakPoint&&n.showOnMobile&&f(),function(){i(y).children(".slickWindow").addClass("animated").css({"box-shadow":n.popupBoxShadow,background:n.popupBackground,"-webkit-animation-duration":n.popupAnimationDuration+"s","animation-duration":n.popupAnimationDuration+"s","-webkit-animation-delay":parseFloat(n.overlayTransitionSpeed)/2+"s","animation-delay":parseFloat(n.overlayTransitionSpeed)/2+"s"}),n.responsive&&i(window).width()<=n.mobileBreakPoint?(i(y).children(".slickWindow").addClass(n.mobileLocation).css({"border-radius":n.mobileRadius,width:n.mobileWidth,height:n.mobileHeight,margin:n.mobileMargin,padding:n.mobilePadding}),o(n.mobileLocation)):(i(y).children(".slickWindow").addClass(n.popupLocation).css({"border-radius":n.popupRadius,width:n.popupWidth,height:n.popupHeight,margin:n.popupMargin,padding:n.popupPadding}),o(n.popupLocation))}(),function(){n.setCookie&&(i("."+n.cookieTriggerClass).on("click",function(){w()}),n.enableESC&&i(window).bind("keydown",function(i){27===i.keyCode&&w()}))}(),function(){n.contentAnimate&&i(y).children(".slickWindow").children().not(".slickCloseBtn").wrapAll('<div class="slickContent"></div>')}(),n.enableStats&&function(){i(y).find(".slickWindow ."+n.callToAction).each(function(){i(this).on("click",function(){M=1,D=0})})}(),i(y).find(".closeModal").on("click",function(){C()}),i("."+n.reopenClass).on("click",function(){b()}))})}}(jQuery);

$(document).ready(function() {

    $(document).ready(function() {
        // Modal 1
        $('#popup-1').slickModals({
            // Popup type
            popupType: 'delayed',
            delayTime: 0,
            scrollTopDistance: 400,
            // Auto closing
            autoClose: false,
            autoCloseDelay: 10000,
            // Popup cookies
            setCookie: false,
            cookieDays: 30,
            cookieTriggerClass: 'setCookie-1',
            cookieName: 'SlickCookie',
            cookieScope: 'domain',
            // Overlay styling
            overlayBg: true,
            overlayClosesModal: true,
            overlayBgColor: 'rgba(0, 0, 0, 0.8)',
            overlayTransitionSpeed: '0.4',
            // Background effects
            pageEffect: 'none',
            blurBgRadius: '1px',
            scaleBgValue: '0.9',
            // Popup styling
            popupWidth: '960px',
            popupHeight: '720px',
            popupLocation: 'center',
            popupAnimationDuration: '0.4',
            popupAnimationEffect: 'slideBottom',
            popupBoxShadow: '0 0 0 rgba(0,0,0,0.0)',
            popupBackground: 'transparent',
            popupRadius: '10px',
            popupMargin: '20px',
            popupPadding: '0',
            // Mobile rules
            showOnMobile: false,
            responsive: true,
            mobileBreakPoint: '760px',
            mobileLocation: 'center',
            mobileWidth: '90%',
            mobileHeight: '90%',
            mobileRadius: '0px',
            mobileMargin: '0px',
            mobilePadding: '0px',
            // Animate content
            contentAnimate: true,
            contentAnimateEffect: 'slideBottom',
            contentAnimateSpeed: '0.4',
            contentAnimateDelay: '0.4',
            // Youtube videos
            videoSupport: true,
            videoAutoPlay: true,
            videoStopOnClose: true,
            // Close and reopen button
            addCloseButton: true,
            buttonStyle: 'labeled',
            enableESC: true,
            reopenClass: 'openSlickModal-1',
            // Additional events
            onSlickLoad: function() {
                // Your code goes here
            },
            onSlickClose: function() {
                // Your code goes here
            }
        });
    });

});


