<?php
    $destino="planet.cleanCS@gmail.com";
    $name= $_POST["name"];
    $email= $_POST["email"];
    $subject= $_POST["subject"];
    $message= $_POST["message"];
    $content= "Name: " . $name . "\n E-mail: " . $email . "\nPhone: " . $subject . "\nMessage: " . $message;
    mail($destino,"Contact 'Web page'", $content);
    header("Location:index.html");
    
?>