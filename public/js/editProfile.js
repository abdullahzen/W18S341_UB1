$(function(){
    $("#editProfileButton").click(function () {
        $(". ").hide();
        var request = $.post('/editProfile', $('#editProfileForm').serialize());
        request.done(function () {
            window.location = '/';

        });

        request.fail(function (jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            var err = data.message;

            var errMsg = '<div class=\"col-md-12 showErr\">' + err + '</div>';

            $("#editProfileError").empty().append(errMsg);
        });
    });
});