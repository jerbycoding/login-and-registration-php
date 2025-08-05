<?php
    include "includes/db.php";
    include "includes/header.php";
?>
    <div class="d-flex justify-content-center align-items-center vh-100 b-5">
            <div class=" w-100" style="max-width: 500px;">
                <form action="login-process.php" method="POST">
                <h1>LOGIN</h1>
                <div class="mb-3 form-floating">
                    <input
                        type="text"
                        class="form-control"
                        name="user"
                        placeholder=""
                    />
                    <label for="user" class="form-label">Email </label>
                </div>
                <div class=" mb-3 form-floating">
                    <input
                        type="password"
                        class="form-control"
                        name="password"
                        placeholder=""
                    />
                    <label for="password" class="form-label">Password</label>
                </div>
                <p class="form-text text-muted">You don't have account? <a href="register.php">Register</a></p>
                <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
                </form>
        </div>
    </div>

<?php
    include "includes/footer.php";
?>