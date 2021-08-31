<?php
    if($_POST['password']== 'PassMoon'){
        return 'contrasena correcta';
    }
    if(isset($_POST['password']) && $_POST['password'] != 'PassMoon'){
        return 'contrasena incorrecta';
    }
    if(!isset($_POST['password']) && $_POST['password'] != 'PassMoon'){
        return 'Ingresar contrasena';
    }
   
?>