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
    <script type="text/javascript" src="../js/scriptEdit.js"></script>
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
            <?php
            include '../models/users.php';
            $user = users::getUser($_GET['userid']);
            $row = $user->fetch_assoc();
            if ($row==false){
                header("Location: http://localhost/controllers/controller.php?view=list");
            }
            ?>
                <div id='Inpname' class='divAdd'>
                    <p class='pAdd'>Nombre</p>
                    
                    <input type='text' id='txtName' class='inpAdd' placeholder="Pepe Rodriguez"  value="<?= $row[
                        'name'
                    ] ?>">
                </div>
                <div id='InpMail' class='divAdd'>
                    <p class='pAdd'>E-mail</p>
                    <input type='text' id='txtMail' class='inpAdd' placeholder="Escriba aca tu e-mail" value=<?= $row[
                        'mail'
                    ] ?>>
                </div>
            </div>
            <div class='cardContent2'>
                <div id='InpApellido' class='divAdd'>
                    <p class='pAdd'>Contraseña</p>
                    <input type='password' id='txtPassword' class='inpAdd' placeholder="Password" value=<?= $row[
                        'password'
                    ] ?>>
                </div>
                <div id='InpPhone' class='divAdd'>
                    <p class='pAdd'>Teléfono</p>
                    <input type='text' id='txtPhone' class='inpAdd' placeholder="097 456 123" value=<?= $row[
                        'phone'
                    ] ?> >
                </div>
            </div>
        
        
        </div>
        <a href="http://localhost/controllers/controller.php?view=list"> 
        <div id='divSave' data-user-id= <?=$_GET['userid'] ?>>
            <p id='pbtn'>Guardar</p>
        </div>
        </a>
    </div>
</body>

</html>