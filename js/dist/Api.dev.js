"use strict";

$(document).ready(function () {
  usersTotal();
});

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