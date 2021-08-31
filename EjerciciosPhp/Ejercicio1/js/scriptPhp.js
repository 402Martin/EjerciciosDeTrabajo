
var scriptPhp = {};

$(document).ready(function () {
    $("#btnContinue").click(function () {
        var password = $("#password").val();
    $.ajax ({
        type: 'POST',
        url: '/checkPassword.php',
        data:{ 'password':password},
        success: function(response){
            alert(response);
        },
        error: function(){
            alert('Error obteniendo datos del sitio, verifique su conexión a internet.');
        }
 
    })
    });
    
});