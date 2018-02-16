$(function(){
    $("#submitButton").click(function () {
        /*$(". ").hide();*/
        var request = $.get('./register', $('#registrationForm').serialize());
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
