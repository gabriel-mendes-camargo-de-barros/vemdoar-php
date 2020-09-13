<?php

$to         = Config::EMAIL_USER;
$subject    = 'Contato - VemDoar';
$message    = $_GET['msg'];
$dest       = $_GET['email'];

$headers    = "From: ". $dest;

mail($to, $subject, $message, $headers);    

?> 

<script>alert('Email enviado com Sucesso!')</script>
<meta http-equiv="refres" content="0; url=contato">