function checkForm() {
    var canSubmit = false;

    if (document.getElementById('content').value.length > 5 && document.getElementById('content').value.length < 251){
        canSubmit = true;
    } else {
        canSubmit = false;
    }

    if (canSubmit){
        document.getElementById('newAnswerButton').disabled = false;
    } else {
        document.getElementById('newAnswerButton').disabled = true;
    }
}

$(function(){
    $("#newpostButton").click(function () {
        $(". ").hide();
        var request = $.get('/post/{id}/newanswer', $('#answerForm').serialize());
        request.done(function () {
            window.location = '/post/{id}';
        });

        request.fail(function (jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            var err = data.message;

            var errMsg = '<div class=\"col-md-12 showErr\">' + err + '</div>';

            $("#postError").empty().append(errMsg);
        });
    });
});