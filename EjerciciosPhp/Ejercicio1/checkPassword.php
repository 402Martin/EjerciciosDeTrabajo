<?php
if ($_POST['password'] == 'PassMoon') {
    echo 'contrasena correcta';
}
if (isset($_POST['password']) && $_POST['password'] != 'PassMoon') {
    echo 'contrasena incorrecta';
}
if (!isset($_POST['password'])) {
    echo 'Ingresar contrasena';
}
