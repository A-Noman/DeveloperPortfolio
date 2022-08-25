<?php


// get the data from the contact form
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // this wont work yet
    $myEmail = "sh.asadnoman@gmail.com";

    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name.".\n\n".$message;


    mail($myEmail, $txt, $headers);
    header("Location: index.php?mailsend");
}