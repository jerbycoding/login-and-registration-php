<?php
    if($_SERVER['REQUEST_METHOD']  == "POST"){
        $user = htmlspecialchars(trim($_POST['user']));
        $password = htmlspecialchars(trim($_POST['password']));


        echo "$user <br>";
        echo "$password <br>";
    }



?>