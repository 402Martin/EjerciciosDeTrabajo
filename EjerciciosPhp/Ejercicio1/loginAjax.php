
<?php
$servername = "localhost";
$username = "wtu_user";
$pass = "MoonPass";
$dbname = "wtu_db";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($conn){
    echo 'connected';
}
//  $sql = "INSERT INTO users (email,password,code,confirmed)
//  VALUES ('moon2@gmail.com', 'fcf1757080620dddb5ca277476c6f93b', '5',01)";
// $result = $conn->query($sql);
// $sql = "INSERT INTO users (email,password,code,confirmed)
// VALUES ('moon3@gmail.com', 'PassMoon', '5',01)";
// $result = $conn->query($sql);
// $sql = "INSERT INTO users (email,password,code,confirmed)
// VALUES ('moon4@gmail.com', 'PassMoon', '5',01)";
// $result = $conn->query($sql);

$sql = "DELETE FROM users WHERE id=2";
$result = $conn->query($sql);

$sql = "UPDATE users SET email='moon' WHERE id=3";
$result = $conn->query($sql);

$sql = "SELECT id, email, code FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - email: " . $row["email"]. " " . $row["code"]. "<br>";
  }
} else {
  echo "0 results";
}

?>

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