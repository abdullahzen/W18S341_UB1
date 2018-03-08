$(document).ready(function () {
    var login = document.getElementById("loginButton");
    var loginModal = document.getElementById('loginModal');

    /*var post = document.getElementById("newpostButton");
    var postModal = document.getElementById('postModal');*/

    var register = document.getElementById("registerButton");
    var registerModal = document.getElementById('registerModal');

    var userProfile = document.getElementById("userProfileButton");
    var userProfileModal = document.getElementById("userProfileModal");
    // var moreOptionsContainer = document.getElementById("More-Options-Container");

    var span = document.getElementsByClassName("close")[0];
    var spanR = document.getElementsByClassName("closeR")[0];
    //var spanP = document.getElementsByClassName("closeP")[0];
    var spanU = document.getElementsByClassName("closeU")[0];
    // var spanM = document.getElementsByClassName("More-Options")[0];


    showJava();

    if(login != null) {
        login.onclick = function () {
            loginModal.style.display = "block";
        }
    }

    if(register != null){
        register.onclick = function() {
            registerModal.style.display = "block";
        }
    }

    if(userProfile != null) {
        userProfile.onclick = function () {
            userProfileModal.style.display = "block";
        }
    }


    /*post.onclick = function(){
        postModal.style.display = "block";
    }*/

    span.onclick = function() {
        loginModal.style.display = "none";
    }

    spanR.onclick = function() {
        registerModal.style.display = "none";
    }

    /*spanP.onclick = function() {
        postModal.style.display = "none";
    }*/

    spanU.onclick = function () {
        userProfileModal.style.display = "none";
    }

    // spanM.onclick = function() {
    //     moreOptionsContainer.style.display = "block";
    // }

    // Fix this if you want
    window.onclick = function(event) {
        if (event.target == loginModal) {
            loginModal.style.display = "none";
        }

        if (event.target == registerModal) {
            registerModal.style.display = "none";
        }
        if (event.target == userProfileModal) {
            userProfileModal.style.display = "none";
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
   if ($('#categories').css('display') == 'none') {
		$("#categories").css('display', 'block');
		$("#favourites").css('display', 'block');
		
		$("#Java").css('width', '78%');
		$("#C").css('width', '78%');
		$("#Javascript").css('width', '78%');
		$("#Php").css('width', '78%');
		$("#Java").css('float', 'left');
		$("#C").css('float', 'left');
		$("#Javascript").css('float', 'left');
		$("#Php").css('float', 'left');
	}
	else {
            $("#categories").css('display', 'none');
			$("#favourites").css('display', 'none');
			$("#Java").css('width', '100%');
			$("#C").css('width', '100%');
			$("#Javascript").css('width', '100%');
			$("#Php").css('width', '100%');
        }
}

function Search(searchstring, event) {
	if (event.keyCode == 13 || event.which == 13){
    window.open("/search/" + searchstring, "_self");
	}
}
