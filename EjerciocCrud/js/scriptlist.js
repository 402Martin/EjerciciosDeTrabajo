var scriptlist = {};
var selected;
scriptlist.open=$(document).ready(function () {

  $("#divbtn").click(function () {
    $(".imgcheck.open").each(function(){
      var sel =$(this).attr("data-user-id");
      var add = 'delete';
      $.ajax({
        type: "POST",
        url: "../controllers/controller.php",
        data: { add:add, sel:sel },
        success: function (response) {
            alert(response.message);
        },
        error: function () {
          alert(
            "Error obteniendo datos del sitio, verifique su conexión a internet."
          );
        },
      }); 
    })
  });

  $(".imgcheck").click(function (event) {
    $(this).toggleClass("open");
    console.log($(this));
    }); 
    
});
