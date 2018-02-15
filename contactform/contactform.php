<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    $mailTo = "awp24@live.com";
    $headers = "From: ".$mailForm;
    $name = $_POST['name'];
    $txt = "you have recieved an e-mail from".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}