var script = {};
var mouseArriba = false;
var imgCollectionSize;
var myTime;
var imgCollection;
var imgActual;
var i = 0;

$(document).ready(function () {
  script.createImgArray();

  $("#divContainer").addClass("open");

  $("#rightArrow").click(function () {
    script.rightClick();
    script.longerTimer();
  });

  $("#leftArrow").click(function () {
    script.leftClick();
    script.longerTimer();
  });

  myTime = setInterval(function () {
    script.sigImagen();
  }, 3000);
  $(".menu").click(function () {
    script.openMenu();
  });

  $("#logout").click(function () {
    script.killSession();
  });
});

script.rightClick = function rightClick() {
  script.nextImgNameRight();
  script.transactionRight();
};

script.nextImgNameRight = function () {
  if (imgActual == imgCollectionSize - 1) {
    imgActual = 0;
  } else {
    imgActual++;
  }
};

script.transactionRight = function () {
  $("#divContainer").append(
    $("<img>", {
      class: "rightImg",
      src: imgCollection[imgActual].value,
      id: imgCollection[imgActual].value,
    })
  );
  $(".rightImg").animate({ left: "+=-700px" });
  $(".centerImg").animate({ left: "+=-700px" }, function () {
    script.removeImg();
  });
  $(".centerImg").addClass("deleteImg");
  $(".rightImg").addClass("centerImg");
};

script.removeImg = function () {
  $(".deleteImg").remove();
};

script.leftClick = function () {
  script.nextImgNameLeft();
  script.transactionleft();
};

script.nextImgNameLeft = function () {
  if (imgActual == 0) {
    imgActual = imgCollectionSize - 1;
  } else {
    imgActual--;
  }
};

script.transactionleft = function () {
  $("#divContainer").append(
    $("<img>", {
      class: "leftImg",
      src: imgCollection[imgActual].value,
      id: imgCollection[imgActual].value,
    })
  );
  $(".leftImg").animate({ left: "+=700px" });
  $(".centerImg").animate({ left: "+=700px" }, function () {
    script.removeImg();
  });
  $(".centerImg").addClass("deleteImg");
  $(".leftImg").addClass("centerImg");
};

script.sigImagen = function () {
  $("#divContainer").mouseenter(function () {
    mouseArriba = true;
  });

  $("#divContainer").mouseleave(function () {
    mouseArriba = false;
  });
  if (!mouseArriba) {
    script.rightClick();
  }
};

script.longerTimer = function () {
  clearInterval(myTime);
  myTime = setInterval(function () {
    sigImagen();
    clearInterval(myTime);
    myTime = setInterval(function () {
      sigImagen();
    }, 3000);
  }, 10000);
};

script.createImgArray = function () {
  imgCollection = $(".imgOnLoad");
  imgCollectionSize = imgCollection.length;
  imgActual = 0;
};

script.openMenu = function () {
  $("#divMenuInfo").toggleClass("opened");
};

script.killSession = function(){
  $.ajax({
    type: "POST",
    url: "/logOut.php",
    data: { },
    success: function (response) {
        var url = "/loginAjax.php";
        $(location).attr("href", url);
    },
    error: function () {
      alert(
        "Error obteniendo datos del sitio, verifique su conexión a internet."
      );
    },
  });
};
