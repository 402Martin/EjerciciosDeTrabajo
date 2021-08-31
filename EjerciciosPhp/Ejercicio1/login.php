<!DOCTYPE html>
<html>

<head>
    
    <title>login</title>

</head>


<body>
<?php
    if($_POST['password']== 'PassMoon'){
        header("location: /index.html");
    }
    if(isset($_POST['password']) && $_POST['password'] != 'PassMoon'){
        echo 'Error';
    }
        
?>

<form action="" method="POST">
   Ingresar password <input type="text" name="password"/>
   <button type="submit">Continuar</button>
</form>


</body>
