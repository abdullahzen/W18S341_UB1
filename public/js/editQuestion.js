$(function(){
    $("#saveButton").click(function () {
        $(". ").hide();
        var request = $.post('./editQuestion/do', $('#editForm').serialize());
        request.done(function () {
            window.location = '/';
        });

        request.fail(function (jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            var err = data.message;

            var errMsg = '<div class=\"col-md-12 showErr\">' + err + '</div>';

            $("#editError").empty().append(errMsg);
        });
    });
});
