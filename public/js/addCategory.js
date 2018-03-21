function checkForm() {
    var canSubmit = false;

    if (document.getElementById('newCat').value.length > 0 && document.getElementById('newCat').value.length < 10){
        canSubmit = true;
    } else {
        canSubmit = false;
    }

    if (canSubmit){
        document.getElementById('saveNewCategory').disabled = false;
    } else {
        document.getElementById('saveNewCategory').disabled = true;
    }
}

$(function(){
    $("#saveNewCategory").click(function () {
        $(". ").hide();
        var request2 = $.get('/addNewCategory', $('#newCategoryForm').serialize());
        request2.done(function () {
            alert('sd');
            window.location = '/';

        });

        request2.fail(function (jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            var err = data.message;

            var errMsg = '<div class=\"col-md-12 showErr\">' + err + '</div>';

            $("#registerError").empty().append(errMsg);
        });
    });
});







