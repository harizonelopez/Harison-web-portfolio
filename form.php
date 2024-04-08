<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $message = $_POST['message'];
    
    $to = 'harizonelopez23@gmail.com';
    $subject = 'New Form Submission';
    $body = "Name: $name\nEmail: $email\nMobile Number: $mobile_number\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo 'Message sent successfully.';
    } else {
        echo 'There was an error sending your message.';
    }
}
?>
