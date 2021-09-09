
<?php
session_start();
$servername = "localhost";
$username = "wtu_user";
$pass = "MoonPass";
$dbname = "wtu_db";

// Create connection
$mysqli = new mysqli($servername, $username, $pass, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$passw = md5($_POST['password']);
$email = $_POST['user'];

$response = [];
$sql = $mysqli->prepare("SELECT email, password FROM users WHERE email = ? AND password = ?");
$sql->bind_param("ss", $email, $passw);
$sql->execute();
$response['error'] = 'error';
$response['message'] = 'error';
if ($stmt->affected_rows >= 0) {
    $_SESSION['loggedUser'] = $_POST['user'];
    $response['status'] = 'ok';
    $response['message'] = 'ok';
}
echo json_encode($response);
?>

