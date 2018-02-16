$(document).ready(function () {
    var login = document.getElementById("loginButton");
    var loginModal = document.getElementById('loginModal');

    var register = document.getElementById("registerButton");
    var registerModal = document.getElementById('registerModal');

    var span = document.getElementsByClassName("close")[0];
    var spanR = document.getElementsByClassName("closeR")[0];

    login.onclick = function() {
        loginModal.style.display = "block";
    }

    register.onclick = function() {
        registerModal.style.display = "block";
    }

    span.onclick = function() {
        loginModal.style.display = "none";
        registerModal.style.display = "none";
    }

    spanR.onclick = function() {
        registerModal.style.display = "none";
    }

    // Fix this if you want
    window.onclick = function(event) {
        if (event.target == loginModal) {
            loginModal.style.display = "none";
        }

        if (event.target == registerModal) {
            registerModal.style.display = "none";
        }
    }

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


function displaycategories() {
    $("#categories").css('display', 'block');
	showJava();
	$("#postquestions").css('width', '77%');
}