<?php
    session_start();
    include "../includes/db.php";
    include "authentication.php";
    _ADMIN_AUTHENTICATION_();



    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = intval($_POST['id']);
        $first = htmlspecialchars(trim($_POST['first_name']));
        $last = htmlspecialchars(trim($_POST['last_name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $username = htmlspecialchars(trim($_POST['username']));
        

        $stmt = $conn->prepare("UPDATE users SET first_name = ? ,last_name = ?,email = ?, username = ? WHERE person_id = ?");
        $stmt->bind_param("ssssi",$first,$last,$email,$username, $id);
       
        if($stmt->execute()){
            header("location: info.php?id=$id");
        }
        
    }



































  

?>