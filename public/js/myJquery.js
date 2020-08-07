$(document).ready(() => {
    news();
    about();


});



function news() {
    let action = 'newsResult';
    $.ajax({
        url: './event/event.php',
        method: 'post',
        data: { action: action },
        success: function (data) {
            $('.newsResult').html(data);
        }
    })
}


function about() {
    $(document).on("click", ".about_btn", function () {
        let action = 'aboutUpdate';
        let about = $('#about_up').val();
        let id = $('#id_up').val();

        if (about === '' || about === undefined) {
            $('#messageError').show();
            $('#messageError').text('Your field is empty');
        } else {
            $('#messageError').hide();
            $('#messageError').text('');
            $.ajax({
                url: '../event/event.php',
                method: 'post',
                data: { action: action, about: about, id: id },
                success: function (data) {
                    if (data == 'success') {
                        $('#about_up').val('');
                        $('#messageSuccess').show();
                        $('#messageSuccess').text(data);
                    } else {
                        $('#about_up').val('');
                        $('#messageError').show();
                        $('#messageError').text('Empty field please complet it');
                    }
                }
            })
        }
    });
}