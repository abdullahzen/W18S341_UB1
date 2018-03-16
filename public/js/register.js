function checkValidForm() {
    var msg = "";
    var email = document.getElementById('email').value;
    var emailCheck = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;

    var canSubmit = false;

    if (document.getElementById('username').value.length < 6) {
        msg = "Username must be at least 6 char long.";
        document.getElementById('registerError').innerText = msg;
    } else if (!emailCheck.test(email)) {
        msg = "E-Mail must be valid.";
        document.getElementById('registerError').innerText = msg;
    } else if (document.getElementById('password').value != document.getElementById('passwordConfirmation').value || document.getElementById('password').value.length < 6) {
        msg = "Password and Confirm Password must match and be at least 6 char long.";
        document.getElementById('registerError').innerText = msg;
    } else {
        document.getElementById('registerError').innerText = "";
    }

    if (document.getElementById('username').value.length > 5 &&
        emailCheck.test(email) &&
        document.getElementById('password').value.length > 5 &&
        document.getElementById('passwordConfirmation').value.length > 5 &&
        document.getElementById('password').value == document.getElementById('passwordConfirmation').value){
        canSubmit = true;
    } else {
        canSubmit = false;
    }

    if (canSubmit){
        document.getElementById('submitButton').disabled = false;
    } else {
        document.getElementById('submitButton').disabled = true;
    }
}

$(function(){
    $("#submitButton").click(function () {
        /*$(". ").hide();*/
        var request = $.post('./register', $('#registrationForm').serialize());
        request.done(function () {
            window.location = '/';
        });
        
        request.fail(function (jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            var err = data.message;

            var errMsg = '<div class=\"col-md-12 showErr\">' + err + '</div>';

            $("#registerError").empty().append(errMsg);
        });
    });
});
