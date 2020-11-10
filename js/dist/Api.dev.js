"use strict";

$(document).ready(function () {
  usersTotal();
  usersPastor();
  usersFemale();
  usersMale();
  usersWedding();
  wordOfDay();
  newUsers4();
  $('#update-username').click(function () {
    var username = $('#newUser');
    var id = $('#userId');
    var action = 'editUsername';
    alert(action);
    $.ajax({
      url: "../admin/config.php",
      method: 'POST',
      data: {
        username: username,
        id: id,
        action: action
      },
      success: function success(data) {
        alert(data);
      }
    });
  });
  weddings();
  programmes();
  pastorsList(5);
});

function pastorsList(limit) {
  var action = 'pastors-list';
  $.ajax({
    url: '../event/event.php',
    method: 'post',
    data: {
      action: action,
      limit: limit
    },
    success: function success(data) {
      $(".pastors-list").html(data);
    }
  });
}

function programmes() {
  var action = 'programmes';
  $.ajax({
    url: '../event/event.php',
    method: 'post',
    data: {
      action: action
    },
    success: function success(data) {
      $('#programmes').html(data);
    }
  });
}

function weddings() {
  var action = 'weddingsFind';
  $.ajax({
    url: '../event/event.php',
    method: 'POST',
    data: {
      action: action
    },
    success: function success(data) {
      $('#weddingsFind').html(data);
    }
  });
}

function newUsers4() {
  var action = 'newUsers4';
  var offset = 4;
  $.ajax({
    url: '../event/event.php',
    method: 'post',
    data: {
      action: action,
      offset: offset
    },
    success: function success(data) {
      $('#newUsers4').html(data);
    }
  });
}

var profile = document.getElementById('profile-img');

function wordOfDay() {
  var action = 'word_of_day';
  $.ajax({
    url: "../event/event.php",
    method: 'POST',
    data: {
      action: action
    },
    success: function success(data) {
      $("#word_of_day").html(data);
    }
  });
}

function usersTotal() {
  var action = "userTotal";
  $.ajax({
    url: "../event/event.php",
    method: "POST",
    data: {
      action: action
    },
    success: function success(data) {
      $('#userTotal').html(data);
    }
  });
}

function usersPastor() {
  var action = "userPastor";
  $.ajax({
    url: "../event/event.php",
    method: "POST",
    data: {
      action: action
    },
    success: function success(data) {
      $('#userPastor').html(data);
    }
  });
}

function usersFemale() {
  var action = "userFemale";
  $.ajax({
    url: "../event/event.php",
    method: "POST",
    data: {
      action: action
    },
    success: function success(data) {
      $("#userFemale").html(data);
    }
  });
}

function usersMale() {
  var action = "userMale";
  $.ajax({
    url: "../event/event.php",
    method: "POST",
    data: {
      action: action
    },
    success: function success(data) {
      $("#userMale").html(data);
    }
  });
}

function usersWedding() {
  var action = "userWedding";
  $.ajax({
    url: "../event/event.php",
    method: "POST",
    data: {
      action: action
    },
    success: function success(data) {
      $("#userWedding").html(data);
    }
  });
}