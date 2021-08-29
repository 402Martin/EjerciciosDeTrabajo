 
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
var  mouseArriba= false;
var i =1;
var semaforo=false;

$(document).ready(
	setInterval(function() {
		sigImagen();}, 3000
		)
);
		
		
function sigImagen(){ 
	$("#imgDedos").mouseenter(function(){
		mouseArriba =true;
	});
	
	$("#imgDedos").mouseleave(function(){
		mouseArriba =false;
	});  
   if (mouseArriba ==false){
    if(i==3){
        i=1;
    }
    else{
        i++;
    }
	var nombre= "imagen"+i+".png"
	$("#imgDedos").fadeOut( "slow", function() {
		fadearIn();
		$("#imgDedos").attr("src",nombre);
		$("#textoACambiar").text("imagen " + i);
	});
	
	
   }
}

function fadearIn(){
	$("#imgDedos").fadeIn( "slow");
}