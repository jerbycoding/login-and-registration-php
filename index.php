<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header("location: login.php");
    }
    $email = $_SESSION['email'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $username = $_SESSION['username'];

?>

<?php
    include "includes/header.php";
    include "includes/navbar.php";
?>




<div class="position-absolute top-50 start-50 translate-middle p-3">
    <h1>Info</h1>
    <div class="d-flex gap-2">
            <div class="card  ">
        <div class="card-header fs-4">First</div>
        <div class="card-body">
            <p class="card-text"><?= $first_name?></p>
        </div>
    </div>
    <div class="card  ">
        <div class="card-header fs-4">Last</div>
        <div class="card-body">
            <p class="card-text"><?= $last_name?></p>
        </div>
    </div>
    <div class="card  ">
        <div class="card-header fs-4">username</div>
        <div class="card-body">
            <p class="card-text"><?= $username?></p>
        </div>
    </div>
       <div class="card">
        <div class="card-header fs-4">username</div>
        <div class="card-body">
            <p class="card-text"><?= $email?></p>
        </div>
    </div>
    </div>
    
</div>