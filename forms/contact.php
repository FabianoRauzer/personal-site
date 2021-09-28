<?php 
if(isset($_POST['submit'])){
    $to = "rauzerfabiano@yahoo.com.br";
    $from = $_POST['email'];
    $first_name = $_POST['name'];
    $subject = "Form submission";
    $message = $first_name . " " . " escreveu:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "E-mail enviado" . $first_name . ", obrigado pelo seu contato.";
  
    }
?>