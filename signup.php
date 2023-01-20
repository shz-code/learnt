<!DOCTYPE html>
<html lang="en">

<?php include("./components/_head.php") ?>

<body>
    <?php include("./components/_header.php") ?>

    <main class="main container-sm mt-4">
        <h1 class="text-center">Register New User</h1>
        <form class="my-4 signup_form">
            <div class="notification"></div>
            <div class="input_group">
                <label for="username">Username: </label>
                <input type="text" id="username" name="username">
            </div>
            <div class="input_group">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input_group">
                <label for="pass">Password: </label>
                <input type="password" id="pass" name="pass">
            </div>
            <div class="input_group">
                <label for="con_pass">Confirm Password: </label>
                <input type="password" id="con_pass" name="con_pass">
            </div>
            <button disabled class="btn" type="submit" id="user_submit_btn">Submit</button>
        </form>
    </main>

    <?php include("./components/_footer.php"); ?>
    <?php include("./components/_js.php"); ?>
    <script src="./assets/js/signup.js"></script>

</body>

</html>