function checkForm() {
    var canSubmit = false;

    if (document.getElementById('content').value.length > 5){
        canSubmit = true;
    }

    if (canSubmit){
        document.getElementById('newAnswerButton').disabled = false;
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