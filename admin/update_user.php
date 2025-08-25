<?php
    session_start();
    include "../includes/db.php";
    include "authentication.php";
    _ADMIN_AUTHENTICATION_();
    $data = $conn->prepare("SELECT first_name,last_name, email, username FROM users WHERE person_id = ?");
    $data->bind_param('i', $_GET['id']);
    $data->execute();
    $result = $data->get_result();
    $row = $result->fetch_assoc();
?>

<?php
    include "../includes/header.php";
?>
<div><a href="dashboard.php">Home</a></div>

<div  class="position-absolute top-50 start-50 translate-middle p-3">
    <h1>INFO</h1>
    <form method="POST" action="update-process.php">
        <input type="hidden" name="id" value=<?=$_GET['id']?>>
    <div class="d-flex gap-2">
            <div class="card  ">
        <div class="card-header fs-4">First</div>
        <div class="card-body">
           <input type="text" name="first_name" id="" value=<?=$row['first_name']?>>
        </div>
    </div>
    <div class="card">
        <div class="card-header fs-4">Last</div>
        <div class="card-body">
            <input type="text" name="last_name" id="" value=<?=$row['last_name']?>>
        </div>
    </div>
    <div class="card  ">
        <div class="card-header fs-4">email</div>
        <div class="card-body">
            <input type="text" name="email" id="" value=<?=$row['email']?>>
        </div>
    </div>
       <div class="card">
        <div class="card-header fs-4">username</div>
        <div class="card-body">
            <input type="text" name="username" id="" value=<?=$row['username']?>>
        </div>
    </div>
    </div>
    <button type="submit">Submit</button>
    </form>
</div>



