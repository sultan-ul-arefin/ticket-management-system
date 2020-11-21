<?php include 'db.php'; ?>

<div class="main">
    <div class="header">
        <?php include './alart.php'; ?>
    </div>
    <div class="container">
        <form class="booking-form" action='process/login_process.php' method="POST">

            <label>Email </label>
            <input type="text" id="email" name="email" placeholder="example@email.com" />

            <label>Password </label>
            <input type="password" id="password" name="password" placeholder="Password" />

            <div class="form-submit">
                <input type="submit" name="login" id="login" class="submit" value="Login" />
            </div>

        </form>
    </div>
</div>