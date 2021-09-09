<?php



class Users
{
    public static function getDbConnection()
    {
        $servername = "localhost";
        $username = "crud_user";
        $pass = "dNw31ovESCIOdi4z";
        $dbname = "crud_db";

        // Create connection
        $mysqli = new mysqli($servername, $username, $pass, $dbname);

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }
        return $mysqli;
    }

    public static function createUser($name, $mail, $phone, $password)
    {
        $mysqli = Users::getDbConnection();
        $stmt = $mysqli->stmt_init();
        $stmt = $mysqli->prepare("INSERT INTO users (Name, Mail,Phone,Password) VALUES (?,?,?,?)");
        $stmt->bind_param("ssis", $name, $mail, $phone, $password);
        $stmt->execute();

        $stmt->close();
    }

    public static function deleteUser($id)
    {
        $mysqli = Users::getDbConnection();
        $stmt = $mysqli->stmt_init();
        $$stmt = $mysqli->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    public static function getAllUsers()
    {
        $mysqli = Users::getDbConnection();
        $stmt = $mysqli->stmt_init();
        $stmt = $mysqli->prepare("SELECT * FROM users ");
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
               echo "ID ". $row['ID'].  " Nombre ". $row['Name'] . " Mail ". $row['Mail'] . 
               " Phone ". $row['Phone'] . " Password " . $row['Password'] ."<br>";
            }
        } else {
            echo "0 results";
        }
    }
}
