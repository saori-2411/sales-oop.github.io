<?php

require_once "Database.php";

class User extends Database{
    public function store($request){
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $password = $request['password'];

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (`first_name`, `last_name`, `username`, `password`) VALUES ('$first_name', '$last_name', '$username', '$password')";

        if($this->conn->query($sql)){
            header('Location: ../views');
            exit;
        }else{
            die("Error creating the user: " . $this->conn->error);
        }
    }

    public function login($request){
        $username = $this->conn->real_escape_string($_POST['username']);
        $password = $_POST['password'];
    
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
    
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $user['username'];

                header('Location: ../views/dashboard.php');
                exit;
            } else {
                $_SESSION['error'] = 'Password is incorrect';
                header('Location: ../views/index.php'); // エラーページにリダイレクト
                exit;
            }
        } else {
            $_SESSION['error'] = 'Username not found.';
            header('Location: ../views/index.php'); // エラーページにリダイレクト
            exit;
        }
    }
}
?>

