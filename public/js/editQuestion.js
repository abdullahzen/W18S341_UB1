$(function(){
    $("#editButton").click(function () {
        $(". ").hide();
        var id = document.getElementById('hiddenID').value;
        var request = $.post('/edit', $('#editForm').serialize());
        request.done(function () {
            window.location = './post/' + id;

        });

        request.fail(function (jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            var err = data.message;

            var errMsg = '<div class=\"col-md-12 showErr\">' + err + '</div>';

            $("#editError").empty().append(errMsg);
        });
    });

    $("#newOther").hide();

    $("#select").change(function() {
        var val = $("#select").val();
        if(val=="other"){
            $("#newOther").show();
        } else {
            $("#newOther").hide();
        }
    });
});

var spanE = document.getElementsByClassName("closeE")[0];

var editModal = document.getElementById('editModal');
var editQuestion = document.getElementById('editQuestionButton');

spanE.onclick = function() {
        editModal.style.display = "none";
    }

if(editQuestion != null){
    editQuestion.onclick = function() {
        editModal.style.display = "block";
        getCategory(document.getElementById('hiddenCategory').value);
    }
}

// Fix this if you want
window.onclick = function(event) {
    if (event.target == editModal) {
        editModal.style.display = "none";
    }
}

function getCategory(category){
    document.getElementById(category + 'e').selected = true;
}

$("#More-Options").click(function () {
    if ($('#More-Options-Container').css('display') == 'none') {
        $("#More-Options-Container").css('display' , 'block');
    }
    else {
        $("#More-Options-Container").css('display' , 'none');
    }
});

function newCategory(){
    var doc = document.getElementById('other');
    doc.value = document.getElementById('newOther').value;
    doc.id = doc.value;
}



