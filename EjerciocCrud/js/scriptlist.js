var scriptlist = {};
var selected;
scriptlist.open = $(document).ready(function () {

  $("#divbtn").click(function () {
    $(".imgcheck.open").each(function () {
      var id = $(this).attr("data-user-id");
      var add = 'delete';
      $.ajax({
        type: "POST",
        url: "../controllers/controller.php",
        data: { add: add, id: id },
        success: function (response) {
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

  $(".editDiv").click(function (event) {
    $(this).toggleClass("open");
    console.log($(this));
  });


  $("#txtPhone").on("input", function () {
    scriptlist.search();
  });
});


scriptlist.search = function () {
  let inp = $("#txtPhone").val();
  console.log(inp);
  $(".firstElem").each(function () {
    let row = $(this).text()
    row = row.replace(/\r?\n|\r/g, " ");
    console.log(row);

    if (row.indexOf(inp) >= 0) {
      $(this).removeClass("disappear")
    } else {
      if (!$(this).hasClass("disappear")) {
        $(this).addClass("disappear");
      }
    }
  })

  $(".secElem").each(function () {
    let row = $(this).text()
    row = row.replace(/\r?\n|\r/g, " ");
    console.log(row);

    if (row.indexOf(inp) >= 0) {
      $(this).removeClass("disappear")
    } else {
      if (!$(this).hasClass("disappear")) {
        $(this).addClass("disappear");
      }
    }
  })
}

