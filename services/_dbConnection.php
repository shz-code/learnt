<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "learnt";

try {
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
} catch (mysqli_sql_exception) {
    die(header("HTTP/1.0 503 Service Unavailable Error"));
}

?>