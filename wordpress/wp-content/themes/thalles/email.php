<?php
 
// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("class/class.phpmailer.php");
 
$email = new PHPMailer();

$email->IsSMTP();
$email->SMTPSecure = "ssl"; // tbm já tentei tls
$email->Port = 587; // tbm já tentei 465 e tbm sem porta nenhuma
$email->SMTPDebug = 1;
$email->Host = "smtp.gmail.com";    
$email->SMTPAuth = true;
$email->Username = "joaopauloaraujo2701@gmail.com";
$email->Password = "";
$email->From = "joaopauloaraujo2701@gmail.com";

$email->SetLanguage("pt-br", "class/language/");
$email->CharSet = "UTF-8";
$email->FromName = "testando";
$email->Subject = "teste";
$email->IsHtml(true);
$email->AddAddress("jp.araujo@tijucaalimentos.com");
$email->Body = "Hellow word";

if(!$email->send()){
    //return false;
    die(var_dump($email->ErrorInfo));
} else {
    return true;
}
?>