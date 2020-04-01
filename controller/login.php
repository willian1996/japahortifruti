<?php  
$smarty = new Template();
$login = new Login();

if(isset($_POST['txt_celular']) && isset($_POST['txt_senha'])){
    $user = $_POST['txt_celular'];
    $senha = $_POST['txt_senha'];
    $login->GetLogin($user, $senha);
}

if(Login::Logado()){
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
    $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
    
    if(isset($_SESSION['PRO'])){
        Rotas::Redirecionar(0, Rotas::pag_Carrinho().'#tabelacarrinho');
    }else{
        Rotas::Redirecionar(0, Rotas::pag_ClienteConta().'#minhaconta');
    }
}

$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_CADASTRO', Rotas::pag_ClienteCadastro());
$smarty->assign('PAG_RECOVERY', Rotas::pag_ClienteRecovery());

$smarty->display('login.tpl');




?>
