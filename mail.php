<?php
    $to = "jarusp29@gmail.com";
    $subject ="Respose from Website";
    $message = "Im very thankful to you";
    $headers = "From: jarusp29@users.noreply.github.com";

if(mail($to, $subject, $message, $headers)){
    echo "mail Sent successfully";
}
    else{
    echo "can not sent mail";
}
?>
