"use strict";

// blog
findAll();

function findAll() {
  fetch('http://localhost:7000/blog').then(function (res) {
    res.json().then(function (data) {
      if (data.length > 0) {
        var blog = '';
        data.forEach(function (item) {
          blog += "\n                            <div class=\"bg-white p-3 shadow m-3\">\n                                <p class=\"text-blog p-0 m-0\">\n                                    ".concat(item.context, "\n                                </p>\n                                <div class=\"footer-blog\">\n                                    <p class=\"d-flex p-0 m-0 justify-content-between align-items-center\">\n                                        <span>\n                                            <img src=\"../").concat(item.profile_pic, "\" alt=\"UserImg\" class=\"img-fluid boule\">\n                                            <span>\n                                                ").concat(item.username, "\n                                            </span>\n                                        </span>\n                                        \n                                        <span>\n                                            ").concat(item.create_at, "\n                                        </span>\n                                    </p>\n                                </div>\n                            </div>\n                        ");
        });
        document.getElementById('blog').innerHTML = blog;
      }
    })["catch"](function (err) {
      if (err) throw err;
    });
  });
} // Add blog


var add = document.getElementById('Add-blog');
var errors = [];
add.addEventListener('click', addPost);

function addPost(e) {
  e.preventDefault(e);
  var user_id = document.getElementById('user_id').value;
  var context = document.getElementById('ContextMsg').value;

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
    window.location.href = 'notifications.php';
  }
} // End blog
// Jquery


$(document).ready(function () {
  $('.body-not').animate({
    scrollTop: $('.body-not').prop('scrollHeight')
  }, 1000);
});