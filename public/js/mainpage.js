$(document).ready(function () {
    var login = document.getElementById("loginButton");
    var loginModal = document.getElementById('loginModal');

    /*var post = document.getElementById("newpostButton");
    var postModal = document.getElementById('postModal');*/

    var register = document.getElementById("registerButton");
    var registerModal = document.getElementById('registerModal');

    var favButton = document.getElementById("favButton");
    var favModal = document.getElementById('favModal');

    var notificationButton = document.getElementById("notificationButton");
    var notificationModal = document.getElementById('notificationModal');

    var userProfile = document.getElementById("userProfileButton");
    var userProfileModal = document.getElementById("userProfileModal");
    // var moreOptionsContainer = document.getElementById("More-Options-Container");

    var editProfileModal = document.getElementById('editProfileModal');
    var editProfile = document.getElementById('editProfileModalButton');

    var span = document.getElementsByClassName("close")[0];
    var spanR = document.getElementsByClassName("closeR")[0];
    //var spanP = document.getElementsByClassName("closeP")[0];
    var spanU = document.getElementsByClassName("closeU")[0];
    var spanF = document.getElementsByClassName("closeF")[0];
    // var spanM = document.getElementsByClassName("More-Options")[0];

    showCategory('Java');

    if(favButton != null) {
        favButton.onclick = function () {
            favModal.style.display = "block";
        }
    }

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

    if(editProfile != null){
        editProfile.onclick = function() {
            editProfileModal.style.display = "block";
        }
    }

    /*post.onclick = function(){
        postModal.style.display = "block";
    }*/

    if(loginModal != null && loginModal.style.display !== "block"){
        span.onclick = function() {
            loginModal.style.display = "none";
        }
    }

    if(registerModal != null && registerModal.style.display !== "block") {
        spanR.onclick = function () {
            registerModal.style.display = "none";
        }
    }

    /*spanP.onclick = function() {
        postModal.style.display = "none";
    }*/

    if(userProfileModal != null && userProfileModal.style.display !== "block") {
        spanU.onclick = function () {
            userProfileModal.style.display = "none";
        }
    }

    if(favModal != null && favModal.style.display !== "block"){
        spanF.onclick = function () {
            favModal.style.display = "none";
        }
    }

    if(notificationModal != null && notificationModal.style.display !== "block") {
        spanN.onclick = function () {
            notificationModal.style.display = "none";
        }
    }

    // spanM.onclick = function() {
    //     moreOptionsContainer.style.display = "block";
    // }

    // Fix this if you want
    window.onclick = function(event) {
        if (event.target == loginModal) {
            if (loginModal != null)
                loginModal.style.display = "none";
        }

        if (event.target == registerModal) {
            if (registerModal != null)
                registerModal.style.display = "none";
        }
        if (event.target == userProfileModal) {
            if (userProfileModal != null)
                userProfileModal.style.display = "none";
        }
        if (event.target == editProfileModal) {
            if(editProfileModal != null)
                editProfileModal.style.display = "none";
        }
        if (event.target == favModal) {
            if (favModal != null)
                favModal.style.display = "none";
        }
    }

   


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


/*    (function () {
        var cx = '017643444788069204610:4gvhea_mvga'; // Insert your own Custom Search Engine ID here
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = (document.location.protocol == 'https' ? 'https:' : 'http:') +
            '//www.google.com/cse/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
    })();*/

});

function shownotifications(){
        if ($('#notifications-container').css('display') == 'none') {
            $("#notifications-container").css('display', 'block');
        }
        else {
            $("#notifications-container").css('display', 'none');
        }

}

function showCategory(category){
    $(".languageItem").removeClass("slds-is-active");
    $(".language").css('display', 'none');
    $("#" + category + "li").addClass("slds-is-active");
    $("#" + category).css('display', 'block');
}

function showpostquestion() {
    $("#postquestion").css('display', 'block');
}


function displaycategories() {
   if ($('#categories').css('display') == 'none') {
		$("#categories").css('display', 'block');
		$("#favourites").css('display', 'block');
       $(".language").css('width', '78%');
       $(".language").css('float', 'left');
	}
	else {
            $("#categories").css('display', 'none');
			$("#favourites").css('display', 'none');
			$(".language").css('width', '100%');
        }
}

function Search(searchstring, event) {
	if (event.keyCode == 13 || event.which == 13){
        window.open("/search/" + searchstring, "_self");
	}
}
