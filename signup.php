<!DOCTYPE html>
<html lang="en">

<?php include("./components/_head.php") ?>

<body>
    <?php include("./components/_header.php") ?>
    <?php include("./components/_preLoader.php") ?>

    <main class="main container-sm mt-4">
        <h1 class="text-center">Join Today</h1>
        <div class="notification"></div>
        <form class="my-4 signup_form">
            <div class="input_group">
                <label for="username">Username: </label>
                <input required type="text" id="username" name="username">
            </div>
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
                <label for="con_pass">Confirm Password: </label>
                <div class="input_group">
                    <input required type="password" id="con_pass" name="con_pass">
                    <i class='bx bx-show-alt show_password'></i>
                </div>
            </div>
            <div class="input_group">
                <button disabled class="btn btn-secondary" type="submit" id="user_submit_btn">Submit</button>
            </div>
        </form>
    </main>

    <?php include("./components/_footer.php"); ?>
    <?php include("./components/_js.php"); ?>
    <script src="./assets/js/signup.js"></script>
    <script> document.title = "Learnt - Signup" </script>
</body>

</html>