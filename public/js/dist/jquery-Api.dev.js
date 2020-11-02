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

  function testimonial() {
    var action = 'testimonial';
    $.ajax({
      url: './event/event.min.php',
      method: 'post',
      data: {
        action: action
      },
      success: function success(data) {
        $('#testimonial').html(data);
      }
    });
  }

  function pastors() {
    var action = 'pastors-5';
    $.ajax({
      url: './event/event.min.php',
      method: 'post',
      data: {
        action: action
      },
      success: function success(data) {
        $('#pastors-5').html(data);
      }
    });
  }

  function weddings() {
    var action = 'weddings';
    $.ajax({
      url: './event/event.min.php',
      method: 'post',
      data: {
        action: action
      },
      success: function success(data) {
        $('#weddings-list').html(data);
      }
    });
  }

  ProgrammeOne();
  testimonial();
  pastors();
  weddings();
});