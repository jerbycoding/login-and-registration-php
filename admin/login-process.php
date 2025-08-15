<?php
    session_start();
    include "../includes/db.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = htmlspecialchars(trim($_POST['user']));
        $password = htmlspecialchars(trim($_POST['password']));
        $stmt = $conn->prepare("SELECT id, username, password FROM admin WHERE username = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
        $admin = $result->fetch_assoc();
        if(password_verify( $password,$admin['password'])){
            $_SESSION['admin'] = $admin['username'];
            header('location: dashboard.php');
        }else{
            echo "Wrong Password";
        }
    }

?>