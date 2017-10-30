<?php

$to = Config::SITE_EMAIL_ADM;
$subject = 'Contato - Social Shop';
$nome = isset($_GET['txtinputnome']) ? $_GET['txtinputnome'] : "Sem valor";
$message = isset($_GET['txtinputmessage']) ? $_GET['txtinputmessage'] : "Sem valor";
$dest = Utils::isEmail(isset($_GET['txtinputemail']) ? $_GET['txtinputemail'] : "Sem valor");

$finalMessage = "Email do(a): " . $nome . "\r\n" . $message;
echo $finalMessage;
$headers = "From: " . $dest;
mail($to, $subject, $finalMessage, $headers);

?>

<script>alert('Email enviado com sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contato">
