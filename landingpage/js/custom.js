$(document).ready(function() {

"use strict";


/* =================================
   LOADER                     
=================================== */
// makes sure the whole site is loaded
$(window).on('load', function() {

    // will first fade out the loading animation
    $(".loader-inner").fadeOut();
    // will fade out the whole DIV that covers the website.
    $(".loader").fadeOut("slow");

});



/* ===========================================================
    WOW ANIMATIONS                   
============================================================== */
new WOW().init();


/* ===========================================================
   HIDE MOBILE MENU AFTER CLICKING 
============================================================== */
$('.navbar-nav>li>a:not(#dLabel)').on('click', function(){
    $('#navbar-collapse').removeClass("in").addClass("collapse"); 
});


/* ==========================================
   FUNCTION FOR EMAIL ADDRESS VALIDATION
============================================= */
function isValidEmail(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}


/* ==========================================
   FUNCTION FOR PHONE NUMBER VALIDATION
============================================= */
function isValidPhoneNumber(phoneNumber) {
    return phoneNumber.match(/[0-9-()+]{3,20}/);
}


/* ==========================================
   QUOTE FORM
============================================= */
$("#quoteForm").on('submit', function(e) {
    e.preventDefault();
    var data = {
        name: $("#qName").val(),
        email: $("#qEmail").val(),
        phone: $("#qPhone").val(),
    };

    if ( isValidEmail(data['email']) && (data['name'].length > 1) && isValidPhoneNumber(data['phone']) ) {
        $.ajax({
            type: "POST",
            url: "php/quote.php",
            data: data,
            success: function() {
                self.location = "https://www.villadoeden.com.br/landingpage/obrigado";

                // $('.success.qf').delay(500).fadeIn(1000);
                // $('.failed.qf').fadeOut(500);
            }
        });
    } else {
        // alert("falha");
        $('.failed.qf').delay(500).fadeIn(1000);
    }

    return false;
});




/* ===========================================================
   BOOTSTRAP FIX FOR IE10 in Windows 8 and Windows Phone 8  
============================================================== */
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style');
    msViewportStyle.appendChild(
        document.createTextNode(
            '@-ms-viewport{width:auto!important}'
            )
        );
    document.querySelector('head').appendChild(msViewportStyle);
}



}); // End $(document).ready Function