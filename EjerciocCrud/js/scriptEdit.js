var scriptedit= {};
$(document).ready(function () {

  $("#txtPhone").on("input", function () {
    let inp = $("#txtPhone").val();
    if (isNaN(inp)) {
      $(this).addClass("open");
      isnum = false;
    }else{
      $(this).removeClass("open");
      isnum = true;
    }
  });
    $("#divSave").click(function () {

      var name = $("#txtName").val();
    var mail = $("#txtMail").val();
    var password = $("#txtPassword").val();
    var phone = $("#txtPhone").val();
    var add = 'add';

    if (name.length <= 0 || mail.length <= 0 || name.length <= 0 || phone.length <= 0 || !isnum) {
      alert("todos los campos deben estar ingresados correctamente");
    } else {
        var name = $("#txtName").val();
        var mail = $("#txtMail").val();
        var password = $("#txtPassword").val();
        var phone = $("#txtPhone").val();
        var add = 'edit';
        var id = $("#divSave").attr("data-user-id");
        $.ajax({
            type: "POST",
            url: "../controllers/controller.php",
            data: { add:add, name: name, mail: mail, password: password, phone: phone, id:id },
            success: function (response) {
            },
            error: function () {
              alert(
                "Error obteniendo datos del sitio, verifique su conexión a internet."
              );
            },
          });
        }
    });
  });