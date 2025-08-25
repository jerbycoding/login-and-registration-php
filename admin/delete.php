<?php
    $id = $_GET['id'];
?>


<div class="position-absolute top-50 start-50 translate-middle">
    <form action="delete_user.php" method= "POST">
        <input type="hidden" name="id" value=<?= $id?>>
        <button type="submit">Yes</button>
    </form>
</div>