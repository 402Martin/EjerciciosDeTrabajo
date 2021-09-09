var script= {};
$(document).ready(function () {
    $("#divSave").click(function () {
        var name = $("#txtName").val();
        var mail = $("#txtMail").val();
        var password = $("#txtPassword").val();
        var phone = $("#txtPhone").val();
        var add = 'add';
        $.ajax({
            type: "POST",
            url: "../controllers/controller.php",
            data: { add:add, name: name, mail: mail, password: password, phone: phone },
            success: function (response) {
                alert(response.message);
            },
            error: function () {
              alert(
                "Error obteniendo datos del sitio, verifique su conexión a internet."
              );
            },
          });
    });
  });