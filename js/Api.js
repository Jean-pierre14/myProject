$(document).ready(function(){
    usersTotal();
    usersPastor();
    usersFemale();
    usersMale();
    usersWedding();
})

let profile = document.getElementById('profile-img')


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