$(document).ready(function () {
    var login = document.getElementById("loginButton");
    var loginModal = document.getElementById('loginModal');

    var register = document.getElementById("registerButton");
    var registerModal = document.getElementById('registerModal');

    var favButton = document.getElementById("favButton");
    var favModal = document.getElementById('favModal');

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

    showCategory('Java');

    if (favButton != null) {
        favButton.onclick = function () {
            favModal.style.display = "block";
        }
    }

    if (login != null) {
        login.onclick = function () {
            loginModal.style.display = "block";
        }
    }

    if (register != null) {
        register.onclick = function () {
            registerModal.style.display = "block";
        }
    }

    if (userProfile != null) {
        userProfile.onclick = function () {
            userProfileModal.style.display = "block";
        }
    }

    if (editProfile != null) {
        editProfile.onclick = function () {
            editProfileModal.style.display = "block";
        }
    }

    /*post.onclick = function(){
        postModal.style.display = "block";
    }*/

    span.onclick = function () {
        loginModal.style.display = "none";
    };

    spanR.onclick = function () {
        registerModal.style.display = "none";
    };

    /*spanP.onclick = function() {
        postModal.style.display = "none";
    }*/

    spanU.onclick = function () {
        userProfileModal.style.display = "none";
    };

    spanF.onclick = function () {
        favModal.style.display = "none";
    };

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

function shownotifications() {
    if ($('#notifications-container').css('display') == 'none') {
        $("#notifications-container").css('display', 'block');
    }
    else {
        $("#notifications-container").css('display', 'none');
    }

}

function showCategory(category) {
    $(".languageItem").removeClass("slds-is-active");
    $(".language").css('display', 'none');
    $("#" + category + "li").addClass("slds-is-active");
    $("#" + category).css('display', 'block');
}

function showpostquestion() {
    $("#postquestion").css('display', 'block');
}

function Search(searchstring, event) {
    if (event.keyCode == 13 || event.which == 13) {
        if (searchstring.trim() == "") {
            alert("This field cannot be empty.");
        } else {
            window.open("/search=" + searchstring, "_self");
        }
    }
}
