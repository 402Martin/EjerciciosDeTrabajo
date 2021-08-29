
/*
$(document).ready(
    function() {
        $("#imgDedos").animate({opacity:1},1000,
            function(){
            alert("Done");
            }
            );
    }
); 
*/
var mouseArriba = false;
var i = 1;
var semaforo = false;
var noflecha = false;

$(document).ready(function () {

    // setInterval(function () {
    //     sigImagen();
    // }, 3000
    // );
    $("#rightArrow").click(function () {
        rightClick();
    })
    $("#leftArrow").click(function () {
        leftClick();
    })
}

);

function rightClick(){
    if(i==4){
        i=1;
    }
    else{
        i++;
    }
	var nombre= "imagen"+i+".jpg";
    $('#divContainer').append($('<img>', {class: 'rightImg',src: nombre, id: i}));
    $(".rightImg").animate({left:"+=-700px"});
    $(".centerImg").animate({left:"+=-700px"},function(){
        if(i==1){
            $('#'+(3)).remove();
        }else{
        $('#'+(i-1)).remove();
        }
    });
    $('.rightImg').addClass("centerImg");
}

function leftClick(){
    if(i<=1){
        i=4;
    }
    else{
        i--;
    }
	var nombre= "imagen"+i+".jpg";
    $('#divContainer').append($('<img>', {class: 'leftImg',src: nombre, id: i}));
    $(".leftImg").animate({left:"+=700px"});
    $(".centerImg").animate({left:"+=700px"},function(){
        if(i==4){
            $('#'+(1)).remove();
        }else{
        $('#'+(i+1)).remove();
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
        noflecha = false;
    });
    if (mouseArriba == false &&  noflecha ==false) {
        fadearIn();
    }

}

function fadearIn() {
    if (i == 3) {
        $("#divContainer").removeAttr('style');
        $("#divContainer").animate({ left: '0' });
        $("#leftArrow").animate({opacity:0},100)
        i = 0;
    }
    else {
        i++;
        $("#divContainer").animate({ left: '+=-700px' });
        $("#rightArrow").animate({opacity:0.5},100)
        $("#leftArrow").animate({opacity:0.5},100)
    }




}