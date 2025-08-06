<?php include "../includes/header.php"; ?>
<div class="d-flex justify-content-center align-items-center vh-100 b-5">
    <div class=" w-100" style="max-width: 500px;">
        <form action="login-process.php" method="POST">
            <h1>ADMIN</h1>
            <div class="mb-3 form-floating">
                <input
                    type="text"
                    class="form-control"
                    name="user"
                    placeholder="" />
                <label for="user" class="form-label">User </label>
            </div>
            <div class=" mb-3 form-floating">
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    placeholder="" />
                <label for="password" class="form-label">Password</label>
            </div>
            <button
                type="submit"
                class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
</div>

