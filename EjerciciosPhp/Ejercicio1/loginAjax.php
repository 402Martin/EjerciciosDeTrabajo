
<?php
    session_start();
    if ( isset($_SESSION['loggedUser'])) {
         header('Location: /index.php');
    }
    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery-latest.js"></script>
    <script type="text/javascript" src="js/scriptPhp.js"></script>
    <title>Document</title>
</head>

<body>

    
    Ingrese su user <input type="text" name="user" id="user"  />
    Ingrese su password <input type="password" name="password" id="password" />
    <button type="submit" id='btnContinue'>Continuar</button>
</body>

</html>