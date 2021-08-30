
var mouseArriba = false;
var imgCollectionSize;
var myTime;
var imgCollection;
var imgActual;
var i =0;


$(document).ready(function () {

    createImgArray();

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
    $(".menu").click(function(){
        openMenu();
    })
}
);

function rightClick() {
    nextImgNameRight();
    transactionRight();
}

function nextImgNameRight() {
    if (imgActual == imgCollectionSize -1) {
        imgActual=0;
    }
    else {
        imgActual++;
    }
}

function transactionRight() {
    $('#divContainer').append($('<img>', { class: 'rightImg', src: imgCollection[imgActual].value, id: imgCollection[imgActual].value }));
    $(".rightImg").animate({ left: "+=-700px" });
    $(".centerImg").animate({ left: "+=-700px" }, function () {

        removeImg();
    });
    $('.centerImg').addClass("deleteImg");
    $('.rightImg').addClass("centerImg");
}

function removeImg() {

    $('.deleteImg').remove();
}


function leftClick() {
    nextImgNameLeft();
    transactionleft();
}

function nextImgNameLeft(){
    if ( imgActual == 0) {
        imgActual = imgCollectionSize-1;  
    }
    else {
        imgActual--;
    }
}

function transactionleft(){
    $('#divContainer').append($('<img>', { class: 'leftImg', src: imgCollection[imgActual].value, id: imgCollection[imgActual].value }));
    $(".leftImg").animate({ left: "+=700px" });
    $(".centerImg").animate({ left: "+=700px" }, function () {
        removeImg();
    });
    $('.centerImg').addClass("deleteImg");
    $('.leftImg').addClass("centerImg");
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



function createImgArray(){
    imgCollection = $(".imgOnLoad");
    imgCollectionSize = imgCollection.length;
    imgActual =0;

}

function openMenu(){
    $("#divMenuInfo").toggleClass("opened");
}