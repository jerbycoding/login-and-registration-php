<?php
    include "../includes/db.php";  
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
                <tr class="">
                    <td scope="row">demodomo</td>
                    <td>jeryb.yi@yahoo.com</td>
                    <td>
                        <a href="info.php" style="color:black;"><i class="fa-regular fa-circle-user"></i></a>
                        <a href="delete.php" style="color: black;"><i class="fa-regular fa-trash-can"></i></a>
                    </td>
                </tr>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
