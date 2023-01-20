<!DOCTYPE html>
<html lang="en">

<?php include("./components/_head.php") ?>

<body>
    <?php include("./components/_header.php") ?>

    <main class="main container-sm mt-4">
        <h1 class="text-center">Register New User</h1>
        <form action="post" class="my-4 signup_form">
            <div class="alert alert-success" role="alert">
                A simple success alert—check it out!
            </div>
            <div class="input_group">
                <label for="">Username: </label>
                <input type="text">
            </div>
            <div class="input_group">
                <label for="">Email: </label>
                <input type="email">
            </div>
            <div class="input_group">
                <label for="">Password: </label>
                <input type="password">
            </div>
            <div class="input_group">
                <label for="">Confirm Password: </label>
                <input type="password">
            </div>
            <button class="btn">Submit</button>
        </form>
    </main>

    <?php include("./components/_footer.php"); ?>
    <?php include("./components/_js.php"); ?>

</body>

</html>