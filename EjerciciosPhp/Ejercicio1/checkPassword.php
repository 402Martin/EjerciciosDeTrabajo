
<?php
        session_start();
$response = [];

if((!isset($_SESSION['loggedUser']))){
    if ($_POST['password'] == 'PassMoon') {

        $_SESSION['loggedUser'] = $_POST['user'];
        $_SESSION['loggedPass'] = $_POST['password'];
        $response['status'] = 'ok';
        $response['message'] = 'bien';
    }
    if (isset($_POST['password']) && $_POST['password'] != 'PassMoon') {
        $response['status'] = 'error';
        $response['message'] = 'La contraseña es incorrecta';
    }
    if (!isset($_POST['password'])) {
        $response['status'] = 'error';
        $response['message'] = 'No ingresaste una contraseña';
    }
    echo json_encode($response);

}

?>