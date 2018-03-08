function checkForm() {
    var canSubmit = false;

    if (document.getElementById('content').value.length > 5 && document.getElementById('title').value.length > 5){
        canSubmit = true;
    }

    if (document.getElementById('content').value.length > 250 && document.getElementById('title').value.length > 250){
        canSubmit = false;
    }

    if (!canSubmit){
        document.getElementById('newpostButton').disabled = true;
    }

    if (canSubmit){
        document.getElementById('newpostButton').disabled = false;
    }
}

$(function(){
    $("#newpostButton").click(function () {
        $(". ").hide();
        var request = $.post('./newpost/do', $('#postForm').serialize());
        request.done(function () {
            window.location = '/';
        });

        request.fail(function (jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            var err = data.message;

            var errMsg = '<div class=\"col-md-12 showErr\">' + err + '</div>';

            $("#postError").empty().append(errMsg);
        });
    });
});
