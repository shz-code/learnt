<!DOCTYPE html>
<html lang="en">

<?php
// include("./components/_head.php");
// if (!isset($_SESSION))
//     session_start();
// if (isset($_SESSION["logged_in"]))
//     echo '<script> location.href = "./index.php" </script>';

$id = $_GET["id"];
$msg = "X";
include_once("./services/_dbConnection.php");
$sql = "SELECT * FROM users WHERE user_verification_id = '" . $id . "' AND user_verification_status = 0 ";

try {
    $res = $conn->query($sql);
    $num_rows = $res->num_rows;
    if ($num_rows == 1) {
        $sql = "UPDATE users SET user_verification_status = 1 WHERE user_verification_id = '" . $id . "' ";
        $conn->query($sql);
        $msg = "You Have Registered successfully.";
    } 
    else if($num_rows == 0)
    {
        $msg = "Try again later.";
    }
    else {
        $msg = "You are already registered";
    }
} catch (mysqli_sql_exception) {
    $msg = "Error";
}
?>

<?php include("./components/_head.php") ?>

<body>
    <?php include("./components/_header.php") ?>
    <?php include("./components/_preLoader.php") ?>

    <main>
        <?php echo $msg ?>
    </main>

    <?php include("./components/_footer.php"); ?>
    <?php include("./components/_js.php"); ?>
    <script> document.title = "Learnt" </script>
</body>

</html>