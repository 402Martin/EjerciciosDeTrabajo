
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
var i = 0;
var semaforo = false;
var noflecha = false;

$(document).ready(function () {

    setInterval(function () {
        sigImagen();
    }, 3000
    );
    $("#leftArrow").animate({opacity:0},100);
    $("#leftArrow").click(function () {
        noflecha = true;
        i--;
        if(i>=0){
            $("#divContainer").animate({ left: '+=700px' })
        };
        if(i<=0){
            i=0;
            $("#leftArrow").animate({opacity:0},100)
        };

        $("#rightArrow").animate({opacity:0.5},100)
        
    }
    )
    $("#rightArrow").click(function () {
        noflecha = true;
        i++;
        if(i<=3){
            $("#divContainer").animate({ left: '+=-700px' })
        };
        if(i>=3){
            i=3;
            $("#rightArrow").animate({opacity:0},100)
        };
        $("#leftArrow").animate({opacity:0.5},100)
    }
    )
}


);



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