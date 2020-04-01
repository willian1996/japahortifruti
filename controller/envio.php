<?php
/*
if(isset($_POST['txtinputnome']) && !empty($_POST['txtinputnome'])){
    $nome = addslashes($_POST['txtinputnome']);
    $email = addslashes($_POST['txtinputemail']);
    $msg = addslashes($_POST['txtinputmensagem']);

    $para = Config::SITE_EMAIL_ADMIN;
    $assunto = "Contato Loja Virtual Gaby Modas";
    $corpo = "Nome: $nome - E-Mail: $email \r\n - \r\n $msg";

    $cabecalho = "From: contato@gabymodas.com". "\r\n".
                 "Reply-To: ".$email."\r\n".
                 "X-Mailer: PHP/".phpversion();

    mail($para, $assunto, $corpo, $cabecalho);
}
?>
<script>alert('Email enviado com sucesso');</script>
<meta http-equiv="refresh" content="0; url=contato?enviado=true">


