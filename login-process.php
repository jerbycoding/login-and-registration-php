<?php
    session_start();
    include "includes/db.php";
    if($_SERVER['REQUEST_METHOD']  == "POST"){
        $user = htmlspecialchars(trim($_POST['user']));
        $password = htmlspecialchars(trim($_POST['password']));
        $stmt = $conn->prepare("SELECT person_id, email, pass FROM users WHERE email = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 1){
            $user = $result->fetch_assoc();
            $_SESSION['email'] = $user['email'];
            $_SESSION['last_name'] = $user['lastname'];
            $_SESSION['first_name'] = $user['firstname'];
            $_SESSION['username'] = $user['username'];
            header("Location: index.php");
        }else{
            echo "Wrong email or password";
        }


    }
?>