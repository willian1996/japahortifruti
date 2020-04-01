<?php

$smarty = new Template();

Login::MenuCliente();

if(isset($_POST['cli_senha_atual']) and isset($_POST['cli_senha'])){
    $senha_atual = md5($_POST['cli_senha_atual']);
    $senha_nova = $_POST['cli_senha'];
    $whatsapp = $_SESSION['CLI']['cli_celular'];

    if($senha_atual != $_SESSION['CLI']['cli_pass']){
        echo '<script>alert("Senha atual inválida");</script>';
        echo '<div class="alert alert-danger"> Senha atual inválida</div><br/><br/>';
        Rotas::Redirecionar(3, Rotas::pag_CLienteSenha());

    }else{

        $clientes = new Clientes();
        $clientes->SenhaUpdate($senha_nova, $whatsapp);
        echo '<script>alert("A senha foi alterada com sucesso, faça o login com a nova senha!");</script>';
        echo '<div class="alert alert-success"> A senha foi alterada com sucesso, faça o login com a nova senha!</div><br/><br/>';

        Rotas::Redirecionar(1, Rotas::pag_Logoff());
    }





}else{
    $smarty->display('cliente_senha.tpl');
}

?>

