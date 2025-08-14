<?php
    function admin_authentication(){
        if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 'admin'){
                header('location: login.php');
        }
    }
?>
