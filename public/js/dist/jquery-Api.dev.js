"use strict";

$(document).ready(function () {
  function ProgrammeOne() {
    var action = 'programmeOne';
    $.ajax({
      url: './event/event.min.php',
      method: 'post',
      data: {
        action: action
      },
      success: function success(data) {
        $('#programmeOne').html(data);
      }
    });
  }

  ProgrammeOne();
});