<?php 
if (isset($POST['submit'])) {
    $name = $_POST["name"];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "michelle.marano@outlook.com";
    $headers = "From: ".$mailFrom;


    mail($mailTo, $subject, $headers);
    header("Location: index.php?mailsend");
}


    ?>