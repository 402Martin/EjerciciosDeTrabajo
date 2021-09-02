var scriptPhp = {};

$(document).ready(function () {
  $("#btnContinue").click(function () {
    var password = $("#password").val();
    var user = $("#user").val();
    $.ajax({
      type: "POST",
      url: "/checkPassword.php",
      data: { password: password, user: user },

      success: function (response) {
        response = $.parseJSON(response);
        alert(response.message);
        if (response.message == "bien") {
          var url = "/index.php";
          $(location).attr("href", url);
        }
      },
      error: function () {
        alert(
          "Error obteniendo datos del sitio, verifique su conexión a internet."
        );
      },
    });
  });
});
