$(".link").click(function( event ) {
    event.preventDefault();
    var formData = new FormData($('form')[0]);
    $.ajax({
        type: "POST",
        processData: false,
        contentType: false,
        url: "handler.php",
        data: formData
    }).done(function (data) {
        if (data=="true") {
            console.log('send');
        } else {

            console.log('not send');
        }
    });
});