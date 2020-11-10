$(document).ready(function(){
    usersTotal();
    usersPastor();
    usersFemale();
    usersMale();
    usersWedding();
    wordOfDay();
    newUsers4();

    $('#update-username').click(function(){
        let username = $('#newUser');
        let id = $('#userId');
        let action = 'editUsername';

        alert(action)
        $.ajax({
            url: "../admin/config.php",
            method: 'POST',
            data: {username, id, action},
            success: function(data){
                alert(data)
            }
        })
    })
    weddings()
    programmes()
    pastorsList(5)
})

function pastorsList(limit){
    let action = 'pastors-list'
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {action, limit},
        success: function(data){
            $(".pastors-list").html(data)
        }
    })
}

function programmes(){
    let action = 'programmes'
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {action},
        success: function(data){
            $('#programmes').html(data)
        }
    })
}

function  weddings(){
    let action = 'weddingsFind'
    
    $.ajax({
        url: '../event/event.php',
        method: 'POST',
        data: {action},
        success: function(data){
            $('#weddingsFind').html(data)
        }
    })
}

function newUsers4(){
    let action = 'newUsers4'
    let offset = 4
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {action, offset},
        success: function(data){
            $('#newUsers4').html(data)
        }
    })
}

let profile = document.getElementById('profile-img')

function wordOfDay(){
    let action = 'word_of_day'
    $.ajax({
        url: "../event/event.php",
        method: 'POST',
        data: {action},
        success: function(data){
            $("#word_of_day").html(data)
        }
    })
}

function usersTotal(){
    let action = "userTotal"
    $.ajax({
        url: "../event/event.php",
        method: "POST",
        data: {action},
        success: function(data){
            $('#userTotal').html(data)
        }
    })
}
function usersPastor(){
    let action = "userPastor"
    $.ajax({
        url: "../event/event.php",
        method: "POST",
        data: {action},
        success: function(data){
            $('#userPastor').html(data)
        }
    })
}
function usersFemale(){
    let action = "userFemale"
    $.ajax({
        url: "../event/event.php",
        method: "POST",
        data: {action},
        success: function(data){
            $(`#userFemale`).html(data)
        }
    })
}
function usersMale(){
    let action = "userMale"
    $.ajax({
        url: "../event/event.php",
        method: "POST",
        data: {action},
        success: function(data){
            $(`#userMale`).html(data)
        }
    })
}
function usersWedding(){
    let action = "userWedding"
    $.ajax({
        url: "../event/event.php",
        method: "POST",
        data: {action},
        success: function(data){
            $(`#userWedding`).html(data)
        }
    })
}