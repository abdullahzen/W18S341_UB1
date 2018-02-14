$(document).ready(function () {
    $("#Notifications").click(function () {
        if ($('#notifications-container').css('display') == 'none') {
            $("#notifications-container").css('display', 'block');
        }
        else {
            $("#notifications-container").css('display', 'none');
        }
    });


    /*	$(".comment_button1").click(function(){
            if($('#comments_section1').css('display') == 'none'){
            $("#comments_section1").css('display','block');
            }
            else{
                $("#comments_section1").css('display','none');
            }
        });

        */

    /*	$("[aria-controls='expando-unique-id-1']").click(function(){
            if($( "#section1" ).hasClass( "slds-is-open" )){
                $("#section1").removeClass("slds-is-open");
            }
            else{
                $("#section1").addClass("slds-is-open");
            }
        }); */


    (function () {
        var cx = '017643444788069204610:4gvhea_mvga'; // Insert your own Custom Search Engine ID here
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = (document.location.protocol == 'https' ? 'https:' : 'http:') +
            '//www.google.com/cse/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
    })();

});

function showJavaScript() {
    $("#JavaScriptli").addClass("slds-is-active");
    $("#Javali").removeClass("slds-is-active");
    $("#Phpli").removeClass("slds-is-active");
    $("#Cli").removeClass("slds-is-active");

    $("#Java").css('display', 'none');
    $("#Php").css('display', 'none');
    $("#C").css('display', 'none');
    $("#Javascript").css('display', 'block');
}

function showJava() {
    $("#Javali").addClass("slds-is-active");
    $("#JavaScriptli").removeClass("slds-is-active");
    $("#Phpli").removeClass("slds-is-active");
    $("#Cli").removeClass("slds-is-active");

    $("#Javascript").css('display', 'none');
    $("#Php").css('display', 'none');
    $("#C").css('display', 'none');
    $("#Java").css('display', 'block');
}

function showC() {
    $("#Cli").addClass("slds-is-active");
    $("#JavaScriptli").removeClass("slds-is-active");
    $("#Phpli").removeClass("slds-is-active");
    $("#Javali").removeClass("slds-is-active");

    $("#Javascript").css('display', 'none');
    $("#Php").css('display', 'none');
    $("#Java").css('display', 'none');
    $("#C").css('display', 'block');
}

function showPhp() {
    $("#Phpli").addClass("slds-is-active");
    $("#JavaScriptli").removeClass("slds-is-active");
    $("#Cli").removeClass("slds-is-active");
    $("#Javali").removeClass("slds-is-active");

    $("#Javascript").css('display', 'none');
    $("#C").css('display', 'none');
    $("#Java").css('display', 'none');
    $("#Php").css('display', 'block');
}

function showpostquestion() {
    $("#postquestion").css('display', 'block');
}

var login = document.getElementById("loginModalButton");
var register = document.getElementById("registerModalButton");

login.onclick = function() {
    modal.style.display = "loginModal";
}

register.onclick = function() {
    modal.style.display = "registerModal";
}