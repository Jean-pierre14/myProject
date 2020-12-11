"use strict";

// blog
function findAll() {
  fetch('http://localhost:7000/blog').then(function (res) {
    res.json().then(function (data) {
      if (data.length > 0) {
        var blog = '';
        data.forEach(function (item) {
          var time = new Date(item.create_at);
          time = "".concat(time.getDate(), "/").concat(time.getMonth(), "/").concat(time.getFullYear(), " >> ").concat(time.getHours() < 10 ? '0' : '').concat(time.getHours(), ":").concat(time.getMinutes() < 10 ? '0' : '').concat(time.getMinutes());
          blog += "\n                            <div class=\"bg-white p-3 shadow m-3\">\n                                <p class=\"text-blog p-0 m-0\">\n                                    ".concat(item.context, "\n                                </p>\n                                <div class=\"footer-blog\">\n                                    <p class=\"d-flex p-0 m-0 justify-content-between align-items-center\">\n                                        <span>\n                                            <img src=\"../").concat(item.profile_pic, "\" alt=\"UserImg\" class=\"img-fluid boule\">\n                                            <span>\n                                                ").concat(item.username, "\n                                            </span>\n                                        </span>\n                                        \n                                        <small>\n                                            ").concat(time, "\n                                        </small>\n                                    </p>\n                                </div>\n                            </div>\n                        ");
        });
        document.getElementById('blog').innerHTML = blog;
        $('.body-not').animate({
          scrollTop: $('.body-not')[0].scrollHeight
        }, 1000);
      }
    })["catch"](function (err) {
      if (err) throw err;
    });
  });
} // Add blog


var add = document.getElementById('Add-blog');
var errors = []; // add.addEventListener('click', addPost)

function addPost(e) {
  e.preventDefault();
  var user_id = document.getElementById('user_id').value; // let context = document.getElementById('ContextMsg').value.trim()

  var context = $('#ContextMsg').val(); // Validation

  if (!user_id || !context) {
    alert("Message is empty");
  } else {
    fetch('http://localhost:7000/blog', {
      method: 'POST',
      headers: {
        'Accept': 'application/json, text/plain, */*',
        'Content-type': 'application/json'
      },
      body: JSON.stringify({
        user_id: user_id,
        context: context
      })
    });
    findAll();
    $('#ContextMsg').val(''); // window.location.href = 'notifications.php'
  }
} // End blog
// Jquery


$(document).ready(function () {
  findAll();
}); // Axios

var newProgramme = document.getElementById('programmeEvent');
newProgramme.addEventListener('click', ProgrammePost);

function ProgrammePost() {
  var userId = document.getElementById('userId').value;
  var title = document.getElementById('title').value;
  var content = document.getElementById('content').value;

  if (!userId || !title || !content) {
    document.getElementById('error').innerHTML = '<p class="alert alert-danger">Fields are not complete</p>';
  } else {
    axios({
      method: 'POST',
      url: 'http://localhost:7000/programmes',
      data: {
        userId: userId,
        title: title,
        content: content
      }
    }).then(function () {
      location.href = 'http://localhost/erc.com/admin/notifications.php?event=programme';
    })["catch"](function (err) {
      return console.error(err);
    });
  }
}

function CountProgrammes() {
  axios({
    method: 'get',
    url: 'http://localhost:7000/programmes/count'
  }).then(function (res) {
    return countPr(res);
  })["catch"](function (err) {
    return console.error('Error is ' + err);
  });
}

function countPr(res) {
  document.getElementById('CountProgrammes').innerHTML = "<small class=\"badge badge-sm badge-danger shadow-sm\">Programmes ".concat(res, "</small>");
}