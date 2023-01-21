<!DOCTYPE html>
<html lang="en">

<?php
include("./components/_head.php");
if (!isset($_SESSION))
    session_start();
if (isset($_SESSION["logged_in"]))
    echo '<script> location.href = "./index.php" </script>';
?>

<body>
    <?php include("./components/_header.php") ?>
    <?php include("./components/_preLoader.php") ?>
    <main class="main container-sm mt-4">
        <h1 class="text-center">Welcome Back!</h1>
        <div class="notification"></div>
        <form class="my-4 login_form">
            <div class="input_group">
                <label for="email">Email: <span id="email_status"></span></label>
                <input required type="email" name="email" id="email">
            </div>
            <div class="input_group">
                <label for="pass">Password: </label>
                <div class="input_group">
                    <input required type="password" id="pass" name="pass">
                    <i class='bx bx-show-alt show_password'></i>
                </div>
            </div>
            <div class="input_group">
                <button disabled class="btn btn-secondary" type="submit" id="user_submit_btn">Login</button>
                <p class="mt-2">New User ? <a href="./signup.php" class="brand_color">Signup Here.</a></p>
            </div>
        </form>
    </main>

    <?php include("./components/_footer.php"); ?>
    <?php include("./components/_js.php"); ?>
    <script src="./assets/js/login.js"></script>
    <script> document.title = "Learnt - Login" </script>
</body>

</html>