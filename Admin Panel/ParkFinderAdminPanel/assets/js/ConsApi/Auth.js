const domain = (new URL(window.location.href))
localStorage.removeItem('urlOfRequest')
setInterval(function () {

  if (localStorage.getItem('jwToken') != null) {
    $.ajax({
      type: 'POST',
      headers: {
        "jwToken": localStorage.getItem('jwToken')
      },
      url: 'http://' + domain.hostname + ':3000/api/tokenVerification',
      success: function (res) {

      },
      error: function (error) {
        localStorage.setItem('urlOfRequest', window.location.href)
        window.location.href = "http://" + domain.hostname + "/ParkFinderAdminPanel/pages/AuthPage";
      }
    })
  }
  else {
    localStorage.setItem('urlOfRequest', window.location.href)
    window.location.href = "http://" + domain.hostname + "/ParkFinderAdminPanel/pages/AuthPage";

  }
}, 1000)




