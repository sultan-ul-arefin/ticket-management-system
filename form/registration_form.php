<?php include 'db.php'; ?>

<div class="main">
    <div class="header">
        <?php include 'alart.php'; ?>
    </div>
    <div class="container"> 
        <form class="booking-form" action='response.php' method="POST">

            <label>First Name </label>
            <input type="text" id="first_name" name="first_name" placeholder="Frist Name" />

            <label>Last Name </label>
            <input type="text" id="last_name" name="last_name" placeholder="Last Name" />

            <label>Email </label>
            <input type="text" id="email" name="email" placeholder="example@email.com" />

            <label>Password </label>
            <input type="password" id="password" name="password" placeholder="Password" />

            <div class="form-submit">
                <input type="submit" name="registration" id="registration" class="submit" value="Registration" />
            </div>

        </form>
    </div>
</div>