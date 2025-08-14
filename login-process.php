<?php
    session_start();
    include "includes/db.php";
    if($_SERVER['REQUEST_METHOD']  == "POST"){
        $user = htmlspecialchars(trim($_POST['user']));
        $password = htmlspecialchars(trim($_POST['password']));
        $stmt = $conn->prepare("SELECT person_id, email, last_name, first_name, username, pass FROM users WHERE email = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 1){
            $db_user = $result->fetch_assoc();
            if(password_verify($password, $db_user['pass'])){
                $_SESSION['id'] = $db_user['person_id'];
                $_SESSION['email'] = $db_user['email'];
                $_SESSION['last_name'] = $db_user['last_name'];
                $_SESSION['first_name'] = $db_user['first_name'];
                $_SESSION['username'] = $db_user['username'];
                header('location: index.php');
            }            
        }else{
            echo "Wrong email or password";
        }


    }
?>