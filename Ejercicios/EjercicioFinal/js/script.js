

var mouseArriba = false;
var i = 1;
var noflecha = false;

$(document).ready(function () {
    $("#rightArrow").click(function () {
        rightClick();
        noflecha = true;
    })
    $("#leftArrow").click(function () {
        leftClick();
        noflecha = true;
    })
    setInterval(function () {
        sigImagen();
    }, 3000
    );
}
);

function rightClick() {
    if (i == 4) {
        i = 1;
    }
    else {
        i++;
    }
    var nombre = "imagen" + i + ".jpg";
    $('#divContainer').append($('<img>', { class: 'rightImg', src: nombre, id: i }));
    $(".rightImg").animate({ left: "+=-700px" });
    $(".centerImg").animate({ left: "+=-700px" }, function () {
        if (i == 1) {
            $('#' + (4)).remove();
        } else {
            $('#' + (i - 1)).remove();
        }
    });
    $('.rightImg').addClass("centerImg");
}

function leftClick() {
    if (i <= 1) {
        i = 4;
    }
    else {
        i--;
    }
    var nombre = "imagen" + i + ".jpg";
    $('#divContainer').append($('<img>', { class: 'leftImg', src: nombre, id: i }));
    $(".leftImg").animate({ left: "+=700px" });
    $(".centerImg").animate({ left: "+=700px" }, function () {
        if (i == 4) {
            $('#' + (1)).remove();
        } else {
            $('#' + (i + 1)).remove();
        }
    });
    $('.leftImg').addClass("centerImg");
}


function sigImagen() {
    $("#divContainer").mouseenter(function () {
        mouseArriba = true;
    });
    $("#divContainer").mouseleave(function () {
        mouseArriba = false;
    });
    if (!mouseArriba && !noflecha) {
        rightClick();
    }

}

