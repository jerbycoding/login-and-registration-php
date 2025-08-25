<?php
    session_start();
    include "../includes/db.php";
    include "authentication.php";
    _ADMIN_AUTHENTICATION_();
    $data = $conn->query("SELECT person_id, first_name, last_name, email FROM users");

?>
  
<?php 
    include "../includes/header.php";
    include "includes/navbar.php";
?>
<div class="w-75 m-auto">
    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">username</th>
                    <th scope="col">email</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
               
                
                <?php
                while($row = $data->fetch_assoc()){?>
                    <tr class="">
                        <td scope="row"><?= $row['first_name']?></td>
                        <td scope ="row"><?= $row['last_name']?></td>
                    <td>
                        <a href="info.php?id=<?= $row['person_id']?>" color:black;"><i class="fa-regular fa-circle-user"></i></a>
                        <a href="update_user.php?id=<?= $row['person_id']?>"><i class="fa-solid fa-file-pen"></i></a>
                        <a href="delete.php?id=<?= $row['person_id']?>"style="color: black;"><i class="fa-regular fa-trash-can"></i></a>
                    </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
