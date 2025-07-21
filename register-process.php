<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $errors = [];
        $username = htmlspecialchars(trim($_POST['username']));
        $first = htmlspecialchars(trim($_POST['first']));
        $last = htmlspecialchars(trim($_POST['last']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars(trim($_POST['password']));
        

        echo "$username <br>";
        echo "$first and $last <br>";
        echo "$email <br>";
        echo "$password <br>";
    }
?>