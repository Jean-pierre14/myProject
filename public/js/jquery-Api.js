$(document).ready(function(){
    function ProgrammeOne(){
        let action = 'programmeOne'
        $.ajax({
            url: './event/event.min.php',
            method: 'post',
            data: {action},
            success: function(data){
                $('#programmeOne').html(data)
            }
        })
    }
    function testimonial(){
        let action = 'testimonial'
        $.ajax({
            url: './event/event.min.php',
            method: 'post',
            data: {action},
            success: function(data){
                $('#testimonial').html(data)
            }
        })
    }
    ProgrammeOne()
    testimonial()
})