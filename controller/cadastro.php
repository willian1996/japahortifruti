<?php 

$smarty = new Template();


if(isset($_POST['cli_nome']) and isset($_POST['cli_senha']) and isset($_POST['cli_cpf'])){
    $cli_nome = $_POST['cli_nome'];
    $cli_sobrenome = $_POST['cli_sobrenome'];
    $cli_cpf       = $_POST['cli_cpf'];
    $cli_fone      = $_POST['cli_fone'];
    $cli_celular   = $_POST['cli_celular'];
    $cli_endereco  = $_POST['cli_endereco'];
    $cli_numero    = $_POST['cli_numero'];
    $cli_ponto_referencia = $_POST['cli_ponto_referencia'];
    $cli_bairro    = $_POST['cli_bairro'];
    $cli_cidade    = $_POST['cli_cidade'];
    $cli_cep       = $_POST['cli_cep'];
    $cli_senha     = $_POST['cli_senha'];
    $cli_data_cad  = Sistema::DataAtualUS()." ".Sistema::HoraAtual();

    
    //------
    $cli_nome = $cli_nome ." ". $cli_sobrenome;

    $clientes = new Clientes();

    $clientes->Preparar($cli_nome, $cli_cpf, $cli_fone, $cli_celular, $cli_endereco, $cli_numero, $cli_ponto_referencia, $cli_bairro, $cli_cidade, $cli_cep, $cli_data_cad, $cli_senha);

    if($clientes->Inserir()){
        
        $smarty->assign('NOME', $cli_nome);
        $smarty->assign('SITE', Config::SITE_NOME);
        $smarty->assign('SENHA', $cli_senha);
        $smarty->assign('PAG_MINHA_CONTA', Rotas::pag_ClienteConta());
        $smarty->assign('SITE_HOME', Rotas::get_SiteHOME());
        
        echo '<script>alert("Cadastrado com sucesso!");</script>';
        echo '<div class="alert alert-success"> Cadastrado com sucesso!</div>';
        
        
//        Rotas::Redirecionar(0, Rotas::pag_ClienteLogin());
        $login = new Login();
        $login->GetLogin($cli_celular, $cli_senha);
        
        if(Login::Logado()){
            $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
            $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());

            if(isset($_SESSION['PRO'])){
                Rotas::Redirecionar(0, Rotas::pag_Carrinho().'#tabelacarrinho');
            }else{
                Rotas::Redirecionar(0, Rotas::pag_ClienteConta().'#minhaconta');
            }
        }
        
        
    }
    
    
    
}else{
    $smarty->display('cadastro.tpl');
}




