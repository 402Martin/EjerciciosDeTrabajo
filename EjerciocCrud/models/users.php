<?php

class Users
{
    public static function getDbConnection()
    {
        $servername = 'localhost';
        $username = 'crud_user';
        $pass = 'dNw31ovESCIOdi4z';
        $dbname = 'crud_db';

        // Create connection
        $mysqli = new mysqli($servername, $username, $pass, $dbname);

        if ($mysqli->connect_error) {
            die('Connection failed: ' . $mysqli->connect_error);
        }
        return $mysqli;
    }

    public static function createUser($name, $mail, $phone, $password)
    {
        $mysqli = Users::getDbConnection();
        $stmt = $mysqli->stmt_init();
        $stmt = $mysqli->prepare(
            'INSERT INTO users (Name, Mail,Phone,Password) VALUES (?,?,?,?)'
        );
        $stmt->bind_param('ssis', $name, $mail, $phone, $password);
        $stmt->execute();

        $stmt->close();
    }

    public static function deleteUser($id)
    {
        $mysqli = Users::getDbConnection();
        $stmt = $mysqli->stmt_init();
        $stmt = $mysqli->prepare('DELETE FROM users WHERE ID = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->close();
    }

    public static function editUser($ID,$name, $mail, $phone, $password)
    {
        $mysqli = Users::getDbConnection();
        $stmt = $mysqli->prepare('UPDATE users SET name = ?, mail = ?, phone = ?, password = ? WHERE ID = ?');
        $stmt->bind_param('ssssi', $name, $mail, $phone, $password, $ID);
        $stmt->execute();
        $stmt->close();
    }
    public static function getAllUsers()
    {
        $mysqli = Users::getDbConnection();
        $stmt = $mysqli->stmt_init();
        $stmt = $mysqli->prepare('SELECT * FROM users ');
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public static function getUser($Id)
    {
        $mysqli = Users::getDbConnection();
        $stmt = $mysqli->stmt_init();
        $stmt = $mysqli->prepare('SELECT * FROM users Where id = ?');
        $stmt->bind_param('i',$Id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}
