<?php
    include "includes/db.php";
    include "includes/header.php";
?>
<div class="d-flex justify-content-center align-items-center vh-100">

<div class="w-100" style="max-width: 500px;">
    <h1>REGISTER</h1>
    <form action="register-process.php" method="POST">    
    <div class="mb-3">
        <label for="" class="form-label">Username</label>
        <input
            type="text"
            class="form-control"
            name="username"
            placeholder=""
        />
    
    </div>
    <div class="d-flex gap-5">

        <div class="mb-3">
            <label for="first" class="form-label">First</label>
            <input
                type="text"
                class="form-control"
                name="first"
                placeholder=""
            />
            
        </div>
        <div class="mb-3">
            <label for="last" class="form-label">Last</label>
            <input
                type="text"
                class="form-control"
                name="last"
                placeholder=""
            />
            
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
            type="email"
            class="form-control"
            name="email"
            id=""
            aria-describedby="emailHelpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input
            type="password"
            class="form-control"
            name="password"
            id=""
            placeholder=""
        />
    </div>
    

    <button
        type="submit"
        class="btn btn-primary w-100"
    >
        Submit
    </button>
    <small class="text-muted">Do you have Account? <a href="index.php">Login</a></small>
    </form>
    </div>

</div>

