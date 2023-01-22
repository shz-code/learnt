<?php
include_once("./_dbConnection.php");
include_once("./_env.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

function checkPass($pass)
{
    $invalid = array("=", "*", "-", "#", "$", "'");
    $flag = true;
    for ($x = 0; $x < strlen($pass); $x++) {
        for ($i = 0; $i < sizeof($invalid); $i++) {
            if ($pass[$x] == $invalid[$i]) {
                $flag = false;
                break;
            }
        }
    }
    return $flag;
}

function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    try {
        //Server settings
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = ''; //SMTP username
        $mail->Password = ''; //SMTP password
        $mail->SMTPSecure = 'tls'; //Enable  TLS encryption
        $mail->Port = 587; //TCP port to connect to

        //Recipients
        $mail->setFrom('');
        $mail->addAddress($to); //Add a recipient

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');             //Add attachments

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $msg;

        if ($mail->send())
            null;
        else
            die(header("HTTP/1.0 500 Internal Server Error Email"));
    } catch (Exception $e) {
        die(header("HTTP/1.0 500 Internal Server Error Email"));
    }
}

if (isset($_POST['newUser']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $user_verification_id = rand(1, 100000);

    // Check if Username Exists
    $ck = "SELECT user_username FROM users WHERE user_username = '" . $username . "'";
    $res = $conn->query($ck);
    $res = $res->num_rows;

    if ($res > 0) {
        die(header("HTTP/1.0 406 Username Exists"));
    }

    // Check if Email Exists
    $ck = "SELECT user_email FROM users WHERE user_email = '" . $email . "'";
    $res = $conn->query($ck);
    $res = $res->num_rows;

    if ($res > 0) {
        die(header("HTTP/1.0 406 Email Exists"));
    }


    // Check for invalid characters in password
    if (!checkPass($pass)) {
        die(header("HTTP/1.0 406 Not Acceptable Password."));
    }

    // Paswword Encryption
    $pass = sha1($pass);

    $sql = "INSERT INTO users(user_username, user_email, user_pass, user_verification_id) VALUES ('$username','$email','$pass','$user_verification_id')";

    try {
        $conn->query($sql);
        $mailHtml = "<div>
        <h3>Thanks $username for using our platform. You are almost there!</h3>
        Please confirm your account registration by clicking the button below: 
        <br> <a href='http://127.0.0.1/learnt/confirmation.php?id=$user_verification_id' style='display: inline-block; padding: 10px 20px; background: #2B5D73; border-radius: 5px; text-decoration: none; margin-top: 10px; color: white;'>
            Verify Now
        </a>
    </div>";
        smtp_mailer($email, 'Account Verification', $mailHtml);
        echo json_encode("Done");
    } catch (mysqli_sql_exception) {
        die(header("HTTP/1.0 500 Internal Server Error"));
    }
    $conn->close();
}