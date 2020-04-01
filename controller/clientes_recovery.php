<?php
echo "<script>
        alert('Esqueceu a senha? me avise por whatsapp');
        window.location.href = 'https://wa.me/5512981819956'; 
    </script>";
/* 
$smarty = new Template();

$cliente = new Clientes();

if(isset($_POST['cli_email'])){

    $cliente->setCli_email($_POST['cli_email']);

    if($cliente->GetClienteEmail($cliente->getCli_email()) > 0){
        $novasenha = Sistema::GerarSenha();
        $cliente->SenhaUpdate($novasenha, $cliente->getCli_email());
        
        //enviar o e-mail para o cliente
        $email = new EnviarEmail();

        $assunto = "Nova Senha  - ".Config::SITE_NOME;
        $msg = "Olá cliente, uma nova senha foi solicitada por você, acesse o site: ".Config::SITE_NOME;
        $msg .= "<br> Nova Senha = ".$novasenha;

        $destinatarios = array($cliente->getCli_email(), Config::SITE_EMAIL_ADMIN);

        $email->Enviar($assunto, $msg, $destinatarios);

        echo '<div class="alert alert-success"><p>Foi enviado uma nova senha para e-mail </p></div>';
        Rotas::Redirecionar(5, Rotas::pag_ClienteLogin());

    }else{
        echo '<div class="alert alert-danger">E-mail não está cadastrado na loja</div>';
        Rotas::Redirecionar(2, Rotas::pag_ClienteRecovery());
    }
    
}else{
    $smarty->display('clientes_recovery.tpl');
}

*/