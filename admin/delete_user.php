<?php 
    include "../includes/db.php";
    include "authentication.php";
    _ADMIN_AUTHENTICATION_();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = intval($_POST['id']);
        $stmt = $conn->prepare("DELETE FROM users WHERE person_id = ?");
        $stmt->bind_param("i", $id);
        if($stmt->execute()){
            header("location: dashboard.php");
        }else{
            echo "Error";
        }

    }

?>