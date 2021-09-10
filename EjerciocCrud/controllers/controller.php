<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['add'])) {
    if ($_POST['add'] == 'add') {
        include '../models/users.php';
        $response = [];
        $response['status'] = 'ok';
        $response['message'] = 'ok';
        $sqlcon = users::createUser($_POST['name'], $_POST['mail'], $_POST['phone'], $_POST['password']);
        echo json_encode($response);
    }
    if ($_POST['add'] == 'delete') {
        include '../models/users.php';
        $sqlcon = users::deleteUser($_POST['id']);
    }
}

if (isset($_GET['view'])) {
    if ($_GET['view'] == 'list') {
        include '../views/list.php';
    }
    if ($_GET['view'] == 'add') {
        include '../views/agregar.php';
    }
    if ($_GET['view'] == 'edit') {
        include '../views/editar.php';
    }
}
