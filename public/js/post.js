function checkForm() {
    var canSubmit = false;

    if (document.getElementById('title').value.length > 5 && document.getElementById('title').value.length < 251 && document.getElementById('content').value.length < 251 && document.getElementById('content').value.length > 5){
        canSubmit = true;
    } else {
        canSubmit = false;
    }

    if (canSubmit){
        document.getElementById('newQuestionButton').disabled = false;
    } else {
        document.getElementById('newQuestionButton').disabled = true;
    }
}

$(function(){
    $("#newpostButton").click(function () {
        $(". ").hide();
        var request = $.get('/newpost/do', $('#postForm').serialize());
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
