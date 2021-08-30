
var mouseArriba = false;
var i = 1;
var myTime;


$(document).ready(function () {

    $('#divContainer').addClass("open");

    $("#rightArrow").click(function () {
        rightClick();
        longerTimer();
    });

    $("#leftArrow").click(function () {
        leftClick();
        longerTimer();
    });

    myTime = setInterval(function () {
        sigImagen();
    }, 3000);
}
);

function rightClick() {
    nextImgNameRight();
    transactionRight();
}

function nextImgNameRight() {
    if (i == 4) {
        i = 1;
    }
    else {
        i++;
    }
}

function transactionRight() {
    var nombre = "imagen" + i + ".jpg";
    $('#divContainer').append($('<img>', { class: 'rightImg', src: nombre, id: i }));
    $(".rightImg").animate({ left: "+=-700px" });
    $(".centerImg").animate({ left: "+=-700px" }, function () {
        removeRightImg();
    });
    $('.rightImg').addClass("centerImg");
}

function removeRightImg() {
    if (i == 1) {
        $('#' + (4)).remove();
    } else {
        $('#' + (i - 1)).remove();
    }
}


function leftClick() {
    nextImgNameLeft();
    transactionleft();
}

function nextImgNameLeft(){
    if (i <= 1) {
        i = 4;
    }
    else {
        i--;
    }
}

function transactionleft(){
    var nombre = "imagen" + i + ".jpg";
    $('#divContainer').append($('<img>', { class: 'leftImg', src: nombre, id: i }));
    $(".leftImg").animate({ left: "+=700px" });
    $(".centerImg").animate({ left: "+=700px" }, function () {
        removeLeftImg();
    });
    $('.leftImg').addClass("centerImg");
}

function removeLeftImg(){
    if (i == 4) {
        $('#' + (1)).remove();
    } else {
        $('#' + (i + 1)).remove();
    }
}

function sigImagen() {
    $("#divContainer").mouseenter(function () {
        mouseArriba = true;
    });

    $("#divContainer").mouseleave(function () {
        mouseArriba = false;
    });
    if (!mouseArriba) {
        rightClick();
    }

}

function longerTimer() {
    clearInterval(myTime);
    myTime = setInterval(function () {
        sigImagen();
        clearInterval(myTime);
        myTime = setInterval(function () {
            sigImagen();
        }, 3000);
    }, 10000);
}

