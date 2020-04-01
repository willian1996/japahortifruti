<?php  
 
$smarty = new Template();

Login::MenuCliente();

foreach($_SESSION['CLI'] as $campo => $valor){
        $smarty->assign(strtoupper($campo), $valor);
}


if(isset($_POST['cli_nome']) and isset($_POST['cli_celular']) and isset($_POST['cli_cpf'])){
    $cli_nome = $_POST['cli_nome'];
    $cli_cpf       = $_POST['cli_cpf'];
    $cli_fone      = $_POST['cli_fone'];
    $cli_celular   = $_POST['cli_celular'];
    $cli_endereco  = $_POST['cli_endereco'];
    $cli_numero    = $_POST['cli_numero'];
    $cli_ponto_referencia = $_POST['cli_ponto_referencia'];
    $cli_bairro    = $_POST['cli_bairro'];
    $cli_cidade    = $_POST['cli_cidade'];
    $cli_cep       = $_POST['cli_cep'];
    $cli_senha     = $_POST['txt_senha'];
    $cli_data_cad  = $_SESSION['CLI']['cli_data_cad'];

    if($_SESSION['CLI']['cli_pass'] != md5($cli_senha)){
        echo '<script>alert("A senha para confirmar está inválida!");</script>';
        echo '<div class="alert alert-danger"><p>A senha para confirmar está inválida</p>';
        Sistema::VoltarPagina();
        echo "</div>";

    }else{

        $clientes = new Clientes();

        $clientes->Preparar($cli_nome, $cli_cpf, $cli_fone, $cli_celular, $cli_endereco, $cli_numero, $cli_ponto_referencia, $cli_bairro, $cli_cidade, $cli_cep, $cli_data_cad, $cli_senha);

        if(!$clientes->Editar($_SESSION['CLI']['cli_id'])){
            echo '<script>alert("Ocorreu um erro ao editar os dados!");</script>';
            echo '<div class="alert alert-danger">Ocorreu um erro ao editar os dados';

        }else{
            echo  '<script> alert("Dados alterados com sucesso! Atualizando os dados do login..."); </script>';
            echo '<div class="alert alert-success">Dados atualizados com sucesso!';
            echo "</div>";

            $login = new Login();
            $login->GetLogin($cli_celular, $cli_senha);
            Rotas::Redirecionar(0, Rotas::pag_CLienteDados().'#cadcliente');
        }
    }
}else{
    $smarty->display('cliente_dados.tpl');
}

