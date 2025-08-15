<?php
    function _ADMIN_AUTHENTICATION_(){
        if (!isset($_SESSION['admin']) && $_SESSION['admin'] != 'admin'){
                header('location: login.php');
        }
    }
?>
