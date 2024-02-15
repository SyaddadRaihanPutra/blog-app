<?php include('components/header.php') ?>

<header class="login py-5">
    <h2 class="text-primary text-center mb-4">Login</h2>
    <form action="php/login.php" method="post">
        <div class="form-group mb-3">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="password" class="form-control" placeholder="Enter your email address">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
        </div>
        <button class="btn btn-primary w-100" type="submit" name="submit">Login</button>
        <p class="mt-3 text-secondary text-center">Don't have an account? <a href="register.php" class="text-primary">Register</a></p>
    </form>
</header>