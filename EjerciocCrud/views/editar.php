<?php
// $sqlcon = Users::createUser('martin','402martin@gmail.com',097359854,'123455');

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/agregarStyles.css">
    </link>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="../css/fontawesome/css/all.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-latest.js"></script>
    <script type="text/javascript" src="../js/scriptAgregar.js"></script>
</head>

<body>
    <div id="header">
        <div id="contentHeaderDiv">EJERCICIOS MOON</div>
    </div>
    <div id='divHeader2'>
        <div id="titleDiv">Usuarios</div>
        <div id="subTitleDiv">Editá tus usuarios</div>
    </div>
    <div id='view'>
        <div id="card">
            <div id='cardTitle'>EDITAR USUARIO</div>
            <div class='cardContent'>
                <div id='Inpname' class='divAdd'>
                    <p class='pAdd'>Nombre</p>
                    <input type='text' id='txtName' class='inpAdd' placeholder="Pepe Rodriguez">
                </div>
                <div id='InpMail' class='divAdd'>
                    <p class='pAdd'>E-mail</p>
                    <input type='text' id='txtMail' class='inpAdd' placeholder="Escriba aca tu e-mail">
                </div>
            </div>
            <div class='cardContent2'>
                <div id='InpApellido' class='divAdd'>
                    <p class='pAdd'>Contraseña</p>
                    <input type='text' id='txtPassword' class='inpAdd' placeholder="Password">
                </div>
                <div id='InpPhone' class='divAdd'>
                    <p class='pAdd'>Teléfono</p>
                    <input type='text' id='txtPhone' class='inpAdd' placeholder="097 456 123">
                </div>
            </div>
        
        
        </div>
        <div id='divSave'>
            <p id='pbtn'>Guardar</p>
        </div>
    </div>
</body>

</html>