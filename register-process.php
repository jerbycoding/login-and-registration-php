<?php
    include "includes/db.php";
    function isValidName($name){
        return preg_match("/^[a-zA-Z ]+$/", $name);
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $errors = [];
        $username = htmlspecialchars(trim($_POST['username']));
        $first = htmlspecialchars(trim($_POST['first']));
        $last = htmlspecialchars(trim($_POST['last']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars(trim($_POST['password']));
        $checkEmail = $conn->prepare("SELECT email from users WHERE email = ?");
        $checkEmail->bind_param("s", $email);
        $checkEmail->execute();
        if(strlen($username) < 4){
            $errors[] = "Your username must be 4 characters";
        }
        if(!isValidName($first)){
            $errors[] = "First name contains invalid characters";
        }
        if(!isValidName($last)){
            $errors[] = "Last name contains invalid characters";
        }
        if($checkEmail->num_rows !== 1){
            $errors[] = "Email is already taken";   
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Invalid input for email";
        }
        if(strlen($password) < 6){
            $errors[] = "Password must be more than 6 characters";
        }
        if(!empty($errors)){
                echo "List of Errors";
                echo "<ul>";
                foreach($errors as $error){
                    echo "<li style='color:red;'>$error</li><br>";
                }
                echo "</ul>";
        }else{
            $hashed_password = password_hash($password,PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, first_name, last_name, email, pass) VALUES (?, ? ,?, ?, ?)");
            $stmt->bind_param("sssss", $username,$first, $last, $email, $hashed_password);
            if(!$stmt->execute()){
                header('Location: error.php');
            }else{
                header('Location: login.php');
            }
            
        }
        

    }
?>